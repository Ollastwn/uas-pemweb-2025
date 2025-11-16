<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-midnight_text dark:bg-black dark:text-white">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-white/80 dark:bg-black/70 backdrop-blur-md shadow-sm z-50 border-b border-gray-200 dark:border-dark_border">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="text-2xl font-bold text-blue-600 dark:text-primary">MyApp</a>

            <ul class="flex items-center space-x-6 text-midnight_text dark:text-white">
                <li><a href="/" class="hover:text-blue-600 dark:hover:text-primary transition">Home</a></li>
                <li><a href="/page" class="hover:text-blue-600 dark:hover:text-primary transition">Page</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <main class="min-h-screen flex items-center justify-center text-center pt-20 px-4">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Welcome to MyApp</h1>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray mb-8">Sistem surat-menyurat dan TTE berbasis Laravel & Filament. Mudahkan proses pengajuan, persetujuan, dan pemantauan hanya dalam satu aplikasi.</p>

            <a href="/login" class="btn">Get Started</a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-20 py-6 bg-white dark:bg-black border-t border-gray-200 dark:border-dark_border text-center text-gray-600 dark:text-gray">
        <p class="text-sm">© 2025 MyApp — All rights reserved.</p>
    </footer>

</body>
</html>
