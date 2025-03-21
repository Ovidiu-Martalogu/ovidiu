<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.general.mesaje_head')
                <div class="row">
                    <div class="col text-end mb-3">
                        <a href="{{ route('homepage') }}" class="btn btn-success">< Homepage</a>
                    </div>
                </div>
           
    @section('content')
    test