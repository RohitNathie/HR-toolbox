        <!-- Let op! Er moet nog een fallback gemaakt worden voor history.back, voor het geval als er geen history is. -->
        <button onclick="history.back()" style="text-decoration: none; border: none; background-color: #fff0;" class="text-dark">
            <div class="display-4">
                <i class="bi bi-arrow-left-short icon"></i> <h6 class="p-2 text-center">Terug</h4>
            </div>
        </button>

<div class="tool-bar mt-3 col-12 flex-grow-1 d-flex text-center" id="navbar-toolbar">


    <div class="col-4 flex-grow-1 tool-link">
        <a href="/instroom.php" style="text-decoration: none;" class="text-dark">
            <div class="display-4">
                <i class="bi bi-arrow-right-short icon"></i>
            </div>
            <div class="d-none d-xl-block">
                <h6 class="p-2">Instroom</h4>
            </div>
        </a>
    </div>

    <div class="col-4 tool-link">
        <a href="/doorstroom.php" style="text-decoration: none;" class="text-dark">
            <div class="display-4">
                <i class="bi bi-arrow-repeat icon"></i>
            </div>
            <div class="d-none d-xl-block">
                <h6 class="p-2">Doorstroom</h4>
            </div>
        </a>
    </div>

    <div class="col-4 tool-link">
        <a href="/uitstroom.php" style="text-decoration: none;" class="text-dark">
            <div class="display-4">
                <i class="bi bi-arrows-move icon"></i>
            </div>
            <div class="d-none d-xl-block">
                <h6 class="p-2">Uitstroom</h4>
            </div>
        </a>
    </div>
</div>