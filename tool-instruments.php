<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>HR TOOLBOX - Instroom</title>
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Instrumenten</title>
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
    body {
        background-color: white;
    }

    h1.main-content:hover {
        color: orange;
    }

    .menu {
        position: absolute;
        top: 50px;
        right: 75px;
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

    .icon {
        display: block;
        margin: 0 auto;
        margin-bottom: 10px;
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
        margin-bottom: -10px;
    }

    .logo {
        position: relative;
        top: 90px;
        right: -90px;
    }

    h1,
    h3 {
        color: grey;
    }

    .header {
        text-align: left;
        margin-top: 100px;
        margin-left: 100px;
    }

    .main-content {
        text-align: left;
        margin-left: 1050px;
        position: relative;
        top: 75px;
    }


    .cultuur-container {
        position: relative;
        left: 225px;
        top: 180px;
    }

    .overlay {
        text-align: left;
    }

    .overlay .content {
        display: inline-block;
        text-align: left;
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
        left: 230px;
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

    .menu {
        position: absolute;
        top: 50px;
        right: 75px;
        z-index: 999;
        background-color: transparent;
        border: none;
    }
</style>
</head>

<body>
    <div class="link-container">
        <div class="text-center">
            <div class="flex-container">
                <div class="section">
                    <a href="" style="text-decoration: none; display: inline-block;" class="instroom-link">
                        <img class="icon" src="resources/images/instroom.svg" alt="instroom">
                        <h3>instroom</h3>
                    </a>
                </div>
                <div class="section">
                    <a href="" style="text-decoration: none; display: inline-block;" class="doorstroom-link">
                        <img class="icon" src="resources/images/staircase.svg" alt="staircase">
                        <h3>doorstroom</h3>
                    </a>
                </div>
                <div class="section">
                    <a href="" style="text-decoration: none; display: inline-block;" class="uitstroom-link">
                        <img class="icon" src="resources/images/uitrstromen.svg" alt="uitstroom">
                        <h3>uitstroom</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <h3 class="header">TOOLBOX / DOORSTROOM / CULTUURVERANDERING</h3>
    <div class="cultuur-container">
        <h1 class="cultuur">CULTUURVERANDERING</h1>
    </div>

    <h1 class="main-content">
        <div><i class="bi bi-person-add" style="font-size: 50px;"></i>TIPS &amp; TRICKS
    </h1><br>
    <h1 class="main-content"><i class="bi bi-person-gear" style="font-size: 50px"></i>INSTRUMENTEN</h1><br>
    <h1 class="main-content"><i class="bi bi-person-check" style="font-size: 50px;"></i>STAPPENPLAN</h1><br>
    <h1 class="main-content"><i class="bi bi-person-down" style="font-size: 50px;"></i>VOORBEELD<br><i class="bi bi-download" style="font-size: 50px;"></i><br></h1>



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
        // Menu button functionality
        const menuButton = document.querySelector('.menu');
        const overlay = document.querySelector('.overlay');

        menuButton.addEventListener('click', function() {
            overlay.classList.toggle('show');
        });
    </script>
</body>

</html>