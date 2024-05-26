<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateStaffMemberRequest;
use App\Repositories\StaffMemberRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class StaffMemberController extends Controller
{
    use AdminControllerTrait;

    public function __construct(
        protected StaffMemberRepository $repository
    ) {
    }

    public function getModuleName(): string
    {
        return 'staff-members';
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->repository->search($request->all());

        return view('admin.staff-members.list')
            ->with('list', $list);
    }

    public function create()
    {
        $nextPosition = $this->repository->getNextPosition();

        $needle = $this->repository->model();
        $needle->position = $nextPosition;

        return view(
            'admin.staff-members.input-form',
            [
                'nextPosition' => $nextPosition,
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function store(StoreOrUpdateStaffMemberRequest $request)
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
            'admin.staff-members.input-form',
            [
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function update(StoreOrUpdateStaffMemberRequest $request, int $id)
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
