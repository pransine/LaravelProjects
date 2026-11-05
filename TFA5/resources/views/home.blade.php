<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS - Home</title>
</head>
<body>
    <h1>Point of Sale System</h1>
    <p>Welcome to our POS application!</p>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customer Accounts</a> |
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>

    <h2>Home</h2>
    <p>This is the landing page of our Point of Sale system.</p>
</body>
</html>