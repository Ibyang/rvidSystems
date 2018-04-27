    @if (Request::segment(1) != 'get-started')
        <h3 class="register-title text-center">Join now! To start using REVid Today!</h3>
    @endif
        <div class="row register-info">
          <div class="col-md-auto">
            @if (Request::segment(2) == 'step1')
                <h4>4 Easy Steps (4 to Go!)</h4>
            @elseif (Request::segment(2) == 'step2')
                <h4>4 Easy Steps (3 to Go!)</h4>
            @elseif (Request::segment(2) == 'step3')
                <h4>Easy Steps (2 to Go!)</h4>
            @elseif (Request::segment(2) == 'step4')
                <h4> 4 Easy Steps (1 to Go!)</h4>
            @else
                <h4>Setup in 4 Easy Steps</h4>
            @endif
            <div class="row text-center">
                <div class="col-md-auto">
                    <i class="register-icon details"></i><br>
                    <p>STEP 1<br><b>Add Your<br>Details</b></p>
                </div>
                <div class="col-md-auto">
                    <i class="arrow"></i>
                </div>
                <div class="col-md-auto">
                    <i class="register-icon my-tmpt"></i><br>
                    <p>STEP 2<br><b>Set-up Your <br>Template</b></p>
                </div>
                <div class="col-md-auto">
                    <i class="arrow"></i>
                </div>
                <div class="col-md-auto">
                     <i class="register-icon pref"></i><br>
                    <p>STEP 3<br><b>Set your <br>Preferences</b></p>
                </div>
                <div class="col-md-auto">
                    <i class="arrow"></i>
                </div>
                <div class="col-md-auto">
                     <i class="register-icon payment"></i><br>
                     <p>STEP 4<br><b>Add Payment <br>Details</b></p>
                </div>
            </div>
          </div>
          <div class="col-md-auto text-center">
                <h4>All included in your Membership</h4>
                <div class="row register-col2">
                    <div class="col-sm">
                        <i class="register-icon rvd"></i><br>
                        <p>REVid<br><b>Ready<br>To Go</b></p>
                    </div>
                    <div class="col-sm">
                        <i class="register-icon db"></i><br>
                        <p>DriveBy<br><b>Ready<br>To Go</b></p>
                    </div>
                    <div class="col-sm">
                        <i class="register-icon lf"></i><br>
                        <p>LookFirst<br><b>Ready<br>To Go</b></p>
                    </div>
               </div>
        </div>
        </div>