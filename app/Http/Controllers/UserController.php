<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function show(): View
    {
        $arr = [
            "name" => "Omar",
            "address" => "Portsaid",
            "age" => 18
        ];

        return view('user', ['array' => $arr]);
    }
}
