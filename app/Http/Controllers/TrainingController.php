<?php

namespace App\Http\Controllers;

use App\Player;
use App\Training;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerDetails = Player::findOrFail(Auth::id())->with(['clubDetails', 'gymDetails', 'positionDetails', 'trainingDetails'])->first();

        return view('pages.training.training', compact('playerDetails'));
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

    public function doTrain($stat)
    {
        //TODO Get stat addition value from database
        $playerDetails = Player::findOrFail(Auth::id())->with('trainingDetails')->first();

        if ($playerDetails->energy >= 5) {

            $statCountVar = $stat . '_count';
            $playerDetails->trainingDetails->$statCountVar++;
            $playerDetails->trainingDetails->$stat = $playerDetails->trainingDetails->$stat + 5;
            $playerDetails->trainingDetails->save();

            $playerDetails->removeEnergy(5);

            Flash::info("Successfully trained $stat");
        } else {
            Flash::warning('Not Enough Energy, please try again later');
        }
        return redirect()->action('TrainingController@index');
    }
}
