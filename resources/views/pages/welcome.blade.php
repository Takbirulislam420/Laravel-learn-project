@extends('layout.app');
@section('content')
<!-- Hero Section -->
<section class="hero text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Build Something Amazing</h1>
    <p class="lead">Modern responsive landing page built with Bootstrap 5</p>
    <a href="#contact" class="btn btn-light btn-lg mt-3">Get Started</a>
  </div>
</section>

<!-- Features -->
<section id="features" class="py-5">
  <div class="container text-center">
    <h2 class="mb-5">Our Features</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="feature-icon mb-3">⚡</div>
        <h4>Fast Performance</h4>
        <p>Optimized for speed and efficiency to ensure the best user experience.</p>
      </div>
      <div class="col-md-4">
        <div class="feature-icon mb-3">📱</div>
        <h4>Responsive Design</h4>
        <p>Looks perfect on desktops, tablets, and mobile devices.</p>
      </div>
      <div class="col-md-4">
        <div class="feature-icon mb-3">🔒</div>
        <h4>Secure</h4>
        <p>Built with best practices and secure coding standards.</p>
      </div>
    </div>
  </div>
</section>


<!-- About -->
<section id="about" class="bg-light py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2>About Us</h2>
        <p>We create beautiful and functional web experiences using modern technologies. Our mission is to help businesses grow with stunning digital solutions.</p>
      </div>
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="About Image">
      </div>
    </div>
  </div>
</section>


<!-- Call to Action -->
<section class="cta text-center">
  <div class="container">
    <h2 class="mb-3">Ready to Start?</h2>
    <p class="mb-4">Join thousands of satisfied users today.</p>
    <a href="#contact" class="btn btn-light btn-lg">Contact Us</a>
  </div>
</section>


<!-- Contact -->
<section id="contact" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



@endsection