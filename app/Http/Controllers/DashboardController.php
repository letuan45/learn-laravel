<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class DashboardController extends Controller
{
    public function index()
    {
        $all_ideas = Ideas::orderBy("created_at", "DESC");

        if (request()->has("search")) {
            $search_term = request()->get('search', '');
            $all_ideas = $all_ideas->where('content', 'like', '%' . $search_term);
        }

        return view("dashboard", ["ideas" => $all_ideas->paginate(2)]);
    }
}
