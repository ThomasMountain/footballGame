@extends('app')
@section('content')

    <h3 class="page-header">Welcome to the training ground</h3>

    <p>Here you can train your footballing skills</p>

    <div class="list-group">
        <a href="/doTraining/passing" class="list-group-item">Complete some Passing drills</a>
        <a href="/doTraining/shooting" class="list-group-item">Complete some Shooting drills</a>
        <a href="/doTraining/dribbling" class="list-group-item">Complete some Dribbling drills</a>
        <a href="/doTraining/tackling" class="list-group-item">Complete some Tackling drills</a>
        <a href="/doTraining/goalkeeping" class="list-group-item">Complete some Goalkeeping drills</a>
        <a href="/doTraining/interception" class="list-group-item">Complete some Interception drills</a>
    </div>

    @include('pages.training.partials.timesTrained')

@stop