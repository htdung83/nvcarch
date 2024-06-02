<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdatePostRequest;
use App\Repositories\PostCategoryRepository;
use App\Repositories\PostRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use AdminControllerTrait;

    public function getModuleName(): string
    {
        return 'admin.posts';
    }

    public function __construct(
        protected PostRepository $repository,
        protected PostCategoryRepository $categoryRepository,
    ) {
    }

    public function getCategoryList()
    {
        return $this->categoryRepository->search();
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->repository->search(
            queries: $request->except(['page','size']),
            orderBy: ['created_at' => 'desc'],
            relationships: ['category'],
            page: $request->input('page', 1),
            size: $request->input('size', 20)
        );

        return view($this->getViewNameForList(), ['list' => $list]);
    }

    public function create()
    {
        $needle = $this->repository->model();

        return view(
            $this->getViewNameForInputForm(),
            [
                'needle' => $needle,
                'categories' => $this->getCategoryList(),
                'backToListUrl' => $this->getBackToListUrl()
            ]);
    }

    public function store(StoreOrUpdatePostRequest $request)
    {
        $this->repository->create($request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function edit(int $id)
    {
        $needle = $this->repository->findOrThrowException($id);

        return view(
            'admin.posts.input-form',
            [
                'needle' => $needle,
                'categories' => $this->getCategoryList(),
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function update(StoreOrUpdatePostRequest $request, int $id)
    {
        $this->repository->update($id, $request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function destroy(int $id)
    {
        $needle = $this->repository->findOrThrowException($id);

        $needle->delete();

        return $this->redirectListWithSuccessMessage(trans('messages.deleted_success'));
    }
}
