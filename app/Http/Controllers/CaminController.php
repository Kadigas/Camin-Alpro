<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camin;

class CaminController extends Controller
{
    public function index()
    {
        $data = Camin::getAllDataCamin();
        return view("camin", ["data" => $data]);
    }

    public function show1()
    {

        $data = Camin::getDataCamin(0);
        return view("show", ["data" => $data]);
    }

    public function show2()
    {

        $data = Camin::getDataCamin(1);
        return view("show", ["data" => $data]);
    }

    public function show3()
    {

        $data = Camin::getDataCamin(2);
        return view("show", ["data" => $data]);
    }
    
    public function show4()
    {

        $data = Camin::getDataCamin(3);
        return view("show", ["data" => $data]);
    }
}