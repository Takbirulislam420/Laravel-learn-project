<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Data</h1>
    <p>Name: {{ auth()->user()->name }}</p>
    <p>Email: {{ auth()->user()->email }}</p>
    <p>Created At: {{ auth()->user()->created_at }}</p>
    <p>Updated At: {{ auth()->user()->updated_at }}</p>
    <p>password: {{ auth()->user()->password }}</p>
    
</body>
</html>