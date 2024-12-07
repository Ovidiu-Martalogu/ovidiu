<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   

    <body style="background: #F6F6F6;
                border: 1px solid #ddd;">
{{--        @auth--}}
            <div id="modal-wrapper" style="background: #F6F6F6;
border: 1px solid #ddd;
color: #000;">Admin panel</div>
              @include('partials.general.head') 

             <div class="wrapper">
             @yield('content')

                @include('partials.general.footer')
</div>

        <div id="overlay-loading" style="display: none"><img src="{{ asset('images/loading_spinner.gif') }}"/></div>

    </body>

</html>