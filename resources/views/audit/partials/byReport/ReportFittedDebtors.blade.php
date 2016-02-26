@if( $reportList->count() > 0)
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
        @foreach($reportList as $data)
            {{--{{ dd($data) }}--}}
            <tr>
                <td>{{ $data->haaDetails->first_name.' '. $data->haaDetails->surname }}</td>
                <td>{{ $data->storeDetails->name }}</td>
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
@endif