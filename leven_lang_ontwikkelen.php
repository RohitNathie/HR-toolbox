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
                    <h3 class="header breadcrumb_menu"><a href="/index.php">TOOLBOX</a> / <a href="/doorstroom.php">DOORSTROOM</a> / LEVEN LANG ONTWIKKELEN</h3>
                    <h1>LEVEN LANG ONTWIKKELEN</h1>
                    <div class="parent">
                        <p>Benieuwd hoe Leven Lang Ontwikkelen in je organisatie een plek kan krijgen? Kijk snel verder!</p>
                    </div>
                </div>

                <div class="instruments-menu col-lg-4 col-12 flex-shrink-1">
                    <div class="col"><i class="bi bi-person-add"></i> TIPS & TRICKS</div>
                    <ul>
                    <a href="resources/pdf/VNO-NCW Tips medewerker in ontwikkeling krijgen def.pdf" download><li><i class="bi bi-download"></i> Medewerkers in ontwikkeling krijgen</li></a>
                    <a href="resources/pdf/VNO-NCW Instrument Do's voor leren op de werkvloer en inbedden def.pdf" download><li><i class="bi bi-download"></i> Do's voor het leren op de werkvloer</li></a>
                    </ul>
                    <div class="col"><i class="bi bi-person-gear"></i> INSTRUMENTEN</div>
                    <ul>
                        <a href="resources/pdf/VNO-NCW Instrument coachleidraad eigen regie duurzame inzetbaarheid def.pdf" download><li><i class="bi bi-download"></i> Coachleidraad eigen regie</li></a>
                    </ul>
                </div>
            </div>
            <!--- Content ends here -->

            <!--- Footer -->
            <?php include "./templates/footer.php" ?>
        </div>
    </div>
</body>

</html>