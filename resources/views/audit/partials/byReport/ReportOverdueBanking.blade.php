@if( $reportList->count() > 0)
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
        @foreach($reportList as $data)
            <tr>
                <td>{{ $data->haaDetails->first_name.' '. $data->haaDetails->surname }}</td>
                <td>{{ $data->storeDetails->name }}</td>
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
@endif