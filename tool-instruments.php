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


            <div class="tool-instruments row">
                <div class="col-8 flex-grow-1">
                    <h3 class="header">TOOLBOX / DOORSTROOM / CULTUURVERANDERING</h3>
                    <h1>CULTUURVERANDERING</h1>
                    <div class="parent mt-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat.
                            Sed eget massa ut ipsum fermentum gravida vitae quis erat.</p>
                    </div>
                </div>

                <div class="instruments-menu col-4 flex-shrink-1">
                    <div class="col"><i class="bi bi-person-add"></i> TIPS & TRICKS</div>
                       <div class>Test</div>
                    <div class="col"><i class="bi bi-person-gear"></i> INSTRUMENTEN</div>
                    <div class="col"><i class="bi bi-person-check"></i> IMPLEMENTATIE</div>
                    <div class="col"><i class="bi bi-person-down"></i> VOORBEELD</div>
                    <div class="col"><i class="bi bi-download"></i></col>
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