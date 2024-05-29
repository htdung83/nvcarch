<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateBannerRequest;
use App\Repositories\BannerRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    use AdminControllerTrait;

    public function __construct(
        protected BannerRepository $repository
    ) {
    }

    public function getModuleName(): string
    {
        return 'admin.banners';
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->repository->search($request->all());

        return view($this->getViewNameForList(), ['list' => $list]);
    }

    public function create()
    {
        $nextPosition = $this->repository->getNextPosition();

        $needle = $this->repository->model();

        return view(
            $this->getViewNameForInputForm(),
            [
                'nextPosition' => $nextPosition,
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function store(StoreOrUpdateBannerRequest $request)
    {
        $this->repository->create($request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function edit(int $id)
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

    public function update(StoreOrUpdateBannerRequest $request, int $id)
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
