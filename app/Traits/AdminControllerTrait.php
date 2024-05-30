<?php

namespace App\Traits;

trait AdminControllerTrait
{
    abstract public function getModuleName(): string;

    public function redirectListWithSuccessMessage(string $message = null)
    {
        $url = route("{$this->getModuleName()}.index");

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
        session([$this->getBackToListUrlSessionName() => request()->fullUrl()]);
    }

    public function getBackToListUrlSessionName(): string
    {
        return $this->getModuleName() . '_backToListUrl';
    }

    public function getBackToListUrl(): string
    {
        return session(
            $this->getBackToListUrlSessionName(),
            route($this->getModuleName() . '.index')
        );
    }

    public function viewName(string $action): string
    {
        return $this->getModuleName() . '.' . $action;
    }

    public function getViewNameForList(): string
    {
        return $this->viewName('list');
    }

    public function getViewNameForInputForm(): string
    {
        return $this->viewName('input-form');
    }
}
