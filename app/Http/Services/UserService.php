<?php


namespace App\Http\Services;


class UserService
{
    function login($request)
    {
        $username = $request->inputUsername;
        $password = $request->inputPassword;

        if ($username == 'admin@gmail.com' && $password == '1234567890@Q') {
            session()->flash('success', 'Login is successful');
            session()->push('login', true);
            return true;
        } else {
            session()->flash('success-fail', 'Login is fail');
            return false;
        }
    }

    function logout() {
        session()->flush();
    }
}
