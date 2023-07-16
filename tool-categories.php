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

        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="link-container">
                    <a href="#" style="text-decoration: none;" class="instroom-link text-dark">
                        <div style="font-size: 50px; color: black !important;">
                            <i class="bi bi-arrow-right-short icon"></i>
                        </div>
                        <h4 class="pb-2 pt-2">Instroom</h4>
                    </a>
                    <a href="tool-categories.php" style="text-decoration: none;" class="doorstroom-link text-dark">
                        <div style="font-size: 50px; color: black;"><i class="bi bi-arrow-repeat icon"></i></div>
                        <h4 class="pb-2 pt-2">Doorstroom</h4>
                    </a>
                    <a href="#" style="text-decoration: none;" class="uitstroom-link text-dark">
                        <div style="font-size: 50px; color: black;"><i class="bi bi-arrows-move icon"></i></div>
                        <h4 class="pb-2 pt-2">Uitstroom</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>

<!--- Footer -->
<?php include "./templates/footer.php" ?>

</body>

</html>