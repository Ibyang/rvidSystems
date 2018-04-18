<div class="border-bot2">
    <h3>Most Recent Billing</h3>

    @if(count($billing) > 0)
        @foreach($billing as $bill)
            <div class="row">
                <div class="col col-lg-2 pl-0">
                    {{ $bill->billing_date }}
                </div>
                <div class="col-12 col-md-auto">
                    #{{ $bill->video_id }}-{{ $bill->video_type }}
                </div>
                <div class="col col-lg-2">
                    {{ $bill->video_cost }}
                </div>
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
        <div class="col-6"><a href="">Go to Billing History</a></div>
        <div class="col-6"><a href="">See More</a></div>
    </div>
    <br>
</div>