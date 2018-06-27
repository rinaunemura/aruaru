<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAruneController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->arune($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->notarune($id);
        return redirect()->back();
    }
}