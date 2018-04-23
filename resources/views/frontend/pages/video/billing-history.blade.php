@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form">
            <br><h3>Billing History</h3>
            <br>
            <div class="row">
                <div class="col-6">Statement Details</div>
                <div class="col-6">Balance Outstanding</div>
            </div>
            {{--<table class="table">--}}
            <table class="table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Invoiced<br>Amount</th>
                  <th>Paid<br>Amount</th>
                  <th>Invoice<br>Number</th>
                </tr>
              </thead>
              <tbody>

              @if(count($invoices) > 0)
                @foreach($invoices as $invoice)
                    <tr>
                      <td>{{ \Carbon\Carbon::parse($invoice->billing_date)->format('d/m/Y')}}</td>
                      <td>{{ $invoice->description  }}</td>
                      <td>${{ $invoice->total_amount }}</td>
                      <td>
                          @if($invoice->paid_amount == null)
                              ($XX.XX)
                          @else
                               ${{ number_format($invoice->paid_amount, 2) }}
                          @endif
                      </td>
                        <!-- temporarily will use the Video ID -->
                        <td><a href="#" data-toggle="modal" data-target="#InvoiceModal" data-dbid="{{$invoice->video_ID}}" style="text-decoration: none">{{ $invoice->video_ID }}</a></td>
                    </tr>
                @endforeach
              @else
                <tr><td colspan="5">No available invoice.</td></tr>
              @endif

              </tbody>
            </table>

            <!-- Tax Invoice Modal -->
            <div class="modal fade" id="InvoiceModal"
                 tabindex="-1" role="dialog"
                 aria-labelledby="InvoiceModalLabel">
                <div class="modal-dialog" role="document" style="max-width: 700px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tax Invoice</h4>
                            <button type="button" class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div id="dataid"></div>

                            <div class="">
                                <div class="text-left">
                                    {{ \Carbon\Carbon::parse($billing_details->billing_date)->format('d/m/Y')}}<br>
                                    To: <span id="client_company"></span><br>
                                    Address<br>
                                    Address<br>
                                </div>
                                <div class="text-right">
                                    Video # {{ $billing_details->video_ID }}</span><br>
                                    <span id="client_address"></span><br>
                                    <span id="client_suburb"></span>&nbsp;<span id="client_state"></span>&nbsp;<span id="client_postcode"></span>
                                </div>
                                DETAILS
                                <table class=table id="invoiceDetailsTable" style="border: 1px">
                                    {{--<tr>--}}
                                        {{--<td>1</td>--}}
                                        {{--<td>#XXXX Generic Video Production</td>--}}
                                        {{--<td>$75.0</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td></td>--}}
                                        {{--<td>Cost</td>--}}
                                        {{--<td>$10.00</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td></td>--}}
                                        {{--<td>Total</td>--}}
                                        {{--<td>$110.00</td>--}}
                                    {{--</tr>--}}
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
                                <div class="row">
                                    <div class="col">

                                            <button type="submit" class="btn btn-primary" id="btnPrintInvoice">
                                                Print
                                            </button>

                                    </div>

                                    <div class="col">
                                        <form method="POST" action=" {{ route('getInvoicePDF') }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" id="company" name="company" value="{{ $agent->name_agency }}">
                                            <input type="hidden" id="address" name="address"value="{{ $agent->address }}">
                                            <input type="hidden" id="suburb" name="suburb" value="{{ $agent->suburb }}">
                                            <input type="hidden" id="state" name="state" value="{{ $agent->state }}">
                                            <input type="hidden" id="postcode" name="postcode" value="{{ $agent->postcode }}">
                                            <input type="hidden" id="video_id" name="video_id" value=" {{ $billing_details->video_ID }}">
                                            <input type="hidden" id="bill_date" name="bill_date" value="{{ $billing_details->billing_date }}">

                                            <button type="submit" class="btn btn-primary">
                                                Download
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <form method="POST" action=" {{ route('emailInvoice') }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" id="email" name="email" value="{{ $agent->email }}">
                                            <input type="hidden" id="company" name="company" value="{{ $agent->name_agency }}">
                                            <input type="hidden" id="address" name="address"value="{{ $agent->address }}">
                                            <input type="hidden" id="suburb" name="suburb" value="{{ $agent->suburb }}">
                                            <input type="hidden" id="state" name="state" value="{{ $agent->state }}">
                                            <input type="hidden" id="postcode" name="postcode" value="{{ $agent->postcode }}">
                                            <input type="hidden" id="video_id" name="video_id" value=" {{ $billing_details->video_ID }}">
                                            <input type="hidden" id="bill_date" name="bill_date" value="{{ $billing_details->billing_date }}">

                                            <button type="submit" class="btn btn-primary">
                                                Email
                                            </button>
                                        </form>

                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">
                                            Query
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                    class="btn btn-default"
                                    data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $('#InvoiceModal').on('show.bs.modal', function(e) {
            $('body').addClass('test');

            var vidid = $(e.relatedTarget).attr('data-dbid');
            var company = $('#company').val();
            var address = $('#address').val();
            var suburb = $('#suburb').val();
            var state = $('#state').val();
            var postcode = $('#postcode').val();

            console.log("the value of company is " + company);


            //$('#video_id').val(vidid);
            // $('#video_id').html(vidid);
            $('#client_company').html(company);
            $('#client_address').html(address);
            $('#client_suburb').html(suburb);
            $('#client_state').html(state);
            $('#client_postcode').html(postcode);
            $('#invoiceDetailsTable').empty();

            if(vidid) {
                $.ajax({
                    url: '/getInvoiceDetails/' + vidid,
                    type: "GET",
                    dataType: "JSON",
                    success:function(data) {
                        // console.log("the return data is ", data)
                        var output;
                        var print_sum;
                        var ctr = 0;
                        var sum_items = 0;
                        $.each(data, function(i,e){
                            ctr = ctr + 1;
                            sum_items = sum_items + parseInt(e.amount);
                            output += '<tr><td>' + ctr + '</td><td>' + e.description + '</td><td style="text-align: right">$' + e.amount + '</td></tr>';
                        });
                        // print_sum = '<tr><td colspan="3" style="text-align: right;">' + sum_items + '</td></tr>';
                        print_sum = '<tr><td></td><td></td><td style="text-align: right"><b>Total: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$' + sum_items.toFixed(2) + '</td></tr>';

                        $('#invoiceDetailsTable').append(output);
                        $('#invoiceDetailsTable').append(print_sum);

                    }
                });
            }

        });


        $('#btnPrintInvoice').click(function(){
            window.print();
        });



    });

</script>
