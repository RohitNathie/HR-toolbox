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

            <div class="container">
                <div class="row d-flex m-5 text-center">
                    <div class="col-lg-4 col-12 tool-link">
                        <a href="tel:31555222606" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-telephone-fill icon"></i>
                            </div>
                            <h4 class="p-2">Telefoon</h4>
                            <p>+31555222606</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-12 tool-link">
                        <a href="mailto:info@vno-ncwmidden.nl" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-envelope-at-fill icon"></i>
                            </div>
                            <h4 class="p-2">E-mail</h4>
                            <p>info@vno-ncwmidden.nl</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12 tool-link">
                        <a href="https://maps.app.goo.gl/d9YKHfBZ6BdBmrVB7" target="_blank" style="text-decoration: none;" class="text-dark">
                            <div class="display-4">
                                <i class="bi bi-buildings-fill icon"></i>
                            </div>
                            <h4 class="p-2">Kantoor</h4>
                            <p>Boogschutterstraat 1c<br>
                                7324 AE Apeldoorn</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- Footer -->
    <?php include "./templates/footer.php" ?>

</body>

</html>