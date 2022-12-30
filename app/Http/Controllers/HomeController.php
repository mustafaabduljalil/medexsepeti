<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function __construct(public HomeService $homeService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('home', $this->homeService->getHomeData());
    }

}
