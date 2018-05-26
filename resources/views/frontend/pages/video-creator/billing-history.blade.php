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
            <h3 class="my-account-title">Billing History</h3>
            <div class="row">
                <div class="col-sm pl-0"><h3>Statement Details</h3></div>
                <div class="col-sm">
                    <div class="row">
                        <div class="col-md-auto"><h3>Balance <br>Outstanding</h3></div>
                        <div class="col-6">
                            <div class="billing-amount">$XXX</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row font-weight-bold">
                <div class="col-sm text-center">Date</div>
                <div class="col-sm-6 text-center">Description</div>
                <div class="col-sm text-center">Invoiced<br>Amount</div>
                <div class="col-sm text-center">Paid<br>Amount</div>
                <div class="col-sm text-center">Invoice<br>Number</div>
            </div>
              @if(count($invoices) > 0)
                @foreach($invoices as $invoice)
                    <div class="row">
                        <div class="col-sm pl-0">{{ \Carbon\Carbon::parse($invoice->billing_date)->format('d/m/Y')}}</div>
                        <div class="col-sm-6">{{ $invoice->description  }}</div>
                        <div class="col-sm">${{ $invoice->total_amount }}</div>
                        <div class="col-sm">
                            @if($invoice->paid_amount == null)
                                ($XX.XX)
                            @else
                                ${{ number_format($invoice->paid_amount, 2) }}
                            @endif
                        </div>
                        <div class="col-sm">
                            <!-- temporarily will use the Video ID -->
                            <a href="#" class="font-weight-bold c0066ff" data-toggle="modal" data-target="#InvoiceModal" data-dbid="{{$invoice->video_ID}}" style="text-decoration: none">{{ $invoice->video_ID }}</a>
                        </div>
                    </div>
                @endforeach
              @else
                <div class="row">
                    No available invoice.
                </div>
              @endif

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

                            <div>
                                <div class="float-r mr-4">
                                    {{--<div class="billing-arrow"></div>--}}
                                </div>
                                <div class="clear"></div>

                                <div class="billing-border">
                                    <div class="text-left">
                                        <div class="row">
                                            <div class="col-sm pl-0">
                                                <h3>TAX INVOICE</h3>
                                                <h3>#XXXX</h3>
                                            </div>
                                            <div class="col-sm pr-0">
                                                <div class="text-right">
                                                    <img src={{ asset('storage/account/revid-billing-icon.png') }} />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm pl-0">
                                                <div class="pb-1">{{ \Carbon\Carbon::parse($billing_details->billing_date)->format('d/m/Y')}}</div>
                                                <div class="row mt-0">
                                                    <div class="col-md-auto pl-0 pr-0">To:</div>
                                                    <div class="col-md-auto pl-2">
                                                        <div id="client_company"></div>
                                                        {{--<div>Address</div>--}}
                                                        {{--<div>Address</div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm pr-0">
                                                <div class="billing-border">
                                                    Video #{{ $billing_details->video_ID }}<br>
                                                    <span id="client_address"></span><br>
                                                    <span id="client_suburb"></span>&nbsp;<span id="client_state"></span>&nbsp;<span id="client_postcode"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    DETAILS
                                    <table class="billing-table mt-2" id="invoiceDetailsTable" cellpadding="0" cellspacing="0" width="100%"></table>
                                    <!-- COMMENT THIS PORTION FOR NOW -->
                                    {{--<div class="mt-3 mb-2">PAYMENT/RECEIPT</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-2 text-right">Paid</div>--}}
                                        {{--<div class="col-sm-8">Credit Card XXX-0004</div>--}}
                                        {{--<div class="col-sm-2">Balance</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-2 text-right">Date</div>--}}
                                        {{--<div class="col-sm-8">November 6 2017</div>--}}
                                        {{--<div class="col-sm-2">$0.00</div>--}}
                                    {{--</div>--}}
                                    <div class="row mt-4 mb-0">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10 pr-0">
                                            <div class="billing-button text-right">
                                                <div class="d-inline-block">
                                                    <button type="submit" class="btn btn-primary btn-ff0033" id="btnPrintInvoice">
                                                        <i class="billing-icon billing-print"></i><span>Print</span>
                                                    </button>
                                                </div>
                                                <div class="d-inline-block">
                                                    <form method="POST" action=" {{ route('getInvoicePDF') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" id="company" name="company" value="{{ $agent->name_agency }}">
                                                        <input type="hidden" id="address" name="address"value="{{ $agent->address }}">
                                                        <input type="hidden" id="suburb" name="suburb" value="{{ $agent->suburb }}">
                                                        <input type="hidden" id="state" name="state" value="{{ $agent->state }}">
                                                        <input type="hidden" id="postcode" name="postcode" value="{{ $agent->postcode }}">
                                                        <input type="hidden" id="video_id" name="video_id" value=" {{ $billing_details->video_ID }}">
                                                        <input type="hidden" id="bill_date" name="bill_date" value="{{ $billing_details->billing_date }}">
                                                        <button type="submit" class="btn btn-primary btn-ff0033">
                                                            <i class="billing-icon billing-download"></i><span>Download</span>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="d-inline-block">
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
                                                        <button type="submit" class="btn btn-primary btn-ff0033">
                                                            <i class="billing-icon billing-email"></i><span class="pl-2">Email</span>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="d-inline-block">
                                                    <button type="submit" class="btn btn-primary btn-ff0033">
                                                        <i class="billing-icon billing-query"></i><span class="pl-2">Query</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div> <!-- modal body -->
                        <div class="modal-footer">
                            <button type="button"
                                    class="btn btn-default"
                                    data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>  <!-- end of Invoice Modal -->

        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
                        // print_sum = '<tr><td></td><td></td><td style="text-align: right"><b>Total: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$' + sum_items.toFixed(2) + '</td></tr>';
                        print_sum = '<tr><td></td><td class="text-right"><span class="font-weight-bold">Total</span></td><td>' + sum_items.toFixed(2) + '</td></tr>';

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
