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

            <div class="tool-instruments row">
                <div class="col-lg-8 col-12 flex-grow-1">
                    <h3 class="header breadcrumb_menu"><a href="/index.php">TOOLBOX</a> / <a href="/doorstroom.php">DOORSTROOM</a> / GESPREKKEN MET MEDERWERKS</h3>
                    <h1>GESPREKKEN MET MEDERWERKS</h1>
                    <div class="parent">
                        <p>Benieuwd naar de soorten gesprekken en hoe je ze voert met medewerkers? Kijk snel verder!</p>
                    </div>
                </div>

                <div class="instruments-menu col-lg-4 col-12 flex-shrink-1">
                    <div class="col"><i class="bi bi-person-add"></i> TIPS & TRICKS</div>
                    <ul>
                    <a href="resources/pdf/VNO-NCW Instrument Tips voor een goed gesprek def.pdf" download><li><i class="bi bi-download"></i> Tips voor een goed gesprek</li></a>
                    </ul>
                    <div class="col"><i class="bi bi-person-gear"></i> INSTRUMENTEN</div>
                    <ul>
                        <a href= "resources/pdf/VNO-NCW Instrument Planningsgesprek def.pdf" download><li><i class="bi bi-download"></i> Planningsgesprek</li></a>
                        <a href="resources/pdf/VNO-NCW Tips medewerker in ontwikkeling krijgen def.pdf" download><li><i class="bi bi-download"></i> Ontwikkelgesprek</li></a>
                        <a href="resources/pdf/VNO-NCW Instrument Beloningsgesprekken def.pdf" download><li><i class="bi bi-download"></i> Beloningsgesprekken</li></a>
                        <a href="resources/pdf/VNO-NCW Instrument Medewerkerstevredenheidsmonitor def.pdf" download><li><i class="bi bi-download"></i> Medewerkerstevredenheidsmonitor</li></a>
                    </ul>
                    <div class="col"><i class="bi bi-person-check"></i> IMPLEMENTATIEPLAN</div>
                    <ul>
                        <a href="resources/pdf/VNO-NCW IImplementatieplan Ontwikkelgesprekken (POP gesprekken) def.pdf" download><li><i class="bi bi-download"></i> Ontwikkelgesprekken</li></a>
                    </ul>
                    </div>
                </div>
            </div>
            <!--- Content ends here -->

            <!--- Footer -->
            <?php include "./templates/footer.php" ?>
        </div>
    </div>
</body>

</html>