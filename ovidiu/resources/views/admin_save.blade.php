   @extends('layouts.app')
    @section('content')
       
        <main class="px-3">
        

            <section class="container-section">
            <h4>
                @php 
                echo $_POST["home_description"];
                 @endphp
            </h4>
            </section>
            <br>
            <br>

            <section class="container-about">
                <h4 id="About">
                    @php 
                $about = $_POST['about_description'];
                echo $about;
                @endphp
               </h4>
            </section>

            <br>
            <br>
            <article class="container-article" id="Services">
                @php
                $services= $_POST['services_description'];
                 echo implode($services);
                 dump($_REQUEST);
                @endphp
                
            </article>
            <br>
            <br>
           
            <section class="container-section" >
                <h3 id="Contact">Contact</h3>
                <br>
                 <h4>Address:
                @php
                echo $_POST["Address"];
                @endphp
                </h4>
                <br>
                <h4>Email :
                 @php 
                 echo $_POST["Email"];
                 @endphp
                </h4> 
                <br>
                <h4>Telephone :
                    @php 
                    echo $_POST["Telephone"]; 
                    @endphp
                </h4>
                 
            </section>
            

        </main>
        

    @endsection