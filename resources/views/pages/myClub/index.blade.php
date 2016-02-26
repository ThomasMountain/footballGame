@extends('app')
@section('content')
    <h3 class="page-header">My Club</h3>


    <form class="form form-horizontal">
        <h4 class="page-header">Club Information</h4>

        <div class="col-sm-6">
            <div class="form-group"><label class="col-sm-4 control-label" for="club_name">Club Name:</label>

                <div class="col-sm-8">
                    <p class="form-control-static">{{ $playerDetails->clubDetails->name }}</p>
                </div>
            </div>
            <div class="form-group"><label class="col-sm-4 control-label" for="league">League:</label>

                <div class="col-sm-8">
                    <p class="form-control-static">{{ $playerDetails->clubDetails->managerDetails->first_name.' '.$playerDetails->clubDetails->managerDetails->surname }}</p>
                </div>
            </div>
            <div class="form-group"><label class="col-sm-4 control-label" for="founded">Founded:</label>

                <div class="col-sm-8">
                    <p class="form-control-static">{{ $playerDetails->clubDetails->founded }}</p>
                </div>
            </div>
            <div class="form-group"><label class="col-sm-4 control-label" for="manager">Current Manager:</label>

                <div class="col-sm-8">
                    <p class="form-control-static">{{ $playerDetails->clubDetails->manager_id }}</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <h4 class="page-header">Stadium Information</h4>

            <div class="form-group"><label class="control-label col-sm-4" for="stadium_name">Stadium Name:</label>

                <div class="col-sm-8">
                    <p class="form-control-static">{{ $playerDetails->clubDetails->stadiumDetails->name }}</p>
                </div>
            </div>
            <div class="form-group"><label class="control-label col-sm-4" for="capacity">Stadium Capacity</label>

                <div class="col-sm-8">
                    <p class="form-control-static">{{ $playerDetails->clubDetails->stadiumDetails->capacity }}</p>
                </div>
            </div>
        </div>

    </form>


@stop