<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateServiceRequest;
use App\Http\Traits\AdminControllerTrait;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use AdminControllerTrait;

    public function __construct(protected ServiceRepository $serviceRepository)
    {
    }

    public function getModuleName(): string
    {
        return 'services';
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->serviceRepository->search($request->all());

        return view('admin.services.list')
            ->with('list', $list);
    }

    public function create()
    {
        $nextPosition = $this->serviceRepository->getNextPosition();

        return view('admin.services.create', ['nextPosition' => $nextPosition]);
    }

    public function store(StoreOrUpdateServiceRequest $request)
    {
        try {
            $this->serviceRepository->create($request->validated());

            return $this->redirectListWithSuccessMessage();
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }

    public function edit(int $id)
    {
        $needle = $this->serviceRepository->findOrThrowException($id);

        return view('admin.services.edit', ['needle' => $needle]);
    }

    public function update(StoreOrUpdateServiceRequest $request, int $id)
    {
        $this->serviceRepository->update($id, $request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function destroy(int $id)
    {
        $this->serviceRepository->delete($id);

        return $this->redirectListWithSuccessMessage("Xóa dữ liệu thành công!");
    }
}
