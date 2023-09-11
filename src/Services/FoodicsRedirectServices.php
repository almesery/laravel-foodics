<?php

namespace Foodics\Services;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class FoodicsRedirectServices extends BaseServices
{
    public function setState(): string
    {
        $state = Str::random(50);
        Session::put("foodics_state", $state);
        return $state;
    }

    public function getState()
    {
        return Session::get("foodics_state");
    }

    public function redirect(): RedirectResponse
    {
        return redirect()->away($this->redirectUrl . '?client_id=' . $this->clientId() . "?state=" . $this->setState());
    }
}
