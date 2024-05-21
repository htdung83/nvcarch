<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateProjectCategoryRequest;
use App\Models\ProjectCategory;
use App\Repositories\ProjectCategoryRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    use AdminControllerTrait;

    public function __construct(
        protected ProjectCategoryRepository $repository
    ) {
    }

    public function getModuleName(): string
    {
        return 'project-categories';
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->repository->search($request->all());

        return view('admin.project-categories.list', ['list' => $list]);
    }

    public function create()
    {
        $nextPosition = $this->repository->getNextPosition();

        $needle = $this->repository->model();

        return view(
            'admin.project-categories.input-form',
            [
                'nextPosition' => $nextPosition,
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function store(StoreOrUpdateProjectCategoryRequest $request)
    {
        $this->repository->create($request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function edit(int $id)
    {
        $needle = $this->repository->findOrThrowException($id);

        return view(
            'admin.project-categories.input-form',
            [
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function update(StoreOrUpdateProjectCategoryRequest $request, int $id)
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
