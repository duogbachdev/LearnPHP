<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test()
    {
        $data = [
            "name" => "DuogBach",
            "age" => "22",
        ];
        return view('test', $data);
    }

    public function test2($data1, $data2)
    {
        return $data1 . "<br/>" . $data2 . "<br/>";
    }
}
