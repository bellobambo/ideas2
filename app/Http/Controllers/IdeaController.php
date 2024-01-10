<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function show(Idea $idea)
    {
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    public function store()
    {

        request()->validate([
            'content' => 'required|min:5|max:240'
        ]);

        $idea = Idea::create([
            'content' => dump(request()->get('content', '')),
        ]);

        return redirect()->route('dashboard')->with('success', 'Idea was created successfully!');

    }

    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect()->route('dashboard')->with('success', 'Idea was Deleted successfully!');

    }

    public function edit(Idea $idea)
    {
        $editing = true;

        return view('ideas.show', compact('idea', 'editing'));
    }
    public function update(Idea $idea)
    {
        request()->validate([
            'content' => 'required|min:5|max:240'
        ]);

        $idea->content = request()->get('content', '');
        $idea->save();

        return redirect()->route('ideas.show' , $idea->id)->with('success', 'Idea was Updated successfully!');

    }


}
