<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = [
            [
                "name" => "Erickson",
                "age" => 23,
            ],
            [
                "name" => "Jorayne",
                "age" => 23,
            ]
            ,
            [
                "name" => "Rudy",
                "age" => 17,
            ]
        ];

        return view("dashboard",
        ['users' => $users]
    );
    }
}
