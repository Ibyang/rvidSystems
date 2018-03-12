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
            <h3>Billing History</h3>
            <div class="row">
                <div class="col">Statement Details</div>
                <div class="col">Balance Outstanding</div>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Descriptio</th>
                  <th>Invoiced<br>Amount</th>
                  <th>Paid<br>Amount</th>
                  <th>Invoice<br>Number</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01.12.2017</td>
                  <td>Monthly Subscription (December 17)</td>
                  <td>$33.00</td>
                  <td>($XX.XX)</td>
                  <td>#XXXX</td>
                </tr>
              </tbody>
            </table>
            <div class="">
                <div class="text-left">
                    TAX INVOICE
                    Date: November 6 2017<br>
                    To: Billing Name<br>
                    Address<br>
                    Address<br>
                </div>
                <div class="text-right">
                    Video #XXXX<br>
                    33 South Rd<br>
                    Bassendean WA 6054
                </div>
                DETAILS
                <table>
                    <tr>
                        <td>1</td>
                        <td>#XXXX Generic Video Production</td>
                        <td>$75.0</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Cost</td>
                        <td>$10.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>$110.00</td>
                    </tr>
                </table>
                PAYMENT/RECEIPT
                <div class="row">
                    <div class="col">Paid</div>
                    <div class="col">Credit Card XXX-0004</div>
                    <div class="col">Balance</div>
                </div>
                <div class="row">
                    <div class="col">Date</div>
                    <div class="col">November 6 2017</div>
                    <div class="col">$0.00</div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">
                           Print
                        </button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">
                           Download
                        </button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">
                           Email
                        </button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">
                           Query
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
