<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
        }

        .menu {
            position: absolute;
            top: 50px;
            right: 75px;
            z-index: 999;
            background-color: transparent;
            border: none;
        }

        h3:hover {
            color: orange;
        }

        a {
            color: grey;
            margin-bottom: 20px;
            margin-right: 50px;
            text-decoration: none;
        }

        .instroom,
        .doorstroom,
        .uitstroom {
            display: block;
            margin: 0 auto;
            margin-bottom: 10px;
        }

        .doorstroom {
            display: block;
            margin: 0 auto;
            margin-bottom: 0;
        }

        a:hover+.icon {
            filter: invert(53%) sepia(98%) saturate(3039%) hue-rotate(343deg) brightness(106%) contrast(107%);
            color: orange;
        }

        .link-container {
            text-align: center;
        }

        .flex-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;

        }

        .logo {
            position: relative;
            top: 90px;
            right: -90px;
        }

        .header {
            color: grey;
            text-align: left;
            margin-top: 100px;
            margin-left: 100px;
        }

        .download {
            position: absolute;
            top: 400px;
            right: 250px;
        }

        .template {
            color: grey;
            position: absolute;
            top: 450px;
            right: 300px;
        }

        .voorbeeld {
            position: absolute;
            top: 500px;
            right: 300px;
        }

        .icon {
            position: absolute;
            left: 1420px;
            top: 450px;
        }

        .icon1 {
            position: absolute;
            left: 1420px;
            top: 500px;
        }

        .voorbeeld-link:hover h1,
        .voorbeeld-link:hover .icon1 {
            color: orange;
        }

        .download {
            color: grey;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: orange;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s, visibility 0s linear 0.5s;
            z-index: 998;
        }

        .overlay.show {
            opacity: 1;
            visibility: visible;
            transition-delay: 0s;
        }

        .content {
            position: absolute;
            top: 30%;
            left: 200px;
            transform: translate(-50%, -50%);
            text-align: left;
        }

        .content a {
            display: block;
            margin-bottom: 20px;
            color: white;
            text-decoration: none;
            font-size: 50px;
        }

        .content h1 a:hover {
            color: black;
        }

        .overlay {
            text-align: left;
        }

        .overlay .content {
            display: inline-block;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="col-12">
        <img class="logo" src="resources/images/logo.png" alt="logo">
    </div>

    <div class="link-container">
        <div class="text-center">
            <div class="flex-container">
                <div class="section">
                    <a href="" style="text-decoration: none; display: inline-block;" class="instroom-link">
                        <img class="instrom" src="resources/images/instroom.svg" alt="instroom">
                        <h3>instroom</h3>
                    </a>
                </div>
                <div class="section">
                    <a href="" style="text-decoration: none; display: inline-block;" class="doorstroom-link">
                        <img class="doorstroom" src="resources/images/staircase.svg" alt="staircase">
                        <h3>doorstroom</h3>
                    </a>
                </div>
                <div class="section">
                    <a href="" style="text-decoration: none; display: inline-block;" class="uitstroom-link">
                        <img class="uitstrom" src="resources/images/uitrstromen.svg" alt="uitstroom">
                        <h3>uitstroom</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <h3 class="header">TOOLBOX / DOORSTROOM / CULTUURVERANDERING / INSTRUMENTEN</h3>
    <h1 class="header">INSTRUMENTEN <br> CULTUURVERANDERING</h1>
    <h3 class="download">DOWNLOAD</h3>
    <h1 class="template">TEMPLATE</h1> <img class="icon" src="resources/images/download.svg" alt="download">
    <div class="section">
        <a href="#" class="voorbeeld-link">
            <img class="icon1" src="resources/images/download.svg" alt="voorbeeld">
            <h1 class="voorbeeld">VOORBEELD</h1>
        </a>
    </div>

    <p class="header">Lorem Ipsum is simply dummy text of printing and typesetting idustry. Lorem ipsum has been industry's dummy text ever since the <br>1500s, when an unkown printer took a galley of type and scrambled it to make a type specimen book.</p>

    <button class="menu">
        <img class="menu-icon" src="resources/images/menu.svg" alt="menu">
    </button>

    <div class="overlay">
        <div class="content">
            <h1><a href="#">Info</a></h1>
            <h1><a href="#">Toolbox</a></h1>
            <h1><a href="#">Instrument</a></h1>
            <h1><a href="#">Tips en tricks</a></h1>
            <h1><a href="#">Best practices</a></h1>
            <h1><a href="#">Contact</a></h1>
        </div>
    </div>
    <script>
        const menuButton = document.querySelector('.menu');
        const overlay = document.querySelector('.overlay');

        menuButton.addEventListener('click', function() {
            overlay.classList.toggle('show');
        });
    </script>
</body>

</html>