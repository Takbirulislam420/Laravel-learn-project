<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">MyApp</a>

        <div class="d-flex align-items-center">
            <span class="text-white me-3">
                Welcome,  {{ auth()->user()->name }}
            </span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container mt-5">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow p-4">
        <h4 class="mb-3">Dashboard</h4>
        <p>You are successfully logged in 🎉</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3">
                    <h5>Profile</h5>
                    <p>Manage your account</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3">
                    <h5>Settings</h5>
                    <p>Update preferences</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3">
                    <h5>Reports</h5>
                    <p>View statistics</p>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>