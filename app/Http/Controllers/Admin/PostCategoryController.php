<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdatePostCategoryRequest;
use App\Repositories\PostCategoryRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    use AdminControllerTrait;

    public function getModuleName(): string
    {
        return 'admin.post-categories';
    }

    public function __construct(
        protected PostCategoryRepository $repository
    ) {
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->repository->search($request->all());

        return view($this->getViewNameForList(), ['list' => $list]);
    }

    public function create()
    {
        $needle = $this->repository->model();

        return view(
            $this->getViewNameForInputForm(),
        [
            'needle' => $needle,
            'backToListUrl' => $this->getBackToListUrl()
        ]);
    }

    public function store(StoreOrUpdatePostCategoryRequest $request)
    {
        $this->repository->create($request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function edit($id)
    {
        $needle = $this->repository->findOrThrowException($id);

        return view(
            $this->getViewNameForInputForm(),
            [
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function update(StoreOrUpdatePostCategoryRequest $request, int $id)
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
