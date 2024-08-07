<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') - $tudio</title>
</head>
<body>
<nav class="flex justify-between items-center nav-bar pt-4 pr-6 pl-6">
    <a class="navbar-brand" href="/">$tudio </a>
    <div class="flex space-x-6">
        <a href="/admin/dashboard" class="nav-link">Dashboard</a>
        <a href="/admin/users" class="nav-link">Users</a>
        <a href="/admin/bookings" class="nav-link">Bookings</a>
        <a href="/admin/products" class="nav-link">Add Products</a>
    </div>
</nav>
<hr class="border border-gray-300 mt-6 mb-4">
</body>
</html>
