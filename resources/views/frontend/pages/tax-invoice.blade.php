@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title">Tax Invoice Query</h3>
            <h3 class="c-6600cc">Query Reason</h3>
            Top 10 Query
            <form class="register-form">
                <select name="state" class="form-control mb-4">
                            <option>Query 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit?</option>
                </select>
                Please give us details
                <textarea placeholder="" class="mt-3 mb-3"></textarea>
                <div class="d-flex flex-row-reverse mb-3">
                       <div><button class="btn btn-primary btn-ff0033">GO</button></div>
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
                <div class="row">
                    <div class="col-sm pr-1">{{ \Carbon\Carbon::parse($invoice->billing_date)->format('d/m/Y')}}</div>
                    <div class="col-sm-5 p-0">{{ $invoice->description  }}</div>
                    <div class="col-sm p-0">${{ $invoice->total_amount }}</div>
                    <div class="col-sm p-0">
                        <!-- <a href="" class="font-weight-bold">($XX.XX)</a> -->
                         @if($invoice->paid_amount == null)
                                ($XX.XX)
                            @else
                                ${{ number_format($invoice->paid_amount, 2) }}
                         @endif
                    </div>
                    <div class="col-sm p-0">
                        <!-- <a href="" class="font-weight-bold c0066ff">($XX.XX)</a> -->
                        <a data-toggle="collapse" href="#Expanded3" role="button" aria-expanded="false" aria-controls="collapseExample" class="font-weight-bold c0066ff">{{ $invoice->video_ID }}</a>
                    </div>
                </div>
                    <div class="d-flex flex-row-reverse px-2">
                       <div class="billing-arrow"></div>
                    </div>
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
                                     <div class="pb-1">Date: {{ \Carbon\Carbon::parse($invoice->billing_date)->format('F d, Y')}}</div>
                                    <div class="row mt-0">
                                        <div class="col-md-auto pl-0 pr-0">To:</div>
                                        <div class="col-md-auto pl-2">
                                            <!-- <div>Billing Name</div>
                                            <div>Address</div>
                                            <div>Address</div> -->
                                            <div>{{ $agent->name_agency }}</div>
                                            <div>{{ $agent->address }}</div>
                                            <div>{{ $agent->suburb . ' ' . $agent->state . ' ' . $agent->postocde }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto pr-0">
                                    <div class="billing-border">
                                        <!-- Video #XXXX<br>
                                        33 South Rd<br>
                                        Bassendean WA 6054 -->
                                        Video #{{ $invoice->video_ID }}<br>
                                        {{ $agent->address }}<br>
                                        {{ $agent->suburb . ' ' . $agent->state . ' ' . $agent->postocde }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        DETAILS
                        <table class="billing-table mt-2" cellpadding="0" cellspacing="0" width="100%">
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
                            <?php
                                $ctr = 0;
                                $sum_items = 0
                            ?>
                                @foreach($details as $detail)
                                <?php
                                    $ctr++;
                                    $sum_items = $sum_items + (int)$detail->amount;
                                ?>
                                <tr>
                                    <td>{{ $ctr }}</td>
                                    <td>{{ $detail->description }}/td>
                                    <td>${{ number_format($detail->amount,2) }}</td>
                                </tr>
                                @endforeach;
                                {{--<tr>--}}
                                    {{--<td></td>--}}
                                    {{--<td class="text-right"><span class="font-weight-bold">Cost</span></td>--}}
                                    {{--<td>$10.00</td>--}}
                                {{--</tr>--}}
                                <tr>
                                    <td></td>
                                    <td class="text-right"><span class="font-weight-bold">Total</span></td>
                                    <td>${{ number_format($sum_items,2) }}</td>
                                </tr>
                        </table>
                        <div class="mt-3 mb-2">PAYMENT/RECEIPT</div>
                        <div class="row">
                            <div class="col-sm-2 text-right">Paid</div>
                            <div class="col-sm-8">Credit Card XXX-0004</div>
                            <div class="col-sm-2">Balance</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 text-right">Date</div>
                            <div class="col-sm-8">November 6 2017</div>
                            <div class="col-sm-2">$0.00</div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div>
                                <div class="billing-button text-right">
                                    <div class="d-inline-block">
                                        <button type="submit" class="btn btn-primary btn-ff0033">
                                            <i class="billing-icon billing-print"></i><span>Print</span>
                                        </button>
                                    </div>
                                    <div class="d-inline-block">
                                        <button type="submit" class="btn btn-primary btn-ff0033">
                                           <i class="billing-icon billing-download"></i><span>Download</span>
                                        </button>
                                    </div>
                                    <div class="d-inline-block">
                                        <button type="submit" class="btn btn-primary btn-ff0033">
                                           <i class="billing-icon billing-email"></i><span class="pl-2">Email</span>
                                        </button>
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
            </form>
    </div>
</div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')





@stop
