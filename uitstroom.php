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
            <?php include "./templates/tool_bar.php" ?>
            <div class="fluid-container row tool-selection-container" style="margin: 50px 0px 0px 0px;">
                <a href="exitgesprek.php" class="col-lg-4 col-12 categorie-link">
                    <div class="text-center">
                        <h3>Exitgesprek</h3>
                        <p style="margin-top: 10px;">Benieuwd hoe je een goed gesprek voert bij afscheid van een medewerker? Kijk snel verder!</p>
                    </div>
                </a>
                <a href="verzuim.php" class="col-lg-4 col-12 categorie-link">
                    <div class="text-center">
                        <h3>Verzuim</h3>
                        <p style="margin-top: 10px;">Benieuwd hoe je uitval van medewerkers kan voorkomen? Kijk snel verder!</p>
                    </div>
                </a>


            </div>
            <!--- Content ends here -->


        </div>
    </div>
    <!--- Footer -->
    <?php include "./templates/footer.php" ?>
</body>

</html>