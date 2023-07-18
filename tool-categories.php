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
                <a href="tool-instruments.php" class="col-lg-4 col-12 categorie-link">
                    <h3>Behoud Top 10</h3>
                </a>
                <a href="tool-instruments.php" class="col-lg-4 col-12 categorie-link">
                    <h3>Gedragscode</h3>
                </a>
                <a href="tool-instruments.php" class="col-lg-4 col-12 categorie-link">
                    <h3>Gesprekken met medewerkers</h3>
                </a>
                <a href="tool-instruments.php" class="col-lg-4 col-4 col-12 categorie-link">
                    <h3>Intervisie</h3>
                </a>
                <a href="tool-instruments.php" class="col-lg-4 col-4 col-12 categorie-link">
                    <h3>Leven Lang Ontwikkelen</h3>
                </a>
            </div>
            <!--- Content ends here -->

            <!--- Footer -->
            <?php include "./templates/footer.php" ?>
        </div>
</body>

</html>