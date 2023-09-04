<!DOCTYPE html>
<html lang="en">

<!--- Head -->
<?php include "./templates/head.php" ?>

<body>

    <!--- Header -->
    <?php include "./templates/homepage_header.php" ?>

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
                        <a href="/tool-instroom.php" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-arrow-right-short icon"></i>
                            </div>
                            <h4 class="p-2">Instroom</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat.</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-12 tool-link">
                        <a href="tool-categories.php" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-arrow-repeat icon"></i>
                            </div>
                            <h4 class="p-2">Doorstroom</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12 tool-link">
                        <a href="tool-uitstroom.php" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-arrows-move icon"></i>
                            </div>
                            <h4 class="p-2">Uitstroom</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--- Footer -->
        <?php include "./templates/footer.php" ?>

</body>

</html>