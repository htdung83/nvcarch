<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateProjectRequest;
use App\Models\Project;
use App\Repositories\ProjectCategoryRepository;
use App\Repositories\ProjectRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use AdminControllerTrait;

    public function __construct(
        protected ProjectRepository $repository,
        protected ProjectCategoryRepository $categoryRepository,
    ) {
    }

    public function getModuleName(): string
    {
        return 'projects';
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->repository->search(
            queries: $request->all(),
            orderBy: ['id' => 'desc'],
            relationships: ['category'],
            page: $request->input('page', 1),
            size: $request->input('size', 20)
        );

        return view('admin.projects.list', ['list' => $list]);
    }

    public function getCategoryList()
    {
        return $this->categoryRepository->search(
            queries: ['enabled' => 1],
            orderBy: ['position' => 'asc']
        );
    }

    public function create()
    {
        $nextPosition = $this->repository->getNextPosition();

        $needle = $this->repository->model();

        return view(
            'admin.projects.input-form',
            [
                'nextPosition' => $nextPosition,
                'needle' => $needle,
                'categories' => $this->getCategoryList(),
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function store(StoreOrUpdateProjectRequest $request)
    {
        $this->repository->create($request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function edit(int $id)
    {
        $needle = $this->repository->findOrThrowException($id);

        return view(
            'admin.projects.input-form',
            [
                'needle' => $needle,
                'categories' => $this->getCategoryList(),
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function update(StoreOrUpdateProjectRequest $request, int $id)
    {
        $this->repository->update($id, $request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);

        return $this->redirectListWithSuccessMessage("Xóa dữ liệu thành công!");
    }
}
