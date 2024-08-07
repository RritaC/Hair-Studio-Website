<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') - $tudio</title>
    <style>
        /* Custom styles */
        .logo {
            max-width: 120px; /* Adjust size of logo */
            height: auto;
        }
        .nav-bar {
            background-color: #000; /* Black background for navigation */
            padding: 0.5rem 1rem; /* Smaller padding for a smaller header */
            border-bottom: 1px solid rgba(255, 255, 255, 0.25); /* Border color */
        }
        .nav-bar .nav-link {
            color: white; /* White text color for links */
            font-weight: bold;
            font-size: 1rem; /* Adjust font size */
        }
        .nav-bar .nav-link:hover {
            color: #4a90e2; /* Hover color */
        }
    </style>
</head>
<body>
<nav class="flex justify-between items-center nav-bar">
    <a class="navbar-brand" href="/">
        <img src="https://aa0fdbf07e3bcd9f2348-0554560afdd4c824bd8d3fdead8482c4.ssl.cf2.rackcdn.com/BusinessLogo/900x150/62388625_124155_$2019_07_30_03_18_54_1243.jpg" alt="Logo" class="logo">
    </a>
    <div class="flex space-x-6">
        <a href="/hair" class="nav-link">Hair</a>
        <a href="/makeup" class="nav-link">Makeup</a>
        <a href="/products" class="nav-link">Products</a>
        <a href="/about-us" class="nav-link">About Us</a>

        @auth
            <a href="/profile" class="nav-link">Your Booking</a>
            <form method="POST" action="/logout">
                @csrf

                <x-form-button>Log Out</x-form-button>

            </form>
        @endauth
    </div>

</nav>
</body>
</html>
