<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;

class HomeController extends Controller
{
    /**
     * @var \App\Models\Study
     */
    protected $study;

    /**
     * @var \App\Models\Area
     */
    protected $area;

    public function __construct(Study $study) {
        // $this->middleware('auth');
        $this->study = $study;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $study = $this->study;
        return view('home', compact('study'));
    }
}
