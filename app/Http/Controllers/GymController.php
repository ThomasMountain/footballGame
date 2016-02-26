<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Player;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerDetails = Player::findOrFail(Auth::id())->with(['clubDetails', 'gymDetails', 'positionDetails', 'trainingDetails'])->first();

        return view('pages.gym.index', compact('playerDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function doGym($stat)
    {
        //TODO Get stat addition value from database
        $playerDetails = Player::findOrFail(Auth::id());

        if ($playerDetails->energy >= 5) {
            $userGymStats = Gym::findOrFail($playerDetails->id);

            $statCountVar = $stat . '_count';
            $userGymStats->$statCountVar++;
            $userGymStats->$stat = $userGymStats->$stat + 5;
            $userGymStats->save();

            $playerDetails->removeEnergy(5);

            Flash::info("Successfully trained $stat");
        } else {
            Flash::warning('Not Enough Energy, please try again later');
        }
        return redirect()->action('GymController@index');
    }
}
