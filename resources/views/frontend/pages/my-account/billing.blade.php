<div class="border-bot2">
    <h3>Most Recent Billing</h3>

    @if(count($billing) > 0)
        @foreach($billing as $bill)
            <div class="row">
                <div class="col-4">
                    {{ \Carbon\Carbon::parse($bill->billing_date)->format('d/m/Y')}}
                </div>
                <div class="col-4">
                    {{ $bill->description }}
                </div>
                <div class="col-4" style="text-align: left;">
                    {{ $bill->amount }}
                </div>
                {{--<div class="col col-lg-2 pl-0">--}}
                    {{--{{ \Carbon\Carbon::parse($bill->billing_date)->format('d/m/Y')}}--}}
{{--                    {{ $bill->billing_date }}--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-auto">--}}
                    {{--{{ $bill->description }}--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-auto">--}}
                    {{--{{ $bill->amount }}--}}
                {{--</div>--}}
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="col-12">
                <p>No billing available as of now.</p>
            </div>
        </div>
    @endif


    <div class="row">
        <div class="col-6">
            <a href="">Go to Billing History</a>
        </div>
        <div class="col-6"><a href="">See More</a></div>
    </div>
    <br>
</div>