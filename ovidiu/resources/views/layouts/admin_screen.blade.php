<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   

    <body style="background:#F6F6F6;
                border: 1px solid #ddd;">
               
               <nav class="navbar pt-0" >
    <div class="container-fluid p-0" >
        <ul class="w-100 py-3 py-xl-0" style="background: #F6F6F6;
border: 1px solid #ddd;
color: #000;" >
           Admin panel
        </ul>
    </div>
</nav>
           
<footer class="footer pt-0 mt-2"  style="background: #F6F6F6;
border: 1px solid #ddd;
color: #000;  position: absolute;
  bottom: 0;">
    <div class="w-100 ">
        &copy;<script>document.write(new Date().getFullYear())</script>
        Octavian Company. All rights reserved.
    </div>
</footer>

        <div id="overlay-loading" style="display: none"><img src="{{ asset('images/loading_spinner.gif') }}"/></div>

    </body>

</html>