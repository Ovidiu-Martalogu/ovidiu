@extends('layouts.admin_screen')
@section('content')

    <!-- using bootstrap grid, means that every element with .col class should have as parent an element with .row class -->

    <div class="row my-5">
        <div class="col"> <!-- this is the equivalent of col-12 or col-sm-12 or col-x-12 -->

            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('admin_save') }}" method="POST"> <!-- any form must have an action attribute containing the route where the fields values are sent to server, and a method: GET, POST, PUT, DELETE -->
                @csrf
                <div class="row">
                    <label class="col-3" for="home_description">Home Description</label>
                    <div class="col-9">
                        <textarea class="form-control" id="home_description" name="home_description" placeholder="Description for the 'home' section">{{ old('home_description') }}</textarea>
                        <!-- any field should contain a name attribute, to know to what database field should contain this value -->
                    </div>
                </div>

                <br>

                <div class="row">
                    <label class="col-3" for="about_description">About Description</label>
                    <div class="col-9">
                        <textarea class="form-control" id="about_description" name="about_description" placeholder="Description for 'about' section">{{ old('about_description') }}</textarea>
                        <!-- any field should contain a name attribute, to know to what database field should contain this value -->
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success">Save</button> {{-- here could also be an input type submit with the classes exctly like this button --}}
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

