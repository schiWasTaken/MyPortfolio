<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en'; // Default to English
$lang_file = "lang/$lang.php";

if (file_exists($lang_file)) {
    include($lang_file);
} else {
    include("lang/en.php");
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="light-mode">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about"><?php echo $lang_strings['aboutNav']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio"><?php echo $lang_strings['portfolioNav']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><?php echo $lang_strings['contactNav']; ?></a></li>
                    <li class="nav-item d-none d-lg-block">
                        <div id="navSeparator" class="vr h-100 mx-lg-2"></div>
                    </li>
                    <li class="nav-item">
                        <button class="btn d-flex align-items-center" id="toggle-dark-mode">
                            <img id="dark-mode-icon" src="assets/moon-stars-fill.svg" alt="Dark Mode" width="16" height="16" class="me-2">
                            <span id="dark-mode-text">Dark Mode</span>
                        </button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero bg-light text-center py-5 text-white">
        <div class="container">
            <h1 class="display-4 fw-bold fade-in"><?php echo $lang_strings['welcome']; ?></h1>
            <p class="lead fade-in">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container py-5">
        <div class="row">
            <div class="col-md-6 fade-in">
                <h2 class="fw-bold"><?php echo $lang_strings['about']; ?></h2>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, necessitatibus perspiciatis harum ipsam explicabo veritatis maiores consequatur nostrum illo ut vero aliquam odit voluptate optio nisi corporis nulla saepe deserunt possimus commodi!
                </p>
            </div>
            <div class="col-md-6 fade-in">
                <div class="bg-secondary rounded" style="height: 300px;"></div> <!-- Placeholder Image -->
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4"><?php echo $lang_strings['portfolio']; ?></h2>
            <div class="row">
                <div class="col-md-4 fade-in">
                    <div class="bg-secondary rounded mb-3" style="height: 200px;"></div>
                    <h5 class="fw-bold">Project 1</h5>
                    <p class="text-muted">A brief description of this project.</p>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="bg-secondary rounded mb-3" style="height: 200px;"></div>
                    <h5 class="fw-bold">Project 2</h5>
                    <p class="text-muted">Another brief description of this project.</p>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="bg-secondary rounded mb-3" style="height: 200px;"></div>
                    <h5 class="fw-bold">Project 3</h5>
                    <p class="text-muted">Another brief description of this project.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4"><?php echo $lang_strings['contact']; ?></h2>
            <div class="row text-center justify-content-center">
                <!-- Phone -->
                <div class="col-md-3 mb-4">
                    <div class="p-4 shadow rounded">
                        <i class="bi bi-telephone-fill fs-3 text-primary mb-3"></i>
                        <h5 class="fw-bold">Phone</h5>
                        <p class="m-0">+1 234 567 890</p>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md-3 mb-4">
                    <div class="p-4 shadow rounded">
                        <i class="bi bi-envelope-fill fs-3 text-primary mb-3"></i>
                        <h5 class="fw-bold">Email</h5>
                        <p class="m-0">example@example.com</p>
                    </div>
                </div>
                <!-- Address -->
                <div class="col-md-3 mb-4">
                    <div class="p-4 shadow rounded">
                        <i class="bi bi-geo-alt-fill fs-3 text-primary mb-3"></i>
                        <h5 class="fw-bold">Address</h5>
                        <p class="m-0">123 Street, City, Country</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>