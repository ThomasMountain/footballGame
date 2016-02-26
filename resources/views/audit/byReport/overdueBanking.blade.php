@extends('app')

@section('content')
    <div class="col-sm-10 col-sm-offset-1">

        <h3 class="page-header">{{ $reportInfo->description }}</h3>

        @if($reportData->count() > 0)

            <table class="table table-striped datatable" id="overdueBankingAuditTable">
                <thead>
                <tr>
                    <th>Haa</th>
                    <th>Store</th>
                    <th>Client No/Invoice No</th>
                    <th>Client Name</th>
                    <th>Net Amount</th>
                    <th>Payment Created</th>
                    <th>Difference</th>
                    <th>Payment Received</th>
                    <th>Payment Method</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reportData as $data)
                    <tr>
                        <td>{{ $data->haa }}</td>
                        <td>{{ $data->store_id }}</td>
                        <td>{!!  Html::soundNoLink($data->client_no)  !!}/{{$data->invoice_no }}</td>
                        <td>{{ $data->client }}</td>
                        <td>£{{ number_format($data->net_amount, 2) }}</td>
                        <td>{{ $data->payment_created }}</td>
                        <td>{{  $data->payment_received_date->diffInDays($data->payment_created) .' Days' }}</td>
                        <td>{{ $data->payment_received_date->toFormattedDateString() }}</td>
                        <td>{{ $data->payment_method }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @else
            {!! Html::bootstrapAlert('No applicable records found', 'info') !!}
        @endif
    </div>
@stop