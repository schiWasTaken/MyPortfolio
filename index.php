<!DOCTYPE html>
<html lang="en">

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
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <div class="vr h-100 mx-lg-2">
                            <hr class="d-lg-none my-2">
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="btn" id="toggle-dark-mode">
                            <img id="dark-mode-icon" src="assets/moon-stars-fill.svg" alt="Dark Mode" width="16" height="16">
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold fade-in">Hello, I'm [Your Name]</h1>
            <p class="lead fade-in">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container py-5">
        <div class="row">
            <div class="col-md-6 fade-in">
                <h2 class="fw-bold">About Me</h2>
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
    <section id="portfolio" class="bg-light py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Portfolio</h2>
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
    <section class="container py-5">
        <h2 class="fw-bold text-center mb-4">Contact Me</h2>
        <form action="contact.php" method="post" class="fade-in">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/toggle.js"></script>
</body>

</html>