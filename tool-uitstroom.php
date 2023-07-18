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

            <div class="row text-center justify-content-center" style="margin: -75px 0px 0px 0px;">
                <a href="#" style="text-decoration: none;" class="tool-link text-dark">
                    <div class="display-4">
                        <i class="bi bi-arrow-repeat icon"></i>
                    </div>
                    <h4 class="p-2">Uitstroom</h4>
                </a>
            </div>

            <div class="fluid-container row tool-selection-container" style="margin: 100px 0px 0px 0px;">
                <a href="tool-instruments.php" class="col-12 col-lg-3">
                    <div class="categorie-link">
                        <h3>Exitgesprek</h3>
                    </div>
                </a>
                <a href="tool-instruments.php" class="col-12 col-lg-3"> 
                    <div class="categorie-link">
                        <h3>Verzuim</h3>
                    </div>
                </a>
            </div>
            <!--- Content ends here -->

            <!--- Footer -->
            <?php include "./templates/footer.php" ?>
        </div>
    </div>
</body>

</html>
