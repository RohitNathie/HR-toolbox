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
                        <i class="bi bi-arrow-right-short icon"></i>
                    </div>
                    <h4 class="p-2">Instroom</h4>
                </a>
                <a href="tool-categories.php" style="text-decoration: none;" class="tool-link text-dark">
                    <div class="display-4">
                        <i class="bi bi-arrow-repeat icon"></i>
                    </div>
                    <h4 class="p-2">Doorstroom</h4>
                </a>
                <a href="#" style="text-decoration: none;" class="tool-link text-dark">
                    <div class="display-4">
                        <i class="bi bi-arrows-move icon"></i>
                    </div>
                    <h4 class="p-2">Uitstroom</h4>
                </a>
            </div>

            <div class="fluid-container row tool-selection-container" style="margin: 50px 0px 0px 0px;">
                <a href="" class="col-lg-4 col-12 categorie-link">
                    <h3>Behoud Top 10</h3>
                </a>
                <a href="" class="col-lg-4 col-12 categorie-link">
                    <h3>Gedragscode</h3>
                </a>
                <a href="#" class="col-lg-4 col-12 categorie-link">
                    <h3>Gesprekken met medewerkers</h3>
                </a>
                <a href="" class="col-lg-4 col-4 col-12 categorie-link">
                    <h3>Intervisie</h3>
                </a>
                <a href="" class="col-lg-4 col-4 col-12 categorie-link">
                    <h3>Leven Lang Ontwikkelen</h3>
                </a>
            </div>
            <!--- Content ends here -->

            <!--- Footer -->
            <?php include "./templates/footer.php" ?>
        </div>
</body>

</html>