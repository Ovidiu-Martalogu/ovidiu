<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mesaje</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 35px;
            text-align: center;
        }

         header {
            text-align: center;
            padding: 1px;
            height: 35px;
        }

        .navbar ul {
            list-style: none;
            background: #333;
            padding: 0;
            margin: 0;
          
        }

        .navbar li {
            display: inline-block;
            font-size: 10px;
           
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            width: 100px;
            padding: 20px;
            font-size: 15px;
           
        }

        .navbar a:hover {
            background-color: rgba(64, 124, 214, 0.5);
           
        }

        main {
            padding-top: 70px;
        }

        footer {
            padding: 10px;
            margin: 0;
            text-align: center;
            background-color: #333;
            color: white;
            height: 50px;
            line-height: 3.5;
            position: absolute;
            right: 0;
            left: 0;
        }

        /* Responsive styling */
        @media (max-width: 1200px) {
            body {
            // margin-top: 2px;
            }

            .navbar {
                position: sticky;
                right: 0;
                left: 0;
                border-radius: 0;
                top: 0;
            }

            .navbar a {
                display: inline;
                padding: 10px;
                font-size: 15px;
                font-weight: bold;
            }

            footer {
                padding: 10px;
                margin: 0;
                text-align: center;
                background-color: #333;
                color: white;
                height: 50px;
                line-height: 3.5;
                position: absolute;
                right: 0;
                left: 0;
            }

            .col-md-6 {
                width: 80px;
            }
       
            .container-contact {
                width: 55%;
            }
        }

       
    </style>

    @stack('internal-style')
</head>
                <nav class="navbar pt-0">
                    <div class="container-fluid p-0">
                        <ul class="w-100">
                            <li><a href="#Team">Mesaje de "La multi ani"</a></li>
                            <li><a href="#About">Mesaje de Paste</a></li>
                            <li><a href="/">Mesaje de Craciun</a></li>
                            <li><a href="/">Mesaje de Anul Nou</a></li>
                            <li><a href="#Services">Invitatii pentru aniversare</a></li>
                            <li><a href="#Contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
