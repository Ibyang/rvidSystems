<div class="reg-form-container">
    @if (Request::segment(2) == 'step2')
        <h4 class="color-000 font20">4 Easy Steps (3 to Go!)</h4>
    @elseif (Request::segment(2) == 'step3')
        <h4 class="color-000 font20">4 Easy Steps (2 to Go!)</h4>
    @elseif (Request::segment(2) == 'step4')
        <h4 class="color-000 font20">4 Easy Steps (1 to Go!)</h4>
    @elseif (Request::segment(1) != 'step1' && Request::segment(1) != 'pricing')
        <h4 class="color-000 font20">4 Easy Steps</h4>
    @endif
    <div class="row m-0">
        <div class="col px-1 mb-2">
            <div class="join-step-container @if (Request::segment(2) != (1 && 2) || Request::segment(2) == 'step1' || (Request::segment(1) == 'use-revid') ) bg-006 @else bg-eae @endif pt-3 pb-2 px-2">
                <div class="row">
                    <div class="col-md-auto pl-4 pr-3 text-center"><i class="join-step-icon @if (Request::segment(2) != (1 && 2) || Request::segment(2) == 'step1' || (Request::segment(1) == 'use-revid') ) j-s-1h @else j-s-1 @endif "></i></div>
                    <div class="col-sm font-weight-bold p-0">
                        <h4 class="@if (Request::segment(2) != (1 && 2) || Request::segment(2) == 'step1' || (Request::segment(1) == 'use-revid')) color-ffffff @endif">STEP 1</h4>
                        <div class="@if (Request::segment(2) != (1 && 2) || Request::segment(2) == 'step1' || (Request::segment(1) == 'use-revid')) color-ffffff @endif">Add Your <br>Details</div>
                    </div>
                    <div class="col-md-auto align-self-center"><div class="join-step-arrow @if (Request::segment(2) != (1 && 2) || Request::segment(2) == 'step1' || (Request::segment(1) == 'use-revid') ) border-fff @endif"></div></div>
                </div>
            </div>
        </div>
        <div class="col px-1 mb-2">
            <div class="join-step-container @if (Request::segment(2) == 'step2') bg-006 @else bg-eae @endif pt-3 pb-2 px-2">
                <div class="row">
                    <div class="col-md-auto pl-4 pr-3 text-center"><i class="join-step-icon @if (Request::segment(2) == 'step2') j-s-2h @else j-s-2 @endif "></i></div>
                    <div class="col-sm font-weight-bold p-0">
                        <h4 class="@if (Request::segment(2) == 'step2') color-ffffff @endif">STEP 2</h4>
                        <div class="@if (Request::segment(2) == 'step2') color-ffffff @endif">Set-up Your <br>Template</div>
                    </div>
                    <div class="col-md-auto align-self-center"><div class="join-step-arrow @if (Request::segment(2) == 'step2') border-fff @else border-424 @endif "></div></div>
                </div>
            </div>
        </div>
        <div class="col px-1 mb-2">
            <div class="join-step-container @if (Request::segment(2) == 'step3') bg-006 @else bg-eae @endif  pt-3 pb-2 px-2">
                <div class="row">
                    <div class="col-md-auto pl-4 pr-3 text-center"><i class="join-step-icon @if (Request::segment(2) == 'step3') j-s-3h @else j-s-3 @endif"></i></div>
                    <div class="col-sm font-weight-bold p-0">
                        <h4 class="@if (Request::segment(2) == 'step3') color-ffffff @endif">STEP 3</h4>
                        <div class="@if (Request::segment(2) == 'step3') color-ffffff @endif">Set Your <br>Preferences</div>
                    </div>
                    <div class="col-md-auto align-self-center"><div class="join-step-arrow @if (Request::segment(2) == 'step3') border-fff @else border-424 @endif"></div></div>
                </div>
            </div>
        </div>
        <div class="col px-1 mb-2">
            <div class="join-step-container @if (Request::segment(2) == 'step4') bg-006 @else bg-eae @endif  pt-3 pb-2 px-2">
                <div class="row">
                    <div class="col-md-auto pl-4 pr-3 text-center"><i class="join-step-icon @if (Request::segment(2) == 'step4') j-s-4h @else j-s-4 @endif"></i></div>
                    <div class="col-sm font-weight-bold p-0">
                        <h4 class="@if (Request::segment(2) == 'step4') color-ffffff @endif">STEP 4</h4>
                        <div class="@if (Request::segment(2) == 'step4') color-ffffff @endif">Add Payment<br>Details</div>
                    </div>
                    <div class="col-md-auto align-self-center"><div class="join-step-arrow @if (Request::segment(2) == 'step') border-fff @else border-424 @endif"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>