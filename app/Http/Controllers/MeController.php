<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    //
    public function index()
    {
        return view('mes.index');
    }
    public function trouble()
    {
        return view('mes.trouble');
    }
    public function share()
    {
        return view('mes.share');
    }
    public function arrange()
    {
        return view('mes.arrange');
    }
    public function goal()
    {
        return view('mes.goal');
    }
    public function gains()
    {
        return view('mes.gains');
    }
    public function say()
    {
        return view('mes.say');
    }
}
