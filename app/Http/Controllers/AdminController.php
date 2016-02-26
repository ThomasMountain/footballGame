<?php

namespace App\Http\Controllers;

use App\Audit;
use App\Http\Requests;
use App\Region;
use App\Report;
use App\Sonnet;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin');
        $this->middleware('isActive');
        $this->middleware('auth');
    }

    protected $fillable = [

    ];

    protected $dates = [

    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show main admin dashboard
     * @return \Illuminate\View\View
     */
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function configuration()
    {
        return view('admin.configuration');
    }

    public function userManager()
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
     * @param  int                      $id
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

    public function systemChecks()
    {
        $reportData = Report::active()
                            ->get();

        return view('admin.systemChecks', compact('reportData'));
    }

    public function contested()
    {
        $contestedObject = Audit::active()
                                ->contested()
                                ->get();

        return view('admin.contested', compact('contestedObject'));
    }

    public function dropdownValuesIndex()
    {
        $reportList = Report::all();

        $regionList = Region::all();

        $sonnetList = Sonnet::all();

        return view('admin.dropdownIndex', compact('reportList', 'regionList', 'sonnetList'));
    }

    public function newReport()
    {
        return view('admin.dropdown.new.newReport');
    }

    public function newRegion()
    {
        return view('admin.dropdown.new.newRegion');
    }

    public function newSonnet()
    {
        return view('admin.dropdown.new.newSonnet');
    }

    public function editReport($id)
    {
        $record = Report::findOrFail($id);
        return view('admin.dropdown.edit.report', compact('record'));
    }

    public function editRegion($id)
    {
        $record = Region::findOrFail($id);
        return view('admin.dropdown.edit.region', compact('record'));
    }

    public function editSonnet($id)
    {
        $record = Sonnet::findOrFail($id);
        return view('admin.dropdown.edit.sonnet', compact('record'));
    }
}
