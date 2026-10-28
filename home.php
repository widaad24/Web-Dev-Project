<?php
ob_start();
?>

<!-- HERO / WELCOME -->
<div class="hero-section rounded-4 text-white p-5 mb-4 shadow">
    <div class="row align-items-center">
        <div class="col-lg-7">
            <div class="d-flex align-items-center mb-3 fade-in">
                <i class="bi bi-scissors logo-icon me-3"></i>
                <span class="fs-4 fw-bold text-uppercase">Beard Trimmer</span>
            </div>
            <h1 class="display-4 fw-bold fade-in delay-1">Sharp Looks Start Here</h1>
            <p class="lead fade-in delay-2">
                Welcome to Beard Trimmer, your one-stop shop for premium trimmers,
                grooming kits and accessories. Find the perfect tool for a clean,
                confident look.
            </p>
            <div class="fade-in delay-3">
                <a href="products.php" class="btn btn-light btn-lg me-2">
                    <i class="bi bi-bag me-1"></i>Shop Now
                </a>
                <a href="#features" class="btn btn-outline-light btn-lg">Learn More</a>
            </div>
        </div>
        <div class="col-lg-5 text-center d-none d-lg-block">
            <i class="bi bi-scissors hero-big-icon"></i>
        </div>
    </div>
</div>

<!-- CAROUSEL -->
<div id="homeCarousel" class="carousel slide carousel-fade shadow rounded-4 overflow-hidden mb-5"
     data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active slide-1">
            <div class="slide-content">
                <i class="bi bi-lightning-charge display-1"></i>
                <h2 class="fw-bold">Powerful Motors</h2>
                <p>Cut through thick beards with ease.</p>
            </div>
        </div>
        <div class="carousel-item slide-2">
            <div class="slide-content">
                <i class="bi bi-droplet display-1"></i>
                <h2 class="fw-bold">Waterproof &amp; Easy to Clean</h2>
                <p>Rinse it under the tap after every trim.</p>
            </div>
        </div>
        <div class="carousel-item slide-3">
            <div class="slide-content">
                <i class="bi bi-battery-charging display-1"></i>
                <h2 class="fw-bold">Long-Lasting Battery</h2>
                <p>Up to 90 minutes of cordless trimming.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- FEATURES -->
<div id="features" class="text-center mb-4">
    <h2 class="fw-bold">Why Choose Us?</h2>
    <p class="text-muted">Everything you need for the perfect trim</p>
</div>
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card feature-card h-100 border-0 shadow-sm text-center p-4">
            <i class="bi bi-patch-check text-primary display-4 mb-3"></i>
            <h5>Quality Guaranteed</h5>
            <p class="text-muted mb-0">Every product is tested and backed by a warranty.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card feature-card h-100 border-0 shadow-sm text-center p-4">
            <i class="bi bi-truck text-primary display-4 mb-3"></i>
            <h5>Fast Delivery</h5>
            <p class="text-muted mb-0">Quick and reliable shipping straight to your door.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card feature-card h-100 border-0 shadow-sm text-center p-4">
            <i class="bi bi-headset text-primary display-4 mb-3"></i>
            <h5>Friendly Support</h5>
            <p class="text-muted mb-0">Our team is ready to help you pick the right trimmer.</p>
        </div>
    </div>
</div>

<!-- CALL TO ACTION -->
<div class="card border-0 shadow-sm text-center p-5 cta-card">
    <h3 class="fw-bold">Ready for a Fresh Look?</h3>
    <p class="text-muted">Browse our collection and find your perfect trimmer today.</p>
    <div>
        <a href="products.php" class="btn btn-primary btn-lg">Browse Products</a>
    </div>
</div>

<style>
/* Hero */
.hero-section {
    background: linear-gradient(135deg, #212529 0%, #0d6efd 100%);
}
.logo-icon { font-size: 2.5rem; }
.hero-big-icon {
    font-size: 12rem;
    opacity: 0.85;
    display: inline-block;
    animation: floaty 4s ease-in-out infinite;
}

/* Animations */
@keyframes floaty {
    0%, 100% { transform: translateY(0) rotate(-10deg); }
    50%      { transform: translateY(-20px) rotate(10deg); }
}
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(25px); }
    to   { opacity: 1; transform: translateY(0); }
}
.fade-in { opacity: 0; animation: fadeUp 0.8s ease forwards; }
.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }

/* Carousel */
.carousel-item { height: 320px; }
.slide-content {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    padding: 1rem;
}
.slide-1 { background: linear-gradient(135deg, #0d6efd, #6610f2); }
.slide-2 { background: linear-gradient(135deg, #198754, #20c997); }
.slide-3 { background: linear-gradient(135deg, #fd7e14, #dc3545); }

/* Feature cards */
.feature-card { transition: transform 0.3s, box-shadow 0.3s; }
.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.15) !important;
}
</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>