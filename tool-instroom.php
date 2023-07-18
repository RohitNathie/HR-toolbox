<!DOCTYPE html>
<html lang="en">

<!--- Head -->
<?php include "./templates/head.php" ?>

<body>

    <!--- Header -->
    <?php include "./templates/header.php" ?>

    <!-- Parent container -->
    <div class="parent-container">

        <!--- Particle.js -->
        <div id="particles-js"> </div>

        <!--- Content -->
        <div class="child-container">

            <body class="#tool-categories">

                <div class="row text-center justify-content-center" style="margin: -75px 0px 0px 0px;">
                    <a href="#" style="text-decoration: none;" class="tool-link text-dark">
                        <div class="display-4">
                        <i class="bi bi-arrow-repeat icon"></i>
                        </div>
                        <h4 class="p-2">Instroom</h4>
                    </a>
                </div>

                <div class="fluid-container row tool-selection-container" style="margin: 100px 0px 0px 0px;">
                    <a href="">
                        <div class="col-lg-4 categorie-link">

                            <h3>Employer Branding</h3>

                        </div>
                    </a>
                    <a href="">
                        <div class="col-lg-4 categorie-link">
                            <h3>Onboarding</h3>

                        </div>
                    </a>
                    <a href="#" style="text-decoration: none !important;">
                        <div class="col-lg-4 categorie-link">
                            <h3>Vacature</h3>
                        </div>
                    </a>
                </div>
                <div class="fluid-container row tool-selection-container">


                    <a href="">
                        <div class="col-lg-4 categorie-link">
                            <h3> Werven met een podcast</h3>
                        </div>
                    </a>
                    <a href="">
                        <div class="col-lg-4 categorie-link">
                            <h3>Inclusief</h3>
                        </div>
                    </a>
                </div>
                <!--- Content ends here -->

                <!--- Footer -->
                <?php include "./templates/footer.php" ?>
        </div>
</body>

</html>