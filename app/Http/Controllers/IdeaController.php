<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class IdeaController extends Controller
{
    public function show(Ideas $idea)
    {
        return view("idea.show", compact("idea"));
    }

    public function edit(Ideas $idea)
    {
        $editing = true;
        return view("idea.show", compact("idea", "editing"));
    }

    public function update(Ideas $idea)
    {
        request()->validate([
            'content' => "required|min:3|max:240"
        ]);

        $idea->content = request()->get('content', '');
        $idea->save();

        return redirect()->route("idea.show", $idea->id)->with("success", "Idea updated successfully!");
    }

    public function create()
    {
        request()->validate([
            'content' => "required|min:5|max:240"
        ]);

        $content = request()->get('content', '');

        Ideas::create([
            "content" => $content
        ]);

        return redirect()->route("dashboard")->with('success', "Idea created successfully!");
    }

    public function destroy(Ideas $idea)
    {
        $idea->delete();

        return redirect()->route("dashboard")->with('success', "Idea deleted successfully!");
    }
}
