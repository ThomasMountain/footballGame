<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UserManagerRequest;
use App\Region;
use App\User;
use Laracasts\Flash\Flash;

class UserManagerController extends Controller
{

    protected $dates = [
        'last_login'
    ];

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isActive');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::active()
                     ->get();

        return view('admin.userManager', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::active()
                         ->lists('description', 'id');

        return view('admin.userManager.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserManagerRequest $request)
    {
        User::create($request->all());


        return redirect('admin/userManager');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.userManager.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $regions = Region::active()
                         ->lists('description', 'id');



        return view('admin.userManager.edit', compact('user', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserManagerRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        flash()->overlay('User Successfully Updated');

        return redirect('admin/userManager');
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

}
