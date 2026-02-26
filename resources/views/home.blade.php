<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            padding: 120px 0;
        }
        .feature-icon {
            font-size: 40px;
            color: #0d6efd;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">MyWebsite</a>
        <div>
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to Our Platform</h1>
        <p class="lead mt-3">Build amazing things with our powerful and easy-to-use system.</p>
        <div class="mt-4">
            <a href="#" class="btn btn-light btn-lg me-3">Get Started</a>
            <a href="#" class="btn btn-outline-light btn-lg">Learn More</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="feature-icon mb-3">🚀</div>
                <h5>Fast Performance</h5>
                <p>Experience lightning-fast loading and smooth performance.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon mb-3">🔒</div>
                <h5>Secure System</h5>
                <p>Your data is protected with modern security technologies.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon mb-3">⚙️</div>
                <h5>Easy Customization</h5>
                <p>Customize everything easily to fit your needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p class="mb-4">Join us today and start building your future.</p>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-2">Register</a>
        <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg">Login</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© 2026 MyWebsite. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>