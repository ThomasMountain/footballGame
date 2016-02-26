<form class="form-horizontal">

    <div class="form-group"><label class="control-label col-sm-4" for="first_name">First Name:</label>

        <div class="col-sm-8">
            <p class="form-control-static">{{ $playerDetails->first_name }}</p>
        </div>
    </div>
    <div class="form-group"><label class="control-label col-sm-4" for="surname">Surname:</label>

        <div class="col-sm-8">
            <p class="form-control-static">{{ $playerDetails->surname }}</p>
        </div>
    </div>
    <div class="form-group"><label class="control-label col-sm-4" for="position">Position:</label>

        <div class="col-sm-8">
            <p class="form-control-static">{{ $playerDetails->positionDetails->name}}</p>
        </div>
    </div>
    <div class="form-group"><label class="control-label col-sm-4" for="current_club">Current Club:</label>

        <div class="col-sm-8">
            <p class="form-control-static">{{ $playerDetails->clubDetails->name }}</p>
        </div>
    </div>
    <div class="form-group"><label class="control-label col-sm-4" for="in_game_age">In Game Age:</label>

        <div class="col-sm-8">
            <p class="form-control-static">{{ Carbon\Carbon::now()->diffForHumans($playerDetails->created_at, true) }}</p>
        </div>
    </div>
    <div class="form-group"><label class="control-label col-sm-4" for="current_property">Current Property:</label>

        <div class="col-sm-8">
            <p class="form-control-static">Current Property Details</p>
        </div>
    </div>
</form>