<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $ideas = $user->ideas()->paginate(5);
        return view('users.show', compact('user', 'ideas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $editing = true;
        return view('users.show', compact('user', 'editing' , 'ideas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        //
    }


    public function profile(){
        
    }
    /**
     * Remove the specified resource from storage.
     */

}
