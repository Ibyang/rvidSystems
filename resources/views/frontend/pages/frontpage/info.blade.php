  <div class="container">
    <div class="f-page-info">
        <div class="row">
          <div class="col-sm">
            <h3 class="font-weight-bold mb-3">What is REVid?</h3>
            <p class="text-justify">
                <b>REVid turns your property listings into Video with Voice-Over</b>.<br>
                All you need to do is paste the property URL from your agency’s website into the REVid online system or if you prefer, direct upload the images and description. We take care of the rest, turning your property listings into a video that includes voice over and music.
            </p>
            <p class="text-justify">
                <b>Video with Voice Over</b> <br>
                You receive a photo-based video that  ncludes voice over and music edited into a professional video production. We compile professionally pre-recorded voice over tracks that have been  selected  to  match the inclusion and features of your property. Using voice is an effective way of describing the property to viewers as they watch. It’s  amazing  how voice engages with your viewers and makes the video much more interesting and enjoyable.
            </p>
          </div>
          <div class="col-sm">
            <h3 class="font-weight-bold mb-3">Sample REVid Video</h3>
            <img class="img-fluid" src={{ asset('storage/sample-thumb.jpg') }} />
          </div>
        </div>
        <p class="m-0"><b>Images to Life</b></p>
        <p class="text-justify">Your property images are bought to life using animation, movement and transition – to mimic actual video. It’s pretty close to the real thing because most property video recordings typically contain little movement. Each video uses your brand and image – and your contact details – integrating the promotion of property and agent to maximum  ffect.</p>
        
        <p class="m-0"><b>Makes Real Estate Video Doable</b></p>
        <p class="text-justify">REVid gives you a Fast, Low Cost and Easy solution. Yes, it’s not a fully directed film-crew production – it’s not meant to be – <b>it’s a low cost doable solution</b> – quick and easy to achieve. The video production framework gives you options of 2-hour to 24-hour turn-around or the standard time of 2-3 days. You also get four video formats, including sub-titles, each designed and set-up to cover most online, social media and marketing applications. <b>It’s great value for money!</b></p>  

        <h3 class="font-weight-bold f-t-bg">Where Use REVid?</h3>

        <p class="text-justify">Together, the vision and the voice (plus sub-titles) give an end-product that is perfect for use across many platforms. Such as:</p>
        <div class="fv-mobile text-center mt-3">
            <div class="border-ccc pt-2">
                <div class="row">
                    <div class="col-4 pr-0"><i class="link-icon2 li-v3-sites"></i></div>
                    <div class="col-auto align-self-center pl-0"><a href="{{ route('use-revid-website') }}"><b>Online Sites</b></a></div>
                </div>
            </div>
            <div class="border-ccc pt-2 my-2">
                <div class="row">
                    <div class="col-4 pr-0"><i class="link-icon2 li-v3-social"></i></div>
                    <div class="col-auto align-self-center pl-0"><a href="{{ route('use-revid-social-media') }}"><b>Social Media</b></a></div>
                </div>
            </div>
            <div class="border-ccc pt-2">
                <div class="row">
                    <div class="col-4 pr-0 pl-2"><i class="link-icon2 li-v3-pc"></i></div>
                    <div class="col-auto text-left line-height20 pl-0"><a href="{{ route('use-revid-corporate') }}"><b>Presentations <br>and Corporate</b></a>a</div>
                </div>
            </div>
            <div class="border-ccc pt-2 my-2">
                <div class="row">
                    <div class="col-4 p-0-30"><i class="link-icon2 li-v3-office"></i></div>
                    <div class="col-auto text-left line-height20 pl-0"><a href="/"><b>Home Opens<br> Office Display</b></a></div>
                </div>
            </div>
            <div class="border-ccc pt-2">
                <div class="row">
                    <div class="col-4 p-0-30"><i class="link-icon2 li-v3-marketing"></i></div>
                    <div class="col-auto text-left line-height20 pl-0"><a href="{{ route('use-revid-marketing') }}"><b>Marketing Email <br>Promotions</b></a></div>
                </div>
            </div>
        </div>  
        <div class="fv-web">
            <div class="row text-center f-use-revid-2 font-weight-bold mt-4">
                <div class="col-sm">
                    <i class="link-icon sites"></i>
                    <p class="m-0"><a href="{{ route('use-revid-website') }}">Online<br>Sites</a></p>
                </div>
                <div class="col-sm">
                    <i class="link-icon social"></i>
                    <p class="m-0"><a href="{{ route('use-revid-social-media') }}">Social<br>Media</a></p>
                </div> 
                <div class="col-sm">
                    <i class="link-icon pres"></i>
                    <p class="m-0"><a href="{{ route('use-revid-corporate') }}">Presentations <br>and Corporate</a></p>
                </div>
                <div class="col-sm">
                    <i class="link-icon marketing"></i>
                    <p class="m-0"><a href="{{ route('use-revid-marketing') }}">Marketing Email <br>Promotions</a></p>
                </div>
                <div class="col-sm">
                    <i class="link-icon office"></i>
                    <p class="m-0"><a href="/">Home Opens <br>Office Displays</a></p>
                </div>
                <div class="col-md-auto">
                     <a href="{{ route('what-is-driveby') }}"><img class="img-fluid" src={{ asset('storage/included-free.jpg') }} /></a>
                </div>
            </div>
        </div>
    </div>
    @if(Request::is('/'))  
        <div class="fv-mobile p-0-35 mt-3">
            <div class="row f-video-step">
                <div class="col-sm px-0">
                    <a href="{{ route('make-video-automatic') }}"><h3 class="c-6600cc font-weight-bold mt-3">$99 Automatic <br>Video</h3></a>
                    <form class="f-g-v-form mt-2 mx-0">
                        <div class="f-text-circle2">
                            <div class="f-text2 font-weight-bold">
                            MOST <br>POPULAR</div>
                        </div>
                        <div class="d-flex flex-row bd-highlight mb-3">
                          <div><input type="email" class="form-control w-100 text-right" placeholder="URL here"></div>
                          <div class="ml-2">
                               <div class="d-flex flex-row-reverse">
                                   <button type="submit" class="btn btn-primary b-radius-7"><b>GO</b></button>
                               </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4 font14">
                               <div><b>Direct Upload</b><br>
                                Click here to upload images<br>
                                and property details</div>
                                <div class="align-self-center ml-4"><button type="submit" class="btn btn-primary px-1 py-2 b-radius-7"><b>UPLOAD</b></button></div>
                        </div>
                    </form>
                    <div class="row mt-3 mx-0">
                        <div class="col pl-0">
                            <p class="text-justify">We do it all, and make your Video using the images and information in your online property listing.</p>
                        </div>
                        <div class="col text-right pr-0">
                            <img class="img-fluid" src={{ asset('storage/realty-sample.jpg') }} /><br>
                            <span>SAMPLE</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm p-0">
                    <h3 class="c0066ff font-weight-bold mt-3">$139 Manual <br>Video</h3>
                    <img class="img-fluid" src={{ asset('storage/steps.png') }} />
                    <div class="row mt-3 mx-0">
                        <div class="col pl-0">
                            <p class="text-justify w-spacing">If you are happy to spend the time, you select and match images to voice over tracks and make the Video just like you want it.</p>
                        </div>
                        <div class="col text-right pr-0">
                            <img class="img-fluid" src={{ asset('storage/realty-sample.jpg') }} /><br>
                            <span>SAMPLE</span>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    @endif    
    <div class="row f-video-step mx-0 my-4 fv-web border-bot5 pb-4">
        <div class="col-sm">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{ route('make-video-automatic') }}"><h3 class="c-6600cc font-weight-bold">$99 Automatic Video</h3></a>
                    <p class="text-justify">We do it all, and make your Video using the images and information in your online property listing.</p>
                </div>
                <div class="col text-right">
                    <img class="img-fluid" src={{ asset('storage/realty-sample.jpg') }} /><br>
                    <span>SAMPLE</span>
                </div>
            </div>
            <form class="f-g-v-form mt-2">
                <div class="f-text-circle">
                    <div class="f-text font-weight-bold">
                    MOST <br>POPULAR</div>
                </div>

                <div class="d-flex flex-column bd-highlight">
                  <div>
                        <div class="d-flex flex-row">
                            <div><input type="text" name="url" id="url" class="form-control text-right b-radius-0" placeholder="URL here"></div>
                            <div><button type="submit" class="btn btn-primary b-radius-7"><b>GO</b></button></div>
                        </div>
                  </div>
                  <div class="">
                       <div class="d-flex flex-row">
                           <div class="f-g-v-direct"><b>Direct Upload</b><br>
                            Click here to upload images<br>
                            and property details</div>
                            <div class="align-self-center"><a href="{{ route('login-page') }}"><button type="button" class="btn btn-primary px-1 py-2 b-radius-7"><b>UPLOAD</b></button></a></div>
                        </div>
                  </div>
                </div>
                
            </form>
        </div>
        <div class="col-sm">
            <div class="row mt-4">
                <div class="col">
                    <a href="{{ route('make-video-manual') }}"><h3 class="c0066ff font-weight-bold">$139 Manual Video</h3></a>
                    <p class="text-justify">If you are happy to spend the time, you select and match images to voice over tracks and make the Video just like you want it.</p>
                </div>
                <div class="col-push-6 text-right">
                    <img class="img-fluid" src={{ asset('storage/realty-sample-2.jpg') }} /><br>
                    <span>SAMPLE</span>
                </div>
            </div>
            <div class="row f-s-video mt-2">
                <div class="col-sm">
                    <div class="icon-list text-center pt-2">
                        <i class="f-step-video f-s-v-pictures"></i><br>
                        <p><b>STEP 1</b> <br>Pictures</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="icon-list text-center pt-2">
                        <i class="f-step-video f-s-v-script"></i><br>
                        <p><b>STEP 2</b> <br>Script</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="icon-list text-center pt-2">
                        <i class="f-step-video f-s-v-template"></i><br>
                        <p><b>STEP 3</b> <br>Template</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="icon-list text-center pt-2">
                        <i class="f-step-video f-s-v-voice"></i><br>
                        <p><b>STEP 4</b> <br>Voice</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="icon-list text-center pt-2">
                        <i class="f-step-video f-s-v-music"></i><br>
                        <p><b>STEP 5</b> <br>Music</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>