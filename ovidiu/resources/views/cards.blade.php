@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">

    <!--card nr.A-->
    <div class="container-fluid" style="min-height: 87vh;">
        <div class="w-100">
            <div class="row">
                <div class="col-12 text-end mb-3">
                    <a href="{{ route('homepage') }}" class="btn btn-success">Homepage</a>
                </div>
            </div>
        </div>
        <br>

        <div class="w-100">
            <div class="row">
                <div class="col-12 d-flex flex-row">

                    <div class="solitaire-card text-center fw-bold">
                        <div class="corner_number_top position-absolute">A</div>
                        <br>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/cards/heart.svg') }}" alt="heart" class="red-svg" style="width: 20px">
                        </div>
                        <br>
                        <div class="corner_number_bottom position-absolute">A</div>
                    </div>

                    <!--card nr.2-->
                    <div class="solitaire-card">
                        <div class="corner_number_top position-absolute">2</div>
                        <div class="heart"></div>
                        <br>
                        <div class="heart"></div>
                        <div class="corner_number_bottom position-absolute">2</div>
                    </div>

                    <!--card nr.3-->
                    <div class="solitaire-card">
                        <div class="corner_number_top position-absolute">3</div>
                        <br>
                        <div class="diamond"></div>
                        <br>
                        <div class="diamond"></div>
                        <br>
                        <div class="diamond"></div>
                        <br>
                        <div class="corner_number_bottom position-absolute">3</div>
                    </div>

                    <!--card nr.4-->
                    <div class="solitaire-card">
                        <div class="corner_number_top position-absolute">4</div>
                        <div class="club"></div>
                        <br>
                        <div class="club"></div>
                        <br>
                        <div class="club"></div>
                        <br>
                        <div class="club"></div>
                        <div class="corner_number_bottom position-absolute">4</div>
                    </div>

                    <!--card nr.5-->
                    <div class="solitaire-card">
                        <div class="corner_number_top position-absolute fw-bold">5</div>
                        <div class="w-100" style="margin-top: 15px;">
                            <div class="w-100" style="clear: both; margin-bottom: 5px">
                                <img src="{{ asset('images/cards/clubs.svg') }}" alt="heart" class="black-svg" style="width: 20px; float: left">
                                <img src="{{ asset('images/cards/clubs.svg') }}" alt="heart" class="black-svg" style="width: 20px; float: right">
                            </div>
                            <div class="text-center w-100" style=" margin-bottom: 5px">
                                <img src="{{ asset('images/cards/clubs.svg') }}" alt="heart" class="black-svg" style="width: 20px;">
                            </div>
                            <div class="w-100" style="clear: both">
                                <img src="{{ asset('images/cards/clubs.svg') }}" alt="heart" class="black-svg" style="width: 20px; float: left">
                                <img src="{{ asset('images/cards/clubs.svg') }}" alt="heart" class="black-svg" style="width: 20px; float: right">
                            </div>
                        </div>
                        <div class="corner_number_bottom position-absolute fw-bold">5</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
