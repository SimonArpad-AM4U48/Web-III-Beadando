<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Chatitem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $chatitems = Chatitem::orderBy('created_at', 'desc')->paginate(200);
        return view('home')->with(['chatitems' => $chatitems]);
    }

    public function chat(Request $request) {

        $request ->validate([
            'message' => 'required',
        ]);
        $chatitem = Auth::user()->chatitems()->create($request->except('_token'));
        $chatitem->save();

        return redirect()
            ->route('home');
    }
}
