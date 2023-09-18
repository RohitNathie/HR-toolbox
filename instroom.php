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
                <a href="employer_branding.php" class="col-lg-4 col-12 categorie-link">
                    <div class="text-center">
                        <h3>Employer Branding</h3>
                        <p style="margin-top: 10px;">Benieuwd hoe je kan werken aan een sterk imago van jouw bedrijf? Kijk snel verder!</p>
                    </div>
                </a>
                <a href="onboarding.php" class="col-lg-4 col-12 categorie-link">
                    <div class="text-center">
                        <h3>Onboarding</h3>
                        <p style="margin-top: 10px;">Benieuwd hoe je nieuwe medewerkers goed kan inwerken? Kijk snel verder!</p>
                    </div>
                </a>
                <a href="vacature.php" class="col-lg-4 col-12 categorie-link">
                    <div class="text-center">
                        <h3>Vacature</h3>
                        <p style="margin-top: 10px;">Benieuwd hoe je de perfecte vacature opstelt? Kijk snel verder!</p>
                    </div>
                </a>
                <a href="werven_met_een_podcast.php" class="col-lg-4 col-4 col-12 categorie-link">
                    <div class="text-center">
                        <h3>Werven met een podcast</h3>
                        <p style="margin-top: 10px;">Benieuwd hoe je met een podcast anders kan werven? Kijk snel verder!</p>
                    </div>
                </a>
                <a href="inclusief.php" class="col-lg-4 col-4 col-12 categorie-link">
                    <div class="text-center">
                        <h3>Inclusief</h3>
                        <p style="margin-top: 10px;">Benieuwd hoe je met mensen met een afstand tot de arbeidsmarkt aan de slag kan? Kijk snel verder!</p>
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