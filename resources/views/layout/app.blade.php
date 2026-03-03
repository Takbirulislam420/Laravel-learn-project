<!DOCTYPE html>
<html lang="en">

{{-- Header file include here --}}
@include('layout.components.header')

<body>

<!-- Navbar -->
@include('layout.components.navbar')

{{-- Here is the main --}}
<div class="container mt-5 pt-3">
    @yield('content')
</div>

<!-- Footer -->
@include('layout.components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>