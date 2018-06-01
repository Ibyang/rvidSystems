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
                <h3 class="my-account-title">Explore Music Selection</h3>
                Select Music Style
                <form class="form-horizontal" method="POST" action="{{ route('account-update-music') }}">
                    {{ csrf_field() }}
                    <select name="music_style" class="form-control">
                        <option value="Random Music(Standard)" {{ $music['music_style'] === 'Random Music(Standard)' ? 'selected' : '' }}>Random Music (Standard)</option>
                        <option value="One Music" {{ $music['music_style'] === 'One Music' ? 'selected' : '' }}>One Music</option>
                        <option value="Rotation Music" {{ $music['music_style'] === 'Rotation Music' ? 'selected' : '' }}>Rotation Music</option>
                    </select>
                    <br>
                    <div class="col-sm">
                        You can Select from 3 options
                        <div class="c0066ff font-weight-bold">1. RANDOM MUSIC (Standard)</div>
                        <div>We Pick Random Music for Your Videos</div>
                        <div class="c0066ff pt-3 font-weight-bold">2. ONE MUSIC (+ $5.00)</div>
                        <div>You Pick One Music Selection for Your Videos</div>
                        <div class="c0066ff pt-3 font-weight-bold">3. ROTATION MUSIC (+ $5.00)</div>
                        <div>You Pick Many Music and Rotated for Your Videos</div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="music-block active"><a href="">Cafe Jazz</a></div>
                            <div class="music-block"><a href="">Middle of the Road</a></div>
                            <div class="music-block"><a href="">Upbeat</a></div>
                            <div class="music-block"><a href="">Jazz Latin</a></div>
                            <div class="music-block"><a href="">Classical</a></div>
                            <div class="music-block"><a href="">Modern</a></div>
                            <div class="music-block"><a href="">New Age</a></div>
                        </div>
                        <div class="col-sm step-three-register">
                            <div class="row mt-2">
                                <div class="col-sm">
                                    <div class="music-block-play"><i class="play-icon"></i>Cafe Jazz 1</div>
                                </div>
                                <div class="col-sm my-account-subcription">
                                    <div class="custom-control custom-checkbox standard">
                                        <input type="checkbox" class="custom-control-input" id="customCheck19" name="musicSelection[]" value="music1"
                                            @if(in_array('music1', $music_list))
                                               checked
                                            @endif>
                                        <label class="custom-control-label" for="customCheck19"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="music-block-play"><i class="play-icon"></i>Cafe Jazz 2</div>
                                </div>
                                <div class="col-sm my-account-subcription">
                                    <div class="custom-control custom-checkbox standard">
                                        <input type="checkbox" class="custom-control-input" id="customCheck20" name="musicSelection[]" value="music2"
                                             @if(in_array('music2', $music_list))
                                               checked
                                             @endif>
                                        <label class="custom-control-label" for="customCheck20"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary font-weight-bold">
                                        Update Data
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection



