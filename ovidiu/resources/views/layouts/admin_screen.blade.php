
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.general.admin_head')
    <style>
        footer {
            background: #F6F6F6;
            border: 1px solid #ddd;
            color: #000;
            position: absolute;
           
        }
    </style>

    <header>
        <h3 class="text-success py-2">Admin panel</h3>
    </header>

    <div class="container-fluid"> 
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    @include('partials.general.footer')

    <div id="overlay-loading" style="display: none"><img src="{{ asset('images/loading_spinner.gif') }}"/></div>
    
</html>