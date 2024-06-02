<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use AdminControllerTrait;

    public function getModuleName(): string
    {
        return 'admin.users';
    }

    public function __construct(
        protected UserRepository $userRepository,
        protected RoleRepository $roleRepository
    ) {
    }

    public function getRoleList()
    {
        return $this->roleRepository->search();
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->userRepository->search(relationships: ['roles']);

        return view($this->getViewNameForList(), compact('list'));
    }

    public function create()
    {
        $needle = $this->userRepository->model();

        return view(
            $this->getViewNameForInputForm(),
            [
                'needle' => $needle,
                'roles' => $this->getRoleList(),
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        $needle = $this->userRepository->create($request->validated());

        $needle->assignRoles($validated['roles']);

        return $this->redirectListWithSuccessMessage();
    }

    public function edit($id)
    {
        $needle = $this->userRepository->findOrThrowException($id);

        return view(
            $this->getViewNameForInputForm(),
            [
                'needle' => $needle,
                'roles' => $this->getRoleList(),
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function update(UpdateUserRequest $request, int $id)
    {
        $validated = $request->validated();

        if ($validated['password'] === "") {
            unset($validated['password']);
        }

        $needle = $this->userRepository->update($id, $validated);

        $needle->assignRoles($validated['roles']);

        return $this->redirectListWithSuccessMessage();
    }

    public function destroy(int $id)
    {
        $needle = $this->userRepository->findOrThrowException($id);

        $needle->delete();

        return $this->redirectListWithSuccessMessage(trans('messages.deleted_success'));
    }
}
