<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class DashboardController extends Controller
{
    public function index()
    {
        $all_ideas = Ideas::orderBy("created_at", "DESC")->paginate(2);

        return view("dashboard", ["ideas" => $all_ideas]);
    }
}
