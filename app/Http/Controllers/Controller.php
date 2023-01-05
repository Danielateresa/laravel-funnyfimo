<?php

namespace App\Http\Controllers;

use App\Models\Earring;
use App\Models\Ring;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $earrings = Earring::all();
        $rings = Ring::all();
        return view('index', compact('earrings', 'rings'));
    }


    public function about()
    {
        return view('about');
    }
}