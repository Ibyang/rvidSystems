@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form mb-5">
                <h3 class="my-account-title mb-3">Explore Voice Overs</h3>
                <h3>Music Preference</h3>
                <b>You can select from 3 options</b>
                <div class="row m-r-l">
                    <div class="col-md-auto text-center">
                        <div class="c0066ff font-weight-bold">1. RANDOM Music</div>
                        <div>We Pick Random Music <br>for Your Videos</div>
                    </div>
                    <div class="col-md-auto text-center p-0">
                        <div class="c0066ff font-weight-bold">2. ONE MUSIC TRACK</div>
                        <div>You use the same Music <br>for all Your Videos</div>
                    </div>
                    <div class="col-md-auto text-center p-0">
                        <div class="c0066ff font-weight-bold">3. ROTATED MUSIC TRACKS</div>
                        <div>You pick many Music Tracks and <br>they are rotated for each new <br>individual video</div>
                    </div>
                </div>
                <div class="color-404"><b>Select Music Style</b></div>
                <div class="row m-r-l">
                    <div class="col-sm-8 select-form">
                         <select name="state" class="col-11 form-control mt-2 mb-4">
                                    <option>Random Music</option>
                         </select>
                    </div>
                </div>
                <div class="row m-r-l">
                    <div class="col-sm">
                            <div class="d-flex flex-column">
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-chill"></i></div>
                                          <div class="align-self-center"><b>CHILLED AND AMBIENT</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center"><a class="color-0066ff" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><b>Click <br>to Select</b></a></div>
                                      </div>
                                      <div class="collapse msc-ctg-txt px-3 py-2" id="collapseExample">
                                          <div class="d-flex justify-content-between">
                                            <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Road Trip</b></div>
                                            <div><div class="msc-chck align-self-center">
                                                            <div class="custom-control custom-checkbox standard">
                                                                    <input type="checkbox" class="custom-control-input" id="c-ambient">
                                                                    <label class="custom-control-label" for="c-ambient"></label>
                                                            </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex justify-content-between my-2">
                                            <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Silk</b></div>
                                            <div><div class="msc-chck align-self-center">
                                                            <div class="custom-control custom-checkbox standard ml-3">
                                                                    <input type="checkbox" class="custom-control-input" id="silk">
                                                                    <label class="custom-control-label" for="silk"></label>
                                                            </div>
                                                 </div>
                                            </div>
                                          </div>
                                          <div class="d-flex justify-content-between">
                                            <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Sun Spots</b></div>
                                            <div><div class="msc-chck align-self-center">
                                                            <div class="custom-control custom-checkbox standard ml-3">
                                                                    <input type="checkbox" class="custom-control-input" id="sun-spots">
                                                                    <label class="custom-control-label" for="sun-spots"></label>
                                                            </div>
                                                 </div>
                                            </div>
                                          </div>
                                          <div class="d-flex justify-content-between my-2">
                                            <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Ultramarine</b></div>
                                            <div><div class="msc-chck align-self-center">
                                                            <div class="custom-control custom-checkbox standard ml-3">
                                                                    <input type="checkbox" class="custom-control-input" id="ultramarine">
                                                                    <label class="custom-control-label" for="ultramarine"></label>
                                                            </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex justify-content-between">
                                            <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>World Online</b></div>
                                            <div><div class="msc-chck align-self-center">
                                                            <div class="custom-control custom-checkbox standard ml-3">
                                                                    <input type="checkbox" class="custom-control-input" id="world-online">
                                                                    <label class="custom-control-label" for="world-online"></label>
                                                            </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex justify-content-between my-2">
                                            <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Solar Groove</b></div>
                                            <div><div class="msc-chck align-self-center">
                                                            <div class="custom-control custom-checkbox standard ml-3">
                                                                    <input type="checkbox" class="custom-control-input" id="solar-groove">
                                                                    <label class="custom-control-label" for="solar-grove"></label>
                                                            </div>
                                                </div>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-clc"></i></div>
                                          <div class="align-self-center"><b>CLASSICAL</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-cntry"></i></div>
                                          <div class="align-self-center"><b>COUNTRY</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-dance"></i></div>
                                          <div class="align-self-center"><b>DANCE AND CLUB</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-easy"></i></div>
                                          <div class="align-self-center"><b>EASY LISTENING</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-funk"></i></div>
                                          <div class="align-self-center"><b>FUNK AND SOUL</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                            </div>
                    </div>
                    <div class="col-sm">
                            <div class="d-flex flex-column">
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-jazz"></i></div>
                                          <div class="align-self-center"><b>JAZZ</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-lounge"></i></div>
                                          <div class="align-self-center"><b>LOUNGE AND GROOVES</b></div>
                                          <div class="align-self-center px-1"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-pop"></i></div>
                                          <div class="align-self-center"><b>POP</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-rock"></i></div>
                                          <div class="align-self-center"><b>ROCK</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-upbeat"></i></div>
                                          <div class="align-self-center"><b>UPBEAT</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-hop"></i></div>
                                          <div class="align-self-center"><b>URBAN AND HIP HOP</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection


