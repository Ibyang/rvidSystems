@extends('frontend.layouts.main')

@section('content')
    <div class="container ">
        <div class="row my-account-container">
            <div class="col-lg-3">
                @auth
                    @include('frontend.layouts.parts.sidebar')
                @endauth
            </div>
            <div class="col-lg-9 my-account-form" id="content">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <h3 class="my-account-title">Tax Invoice Query</h3>
                <h1 class="c-6600cc">Query Reason</h1>
                Top 10 Query
                <form class="register-form">
                    <select name="state" class="form-control mb-4">
                        <option>Query 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit?</option>
                    </select>
                    Please give us details
                    <textarea placeholder="" class="mt-3 mb-3"></textarea>
                    <div class="float-r">
                        <button class="btn btn-primary btn-ff0033">GO</button>
                    </div>
                    <div class="clear"></div>

                    <div class="row font-weight-bold">
                        <div class="col-sm text-center">Date</div>
                        <div class="col-sm-6 text-center">Description</div>
                        <div class="col-sm text-center">Invoiced<br>Amount</div>
                        <div class="col-sm text-center">Paid<br>Amount</div>
                        <div class="col-sm text-center">Invoice<br>Number</div>
                    </div>
                    <div class="row">
                        <div class="col-sm pl-0">{{ \Carbon\Carbon::parse($invoice->billing_date)->format('d/m/Y')}}</div>
                        <div class="col-sm-6">{{ $invoice->description  }}</div>
                        <div class="col-sm">${{ $invoice->total_amount }}</div>
                        <div class="col-sm">
                            {{--<a href="" class="font-weight-bold">($XX.XX)</a>--}}
                            @if($invoice->paid_amount == null)
                                ($XX.XX)
                            @else
                                ${{ number_format($invoice->paid_amount, 2) }}
                            @endif
                        </div>
                        <div class="col-sm text-center" >
                            <a data-toggle="collapse" href="#Expanded3" role="button" aria-expanded="false" aria-controls="collapseExample" class="font-weight-bold c0066ff">{{ $invoice->video_ID }}</a>
                        </div>
                    </div>


                    <div class="collapse" id="Expanded3" style="background-color: #F4F4F4">
                        <div class="rules-arrow"></div>
                        <div class="ExpandForm p-3">

                            <div>
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
                                                <div class="pb-1">Date: {{ \Carbon\Carbon::parse($invoice->billing_date)->format('F d, Y')}}</div>
                                                <div class="row mt-0">
                                                    <div class="col-md-auto pl-0 pr-0">To:</div>
                                                    <div class="col-md-auto pl-2">
                                                        <div>{{ $agent->name_agency }}</div>
                                                        <div>{{ $agent->address }}</div>
                                                        <div>{{ $agent->suburb . ' ' . $agent->state . ' ' . $agent->postocde }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm pr-0">
                                                <div class="billing-border">
                                                    Video #{{ $invoice->video_ID }}<br>
                                                    {{ $agent->address }}<br>
                                                    {{ $agent->suburb . ' ' . $agent->state . ' ' . $agent->postocde }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    DETAILS
                                    <table class="billing-table mt-2" cellpadding="0" cellspacing="0" width="100%">
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
                                    <div class="row mt-4 mb-0">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10 pr-0">
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
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
