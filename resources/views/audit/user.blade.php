@extends('app')
@section('content')

    <h3 class="page-header">Audit By User: {{ $auditedUser->first_name.' '. $auditedUser->surname }}</h3>

    <?php $num = 1; ?>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @foreach($reportList as $report)

            <?php $record = substr($report->model, 6) . 'Records'; ?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$num}}" aria-expanded="false" aria-controls="collapse{{$num}}">
                        {{ $report->description }}
                    </a>
                    <span class="badge pull-right">{{ $auditedUser->$record->count() }}</span>
                </div>
                <div id="collapse{{$num}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$num}}">
                    <div class="panel-body">
                        <?php $reportList = $auditedUser->$record;?>
                        @if($reportList->count() > 0)
                            @include("audit.partials.byReport.$report->model")
                        @else
                            {!! Html::bootstrapAlert('No Records Found For This Report', 'success') !!}
                        @endif
                    </div>
                </div>
            </div>

            <?php $num++; ?>
        @endforeach
    </div>

@stop