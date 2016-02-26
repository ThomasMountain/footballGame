@extends('app')

@section('content')
    <div class="col-sm-10 col-sm-offset-1">
        <h3 class="page-header">{{ $reportInfo->description }}</h3>
        @if($reportData->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped datatable" id="overdueBankingAuditTable">
                    <thead>
                    <tr>
                        <th>Haa</th>
                        <th>Store</th>
                        <th>Client No/Invoice No</th>
                        <th>Client Name</th>
                        <th>Balance</th>
                        <th>Amount</th>
                        <th>Invoice Created</th>
                        <th>Fitting Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reportData as $data)
                        <tr>
                            <td>{{ $data->haa }}</td>
                            <td>{{ $data->store_id }}</td>
                            <td>{!!  Html::soundNoLink($data->client_no)  !!}/{{$data->invoice_no }}</td>
                            <td>{{ $data->client }}</td>
                            <td>{{ $data->balance }}</td>
                            <td>{{ $data->amount }}</td>
                            <td>{{ $data->invoice_created->toFormattedDateString() }}</td>
                            <td>{{ $data->fitting_date->toFormattedDateString() }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        @else
            {!! Html::bootstrapAlert('No report records found','info') !!}
        @endif
    </div>
@stop