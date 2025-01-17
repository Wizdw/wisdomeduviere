<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Bootstrap JS (required for toggling navbar) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="./assets/bs.css">
    <link rel="stylesheet" href="./mystyle.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light p-3 align-self-center mytransparent" style=" height: 100px; z-index: 9999">
            <div class="container-fluid d-flex justify-content-between px-5">
                <!-- Brand -->
                <a href="index.php" class="mylogoicon"></a>
                <!-- Hamburger icon (toggler) -->
                <button class="navbar-toggler border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Collapsible nav links -->
                <div class="collapse navbar-collapse p-2" id="navbarNav" style=" z-index: 2;" >
                    <ul class="navbar-nav ml-auto rounded" style="">
                        <!-- <li class="p-3 nav-item mx-1 linehover"><a href="index.php" class="nav-link " style="color: black;">Home</a></li> -->
                        <li class="p-3 border-dark nav-item mx-1 linehover"><a class="accent nav-link" href="websites.php" style="color: blue;"><i class="bi bi-file-earmark-person-fill"></i> Websites</a></li>
                        <li class="p-3 nav-item mx-1 linehover"><a  class="nav-link accent" href="gallery.php" style="color: blue;"><i class="bi bi-person-lines-fill"></i> Gallery</a></li>
                    <li class="p-3 border-dark nav-item mx-1 linehover"><a  class=" nav-link" href="aboutme.php" style="color: blue;"><i class="bi bi-file-earmark-person-fill"></i> About me</a></li>
                    <li class=" p-3 border-dark nav-item mx-1 linehover"><a href="cart.php" class="nav-link cartbop"style="color: blue;">Cart</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
</body>
</html>