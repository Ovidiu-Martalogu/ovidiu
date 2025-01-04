
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials.general.admin_head')
<style>
       
    footer{
        background: #F6F6F6;
border: 1px solid #ddd;
color: #000;  position: absolute;
  bottom: 0;
    }
    </style>

 <header>Admin panel</header>
            

        
           
@yield('content')


@include('partials.general.footer')
               


        <div id="overlay-loading" style="display: none"><img src="{{ asset('images/loading_spinner.gif') }}"/></div>


</html>


