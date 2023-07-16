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

    <div class="container">
        <div class="row text-secondary">
            <div class="col-12 text-center">
                <h1 class="mt-2 pb-2 text-dark" style="font-size: 40px;">Ik zoek een tool voor?</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat. Sed eget massa ut ipsum fermentum gravida vitae quis erat.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="link-container">
                    <a href="#" style="text-decoration: none;" class="instroom-link text-dark">
                        <div style="font-size: 50px;">
                            <i class="bi bi-arrow-right-short icon"></i>
                        </div>
                        <h4 class="pb-2 pt-2">Instroom</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat.</p>
                    </a>
                    <a href="tool-categories.php" style="text-decoration: none;" class="doorstroom-link text-dark">
                        <div style="font-size: 50px;"><i class="bi bi-arrow-repeat icon"></i></div>
                        <h4 class="pb-2 pt-2">Doorstroom</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat.</p>
                    </a>
                    <a href="#" style="text-decoration: none;" class="uitstroom-link text-dark">
                        <div style="font-size: 50px;"><i class="bi bi-arrows-move icon"></i></div>
                        <h4 class="pb-2 pt-2">Uitstroom</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet scelerisque volutpat.</p>
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