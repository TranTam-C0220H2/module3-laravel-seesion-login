<?php

namespace App\Http\Controllers;

use App\Http\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;
    public function __construct(HomeService $homeService)
    {
     $this->homeService = $homeService;
    }

    function index() {
        if ($this->homeService->index()) {
            return view('home');
        } else {
            return redirect()->route('user.showLogin');
        }

    }
}
