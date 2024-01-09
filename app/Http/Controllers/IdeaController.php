<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {

        $idea = Idea::create([
            'content' => dump(request()->get('idea' , '')),
        ]);

        return redirect()->route('dashboard');

    }
}
