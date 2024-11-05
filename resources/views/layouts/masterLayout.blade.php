<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website- @yield('title','common') Page</title>
    <link rel="stylesheet" href="/css2/stylemaster.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <h1>Welcome to Our Website</h1>
    </header>

    <!-- Navigation Section -->
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/layouts/about">About</a>
        <a href="/layouts/contact">Contact</a>
    </nav>

    <div class="container">
        <!-- Main Content (Fixed) -->
        <main class="main-content">
            <div class="scrollable-content">
                <article>
                    @hasSection ('content')
                        @yield('content')
                    @else
                        <h2>No Content Found</h2>
                    @endif
                </article>
            </div>
        </main>

        <!-- Sidebar (Fixed) -->
        <aside class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#">Latest Posts</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Archives</a></li>
                <li><a href="#">Popular Tags</a></li>
            </ul>
        </aside>
    </div>

    <footer class="footer">
        <p>&copy; 2024 LARAVEL Help LTD. . All rights reserved.</p>
    </footer>
</body>
</html>
