<?php

namespace App\Http\Traits;

trait AdminControllerTrait
{
    abstract public function getModuleName(): string;

    public function redirectListWithSuccessMessage(string $message = null)
    {
        $url = route("admin.{$this->getModuleName()}.index");

        if (session('backToListUrl')) {
            $url = session('backToListUrl');
        }

        return redirect()
            ->to($url)
            ->withSuccess(
                $message ?? trans('messages.saved_success')
            );
    }

    public function rememberCurrentUrl(): void
    {
        $currentUrl = request()->fullUrl();

        session('backToListUrl', $currentUrl);
    }
}
