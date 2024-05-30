<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateServiceRequest;
use App\Repositories\ServiceRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use AdminControllerTrait;

    public function __construct(
        protected ServiceRepository $repository
    ) {
    }

    public function getModuleName(): string
    {
        return 'admin.services';
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->repository->search($request->all());

        return view('admin.services.list')
            ->with('list', $list);
    }

    public function create()
    {
        $nextPosition = $this->repository->getNextPosition();

        $needle = $this->repository->model();

        return view(
            'admin.services.input-form',
            [
                'nextPosition' => $nextPosition,
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function store(StoreOrUpdateServiceRequest $request)
    {
        try {
            $this->repository->create($request->validated());

            return $this->redirectListWithSuccessMessage();
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }

    public function edit(int $id)
    {
        $needle = $this->repository->findOrThrowException($id);

        return view(
            'admin.services.input-form',
            [
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function update(StoreOrUpdateServiceRequest $request, int $id)
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
