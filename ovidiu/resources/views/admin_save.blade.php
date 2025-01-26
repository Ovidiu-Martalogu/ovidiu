   @extends('layouts.app')
    @section('content')
       
        <main class="px-3">
        

            <section class="container-section">
                <h4><?php echo $_POST["home_description"]; ?></h4><br>
            </section>
            <br>
            <br>

            <section class="container-about">
                <h4 id="About"><?php 
                $about = $_POST['about_description'];
                echo $about;?></h4>
            </section>

            <br>
            <br>


                
           
            <section class="container-section" >
                <h3 id="Contact">Contact</h3>
                <br>
                 <h4>Address:<?php echo $_POST["Address"]; ?></h4>
                <br>
                <h4>Email :<?php echo $_POST["Email"]; ?></h4> 
                <br>
                <h4>Telephone :<?php echo $_POST["Telephone"]; ?></h4>
                 
            </section>
            

        </main>
        

    @endsection