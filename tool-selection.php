<!DOCTYPE html>
<html lang="en">

<!--- Head -->
<?php include "./templates/head.php" ?>

<body>

    <!--- Header -->
    <?php include "./templates/tool_header.php" ?>

    <!-- Parent container -->
    <div class="parent-container">

        <!--- Particle.js -->
        <div id="particles-js"> </div>

        <!--- Content -->
        <div class="child-container">

            <div class="container">
                <div class="row text-secondary">
                    <div class="col-12 text-center">
                        <h1 class="mt-2 pb-2 text-dark">Ik zoek een tool voor?</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat. Sed eget massa ut ipsum fermentum gravida vitae quis erat.</p>
                    </div>
                </div>
                <div class="row d-flex m-5 text-center">
                    <div class="col-lg-4 col-12 tool-link">
                        <a href="/instroom.php" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-arrow-right-short icon"></i>
                            </div>
                            <h4 class="p-2">Instroom</h4>
                            <p>Instroom gaat over het in dienst treden bij jouw bedrijf. Alles rondom de werving en selectie van nieuwe medewerkers.</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-12 tool-link">
                        <a href="/doorstroom.php" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-arrow-repeat icon"></i>
                            </div>
                            <h4 class="p-2">Doorstroom</h4>
                            <p>Doorstroom gaat over de ontwikkeling en het behouden van je medewerker. Denk bijvoorbeeld aan promotie, demotie en bijscholing. Alles om te zorgen voor de juiste match tussen je medewerker en de doelen die je stelt.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12 tool-link">
                        <a href="/uitstroom.php" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-arrows-move icon"></i>
                            </div>
                            <h4 class="p-2">Uitstroom</h4>
                            <p>Uitstroom gaat over het afronden van een dienstverband. Hier zijn veel juridische aspecten van belang, maar ook de zachtere kant zoals een goed exitgesprek.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--- Footer -->
        <?php include "./templates/footer.php" ?>

</body>

</html>