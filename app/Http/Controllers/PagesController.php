<?php

namespace App\Http\Controllers;

use App\Player;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isActive');

    }

    public function dashboard()
    {
        $playerDetails = Player::findOrFail(Auth::id())->with(['clubDetails', 'gymDetails', 'positionDetails', 'trainingDetails'])->first();

        return view('pages.home.home', compact('playerDetails'));
    }

    public function profile($id)
    {
        $playerDetails = Player::findOrFail($id)->with(['clubDetails', 'gymDetails', 'positionDetails', 'trainingDetails'])->first();

        return view('pages.profile.dashboard', compact('playerDetails'));
    }

    public function myClub()
    {
        $playerDetails = Player::findOrFail(Auth::id())->with(['clubDetails', 'gymDetails', 'positionDetails', 'trainingDetails'])->first();

        return view('pages.myClub.index', compact('playerDetails'));
    }
}
