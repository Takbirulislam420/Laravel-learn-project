<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home page</title>
</head>
<body>
  <div class="container">
      <ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About Us</a></li>
    <li><a href="{{ route('contact') }}">Contact Us</a></li>
  </ul>
  </div>

  <h1>Welcome to the Home Page!</h1>

  <div class="users-list">
    <h2>Users List:</h2>
    <ul>
      @foreach($users_form_controller as $user)
        <li>Name is:{{ $user['name'] }} and email is:{{ $user['email'] }}</li>
      @endforeach
    </ul>
  </div>

  <pre>{{ print_r($users_form_controller) }}</pre>

  <div>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users_form_controller as $user)
          <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['age'] }}</td>
            <td>{{ $user['is_active'] ? 'Active' : 'Inactive' }}</td>
          </tr>
        @endforeach
      </tbody>
  </div>

  
</body>
</html>