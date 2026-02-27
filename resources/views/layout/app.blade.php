<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    @include('layout.components.header')
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

    @include('layout.components.navbar')

    @yield('content')

    @include('layout.components.footer')

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    @include('layout.components.custom_script')
    

</body>
</html>
