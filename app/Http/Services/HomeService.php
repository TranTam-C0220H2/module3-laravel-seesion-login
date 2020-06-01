<?php


namespace App\Http\Services;


class HomeService
{
    function index() {
        if (session('login')) {
            return true;
        } else {
            session()->flash('not-login','You have not logged in');
            return false;
        }
    }
}
