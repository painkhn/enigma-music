<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Genre};
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $genres = Genre::all();
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'user' => $user,
            'genres' => $genres
        ]);
    }
}
