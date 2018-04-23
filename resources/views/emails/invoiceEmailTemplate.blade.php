<!DOCTYPE html>
<html>
<head>
    <title>Revid Systems Inc - Invoice</title>
</head>

<body>
<div class="">
    <div class="text-left">
        {{ \Carbon\Carbon::parse($invoice_arr['bill_date'])->format('d/m/Y') }}<br>
        To: <span id="client_company">{{ $invoice_arr['company'] }}</span><br>
        Address<br>
        Address<br>
    </div>
    <div class="text-right">
        Video #<span id="videoid">{{ $invoice_arr['video_id'] }}</span><br>
        <span id="client_address">{{ $invoice_arr['address'] }}</span><br>
        <span id="client_suburb">{{ $invoice_arr['suburb'] }}</span>&nbsp;<span id="client_state">{{ $invoice_arr['state'] }}</span>&nbsp;<span id="client_postcode">{{ $invoice_arr['postcode'] }}</span>
    </div>
    DETAILS
    <table class=table id="invoiceDetailsTable" style="border: 1px">
        <?php
        $ctr = 0;
        $sum_items = 0
        ?>
        @foreach($invoices as $inv)
            <?php
            $ctr++;
            $sum_items = $sum_items + (int)$inv->amount;
            ?>
            <tr>
                <td>{{ $ctr }}</td>
                <td>{{ $inv->description }}</td>
                <td>${{ number_format($inv->amount,2) }}</td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td style="text-align: right"><b>Total: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${{ number_format($sum_items,2) }}</td>
        </tr>
    </table>
    {{--PAYMENT/RECEIPT--}}
    {{--<div class="row">--}}
    {{--<div class="col">Paid</div>--}}
    {{--<div class="col">Credit Card XXX-0004</div>--}}
    {{--<div class="col">Balance</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col">Date</div>--}}
    {{--<div class="col">November 6 2017</div>--}}
    {{--<div class="col">$0.00</div>--}}
    {{--</div>--}}

</div>
</body>

</html>