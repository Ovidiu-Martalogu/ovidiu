<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Octavian</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 15px;
            text-align: center;
        }

        .container.me {
            width: 100%;
            margin: 0;
            height: 100%;
            display: contents;
        }

        .container-section,
        .container-services,
        .container-about,
        .container-article,
        .container-team {
            margin: auto;
            text-align: justify;
            border: 1px solid #ddd;
            width: 98%;
            padding: 7px;
        }

        .container-contact {
            text-align: left;
            border: 1px solid #ddd;
            width: 35%;
            padding: 7px;
        }

        header {
            text-align: center;
            padding: 1px;
            height: 53px;
        }

        .navbar ul {
            list-style: none;
            background: #333;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            width: 100px;
            display: block;
            padding: 20px;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
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

            .container-section,
            .container-services,
            .container-about,
            .container-article,
            .container-team,
            .container-contact {
                width: 100%;
            }

            .container-contact {
                width: 55%;
            }
        }

        .am_sters_img {
            display: block;
            margin: 0 auto;
            height: 30px;
            border-radius: 8px;
        }
    </style>
</head>
