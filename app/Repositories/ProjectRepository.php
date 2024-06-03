<?php

namespace App\Repositories;

use App\Models\Project;
use App\Traits\ModelHasPositionTrait;
use App\Traits\UtilsTrait;
use Illuminate\Database\Eloquent\Builder;

class ProjectRepository extends AbstractRepository
{
    use ModelHasPositionTrait;
    use UtilsTrait;

    public function __construct()
    {
        parent::__construct(Project::class);
    }

    public function addQueriesTo(Builder &$builder, array $queries): void
    {
        $builder->when(
            isset($queries['keywords']) && !empty($queries['keywords']),
            function (Builder $builder) use ($queries) {
                $builder->where('name', 'LIKE', '%' . $queries['keywords'] . '%');
            }
        );
    }

    public function replaceContent(): void
    {
        $replacement = $this->search();

        foreach ($replacement as $project) {
            $content = preg_replace('#<h1>(.*)</h1>#m','<h5><strong>$1</strong></h5>', $project->content);
            $content = preg_replace('#<h2>(.*)</h2>#m','<h5><strong>$1</strong></h5>', $content);
            $content = preg_replace('#<h5><strong><strong>(.*)</strong></strong></h5>#m','<h5><strong>$1</strong></h5>', $content);

            $project->update(['content' => $content]);
        }
    }

    public function extractContentImageForAvatar(): void
    {
        $replacement = $this->search();

        foreach ($replacement as $project) {
            $imgUrl = $this->extractFirstImageSrcIn($project->content);

            $project->update(['img_url' => $imgUrl]);
        }
    }
}
