<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth:api')->only(['currentUser']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function currentUser()
    {
        
        return User::all();
//         $user = Auth::user();
//         return response()->json([
//             'user' => [
//                 'user_id' => $user->id,
//                 'user_name' => $user->name
//             ]
//         ]);
}
