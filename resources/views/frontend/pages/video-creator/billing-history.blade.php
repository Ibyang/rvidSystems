@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-5">
            <h3 class="my-account-title">Billing History</h3>
            <div class="d-flex justify-content-between">
                <div class="align-self-center"><h3>Statement Details</h3></div>
                <div>
                    <div class="row">
                        <div class="col-md-auto pr-0"><h3>Balance <br>Outstanding</h3></div>
                        <div class="col-sm pr-0">
                           <div class="billing-amount">$XXX.XX</div>
                        </div>
                    </div>
                </div>
            </div>
            <table>
                <tr class="text-center">
                    <th width="100" valign="top">Date</th>
                    <th width="270" valign="top">Description</th>
                    <th width="70">Invoiced<br>Amount</th>
                    <th width="140">Paid<br>Amount</th>
                    <th width="70">Invoice<br>Number</th>
                </tr>
                <tr>
                    <td colspan="5" height="20"></td>
                </tr>
            </table>
            
            @if(count($invoices) > 0)
                @foreach($invoices as $invoice)
                    <div class="row">
                        <div class="col-sm pr-1">{{ \Carbon\Carbon::parse($invoice['billing_date'])->format('d/m/Y')}}</div>
                        <div class="col-sm-5 p-0">{{ $invoice['description']  }}</div>
                        <div class="col-sm p-0">${{ $invoice['total_amount'] }}</div>
                        <div class="col-sm p-0">
                            @if($invoice->paid_amount == null)
                                ($XX.XX)
                            @else
                                ${{ number_format($invoice->paid_amount, 2) }}
                            @endif
                        </div>
                        <div class="col-sm p-0 text-center">
                            <!-- temporarily will use the Video ID -->
                            <a href="#" class="font-weight-bold c0066ff" data-toggle="modal" data-target="#InvoiceModal" data-dbid="{{$invoice['video_ID']}}" style="text-decoration: none">{{ $invoice['video_ID'] }}</a>
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
                                        <!-- <div class="billing-arrow"></div> -->
                                    </div>
                                    <div class="clear"></div>
                                    
                                    <div class="billing-border">
                                    <div class="text-left">
                                        <div class="row">
                                            <div class="col-sm pl-0">
                                                <h3>TAX INVOICE</h3>
                                                <h3>#XXXX</h3>
                                            </div>
                                            <div class="col-sm text-center"> 
                                                <b>Revid Systems Pty Ltd</b> 
                                                <div>ABN 94 111 076 254</div> 
                                            </div> 
                                            <div class="col-sm pr-0">
                                                <div class="text-right">
                                                    <img src={{ asset('storage/app/public/account/revid-billing-icon.png') }} />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm pl-0">
                                                 <div class="pb-1">Date: {{ \Carbon\Carbon::parse($billing_details['billing_date'])->format('F d Y')}}</div>
                                                <div class="row mt-2">
                                                    <div class="col-md-auto pl-0 pr-0">To:</div>
                                                    <div class="col-md-auto pl-2">
                                                         <div id="client_company"></div>
                                                        <div>Address</div>
                                                        <div>Address</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-auto pr-0">
                                                Suite 90 City West<br> 
                                                102 Railway St<br> 
                                                West Perth WA 6005 
                                                <div class="mt-3">accounts@revid.com.au</div> 
                                                <!-- <div class="billing-border"> -->
                                                    <!-- Video #XXXX<br>
                                                    33 South Rd<br>
                                                    Bassendean WA 6054 -->
                                                    <!-- Video #{{ $billing_details['video_ID'] }}<br>
                                                    <span id="client_address"></span><br>
                                                    <span id="client_suburb"></span>&nbsp;<span id="client_state"></span>&nbsp;<span id="client_postcode"></span> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between bg-e8e8e8 billing-table p-2"> 
                                        <div class="pl-4"> 
                                            Agent: Name Here<br>
                                            Agency: Agency Name Here 
                                        </div> 
                                        <div> 
                                            Video #XXXX<br> 
                                            33 South Rd<br> 
                                            Bassendean WA 6054 
                                        </div> 
                                    </div> 
                                    
                                    <div class="my-3"><b>DETAILS</b></div> 
                                    <table class="billing-table mt-2" id="invoiceDetailsTable" cellpadding="0" cellspacing="0" width="100%">
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>#XXXX Generic Video Production</td>
                                            <td>$75.0</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Surge (+$15.00)</td>
                                            <td>$15.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Facebook (+$5.00)</td>
                                            <td>$5.00</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Upload (realestate.com.au)</td>
                                            <td>$5.00</td>
                                        </tr>
                                        <tr>
                                            <td> &nbsp; </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> &nbsp; </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="text-right"><span class="font-weight-bold">Cost</span></td>
                                            <td>$10.00</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="text-right"><span class="font-weight-bold">Total</span></td>
                                            <td>$110.00</td>
                                        </tr> -->
                                    </table>
                                    <div class="mt-3 mb-2"><b>PAYMENT/RECEIPT</b></div>
                                    <div class="row">
                                        <div class="col-sm-2 text-right">Paid</div>
                                        <div class="col-sm-5">Credit Card XXX-0004</div>
                                        <div class="col-sm-5 pr-0">
                                            <div class="d-flex justify-content-between">
                                                <div>Amount Paid</div>
                                                <div class="billing-a border-l-r-666 text-right">$0.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 text-right">Date</div>
                                        <div class="col-sm-5">November 6 2017</div>
                                        <div class="col-sm-5 pr-0">
                                            <div class="d-flex justify-content-between">
                                                <div>Balance</div>
                                                <div class="billing-a border-l-r-666 text-right">$0.00</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end mt-3">
                                        <div>
                                            <div class="billing-button text-right">
                                                <div class="d-inline-block">
                                                    <button type="submit" class="btn btn-primary btn-ff0033" id="btnPrintInvoice">
                                                        <i class="billing-icon billing-print"></i><span>Print</span>
                                                    </button>
                                                </div>
                                                <div class="d-inline-block">
                                                    <form method="POST" action=" {{ route('getInvoicePDF') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" id="company" name="company" value="{{ $agent['name_agency'] }}">
                                                        <input type="hidden" id="address" name="address"value="{{ $agent['address'] }}">
                                                        <input type="hidden" id="suburb" name="suburb" value="{{ $agent['suburb'] }}">
                                                        <input type="hidden" id="state" name="state" value="{{ $agent['state'] }}">
                                                        <input type="hidden" id="postcode" name="postcode" value="{{ $agent['postcode'] }}">
                                                        <input type="hidden" id="video_id" name="video_id" value=" {{ $billing_details['video_ID'] }}">
                                                        <input type="hidden" id="bill_date" name="bill_date" value="{{ $billing_details['billing_date'] }}">
                                                        <button type="submit" class="btn btn-primary btn-ff0033">
                                                            <i class="billing-icon billing-download"></i><span>Download</span>
                                                        </button>
                                                    </form>
                                                    <!-- <button type="submit" class="btn btn-primary btn-ff0033">
                                                       <i class="billing-icon billing-download"></i><span>Download</span>
                                                    </button> -->
                                                </div>
                                                <div class="d-inline-block">
                                                     <form method="POST" action=" {{ route('emailInvoice') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" id="email" name="email" value="{{ $agent['email'] }}">
                                                        <input type="hidden" id="company" name="company" value="{{ $agent['name_agency'] }}">
                                                        <input type="hidden" id="address" name="address"value="{{ $agent['address'] }}">
                                                        <input type="hidden" id="suburb" name="suburb" value="{{ $agent['suburb'] }}">
                                                        <input type="hidden" id="state" name="state" value="{{ $agent['state'] }}">
                                                        <input type="hidden" id="postcode" name="postcode" value="{{ $agent['postcode'] }}">
                                                        <input type="hidden" id="video_id" name="video_id" value=" {{ $billing_details['video_ID'] }}">
                                                        <input type="hidden" id="bill_date" name="bill_date" value="{{ $billing_details['billing_date'] }}">
                                                        <button type="submit" class="btn btn-primary btn-ff0033">
                                                            <i class="billing-icon billing-email"></i><span class="pl-2">Email</span>
                                                        </button>
                                                    </form>
                                                   <!-- <button type="submit" class="btn btn-primary btn-ff0033">
                                                       <i class="billing-icon billing-email"></i><span class="pl-2">Email</span>
                                                    </button> -->
                                                </div>
                                                <div class="d-inline-block">
                                                    <form method="POST" action=" {{ route('account-tax-inquiry') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" id="video_id" name="video_id" value=" {{ $billing_details['video_ID'] }}">
                                                        <button type="submit"
                                                                class="btn btn-primary btn-ff0033"><i class="billing-icon billing-query"></i><span class="pl-2">Query</span>
                                                        </button>
                                                    </form>
                                                    <!-- <button type="submit" class="btn btn-primary btn-ff0033">
                                                       <i class="billing-icon billing-query"></i><span class="pl-2">Query</span>
                                                    </button> -->
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
@endsection

{{-- page level scripts --}}
@section('footer_scripts')


    <script type="text/javascript">

        var APP_URL = {!! json_encode(url('/')) !!}

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
                        url: 'http://revid.com.au/rvidSystems/getInvoiceDetails/' + vidid,
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


@stop    

