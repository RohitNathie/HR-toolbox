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
                    <h3 class="header breadcrumb_menu"><a href="/index.php">TOOLBOX</a> / <a href="/doorstroom.php">DOORSTROOM</a> / STRATEGISCHE PERSONEELSPLANNING</h3>
                    <h1>STRATEGISCHE PERSONEELSPLANNING</h1>
                    <div class="parent">
                        <p>Benieuwd hoe je je personeelsbestand kan afstemmen op de doelen van je bedrijf? Kijk snel verder!</p>
                    </div>
                </div>

                <div class="instruments-menu col-lg-4 col-12 flex-shrink-1">
                    <div class="col"><i class="bi bi-person-gear"></i> INSTRUMENTEN</div>
                    <ul>
                        <a href="resources/pdf/VNO-NCW Instrument Strategische Personeelsplanning def.pdf" download><li><i class="bi bi-download"></i> Download Instrument</li></a>
                    </ul>
                    <div class="col"><i class="bi bi-person-check"></i> IMPLEMENTATIEPLAN</div>
                    <ul>
                        <a href="resources/pdf/VNO-NCW Implementatieplan Strategische Personeelsplanning def.pdf" download><li><i class="bi bi-download"></i> Download Implementatieplan</li></a>
                    </ul>
                  
                    </div>
                </div>
            </div>
            <!--- Content ends here -->

            <!--- Footer -->
        </div>
    </div>
            <?php include "./templates/footer.php" ?>
</body>

</html>