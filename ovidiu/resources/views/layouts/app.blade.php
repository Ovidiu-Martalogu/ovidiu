<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.general.head')

    <body>
{{--        @auth--}}
            <div id="modal-wrapper">@yield('modals')</div>
           @include('partials.general.header')   {{-- DONE -todo: create the missing partial, move the navbar from homepage to that partial and then include it in app by uncommenting it-- }}

            {{-- Always include sidebar --}}
            {{-- @if(isset($sidebar) && $sidebar) --}}
{{--            @include('partials.general.sidebar')--}}
            {{-- @endif --}}

            <div class="wrapper">
                @yield('content')

                @include('partials.general.footer')
            </div>

{{--        @else--}}
{{--            @yield('content')--}}
{{--        @endauth--}}
        <div id="overlay-loading" style="display: none"><img src="{{ asset('images/loading_spinner.gif') }}"/></div>

        @section('scripts')
            @include('partials.general.scripts')
        @show

        @section('inline_scripts')
            @stack('inline-scripts')
        @show
    </body>

</html>
