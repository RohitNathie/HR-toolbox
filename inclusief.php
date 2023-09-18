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
                    <h3 class="header breadcrumb_menu"><a href="/index.php">TOOLBOX</a> / <a href="/instroom.php">INSTROOM</a> / INCLUSIEF</h3>
                    <h1>INCLUSIEF</h1>
                    <div class="parent">
                        <p>Benieuwd hoe je met mensen met een afstand tot de arbeidsmarkt aan de slag kan? Kijk snel verder!</p>
                    </div>
                </div>

                <div class="instruments-menu col-lg-4 col-12 flex-shrink-1">
                    <div class="col"><i class="bi bi-person-gear"></i> INSTRUMENTEN</div>
                    <ul>
                        <a href="resources/pdf/VNO-NCW Checklist voor diversiteit & inclusief hrm binnen de organisatie def.pdf" download><li><i class="bi bi-download"></i> Checklist inclusief</li></a>
                        <a href="resources/pdf/VNO-NCW Inclusief werkgeverschap def.pdf" download><li><i class="bi bi-download"></i> Inclusief</li></a>
                      
                    </ul>
                    <div class="col"><i class="bi bi-person-down"></i> VOORBEELD</div>
                    <ul>
                        <a href="resources/pdf/VNO-NCW Inclusief werkgeverschap def.pdf" download><li><i class="bi bi-download"></i> Werkgevers</li></a>
        
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