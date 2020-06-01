<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function showLogin()
    {
        return view('user.login');
    }

    function login(UserRequest $userRequest)
    {
        if ($this->userService->login($userRequest)) {
            return redirect()->route('home.index');
        } else {
            return back();
        }
    }

    function logout() {
        $this->userService->logout();
        return redirect()->route('user.showLogin');
    }
}
