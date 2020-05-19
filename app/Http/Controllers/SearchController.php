<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResults(Request $req) {
        $search = $req->input('search');

        if(!$search) {
            return redirect()->route('home');
        }

        $users = User::where(DB::raw("CONCAT('first_name', ' ', 'last_name')"), 'LIKE', "%{$search}%")
            ->orWhere('username', 'LIKE', "%{$search}%")->get();
        return view('search.results')->with('users', $users);
    }
}
