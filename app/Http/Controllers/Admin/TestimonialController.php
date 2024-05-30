<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrUpdateTestimonialRequest;
use App\Repositories\TestimonialRepository;
use App\Traits\AdminControllerTrait;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use AdminControllerTrait;
    public function __construct(
        protected TestimonialRepository $repository
    ) {
    }

    public function index(Request $request)
    {
        $this->rememberCurrentUrl();

        $list = $this->repository->search($request->all());

        return view('admin.testimonials.list', ['list' => $list]);
    }

    public function create()
    {
        $needle = $this->repository->model();

        return view(
            'admin.testimonials.input-form',
            [
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function store(StoreOrUpdateTestimonialRequest $request)
    {
        $this->repository->create($request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function edit(int $id)
    {
        $needle = $this->repository->findOrThrowException($id);

        return view(
            'admin.testimonials.input-form',
            [
                'needle' => $needle,
                'backToListUrl' => $this->getBackToListUrl()
            ]
        );
    }

    public function update(StoreOrUpdateTestimonialRequest $request, int $id)
    {
        $this->repository->update($id, $request->validated());

        return $this->redirectListWithSuccessMessage();
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);

        return $this->redirectListWithSuccessMessage("Xóa dữ liệu thành công!");
    }

    public function getModuleName(): string
    {
        return 'admin.testimonials';
    }
}
