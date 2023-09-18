<!DOCTYPE html>
<html lang="en">


<!--- Head -->
<?php include "./templates/head.php" ?>

<body>

  <!--- Header -->
  <?php include "./templates/homepage_header.php" ?>

  <!-- Parent container -->
  <div class="parent-container">

    <!--- Particle.js -->
    <div id="particles-js"> </div>

    <!--- Content -->
    <div class="child-container" style="margin-top: -100px;">
        <h1 class="h-1 font-weight-bold" style="font-size: var(--banner-font-size);">HR TOOLBOX</h1>
        <p class="subtitle h-2 font-weight-800" style="color: var(--subtitle-font-color); font-size: var(--subtitle-font-size); font-weight: 600;">DE TOOLBOX VOOR HET MKB</p>
        <p class="pt-2 pb-3">Welkom! Je hebt de HR-toolbox gevonden. je kunt hier instrumenten vinden die jouw helpen om nieuwe medewerkers te werven (instroom), te behouden (doorstroom) en goed los te laten (uitstroom).
          Naast een eenvoudig instrument zijn er ook stappenplannen om het instrument in je organisatie in te bedden toegevoegd en kun je voorbeelden van werkgevers vinden die vertellen waarom het bij hun werkt.</p>
        <p class="lead">
          <a class="btn text-uppercase" href="tool-selection.php" role="button">Zoek jouw tool</a>
        </p>
        <!--- Content ends here -->
    </div>
  </div>

  <?php include "./templates/footer.php" ?>
</body>
</html>