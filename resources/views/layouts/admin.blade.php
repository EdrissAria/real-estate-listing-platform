<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white h-screen">
            <div class="p-6">
                <h1 class="text-lg font-bold mb-4">Admin Panel</h1>
                <nav>
                    <ul>
                        <li class="mb-2">
                            <a href="/users" class="block py-2 px-4 rounded hover:bg-gray-700">Users</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('properties.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Properties</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('categories.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Categories</a>
                        </li>
                        <li class="mb-2">
                            <a href="tags" class="block py-2 px-4 rounded hover:bg-gray-700">Tags</a>
                        </li>
                        <li class="mb-2">
                            <a href="favorite" class="block py-2 px-4 rounded hover:bg-gray-700">Favorites</a>
                        </li>
                        <li class="mb-2">
                            <a href="reviews" class="block py-2 px-4 rounded hover:bg-gray-700">Reviews</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <main class="flex-1 p-6 overflow-auto">
            <header class="mb-6">
                <h1 class="text-2xl font-bold">@yield('title', 'Dashboard')</h1>
            </header>

            <section>
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html>
