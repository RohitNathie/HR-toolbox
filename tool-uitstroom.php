<!DOCTYPE html>
<html lang="en">

<!--- Head -->
<?php include "./templates/head.php" ?>

<body>

    <!--- Header -->
    <?php include "./templates/tool-header.php" ?>

    <!-- Parent container -->
    <div class="parent-container">

        <!--- Particle.js -->
        <div id="particles-js"> </div>

        <!--- Content -->
        <div class="child-container">

            <div class="fluid-container row tool-selection-container" style="margin: 50px 0px 0px 0px;">
                <a href="tool-instruments.php" class="col-lg-6 col-12 categorie-link">
                    <h3>Exitgesprek</h3>
                </a>
                <a href="tool-instruments.php" class="col-lg-6 col-12 categorie-link">
                    <h3>Verzuim</h3>
                </a>
            </div>
            <!--- Content ends here -->

            <!--- Footer -->
            <?php include "./templates/footer.php" ?>
        </div>
    </div>
</body>

</html>