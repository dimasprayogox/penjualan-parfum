<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParfumBoss</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
</head>
<body class="h-full">
    @include('components.nav')      <!-- Memanggil navigasi -->
    @include('components.hero')     <!-- Memanggil hero section -->
    @include('components.about')     <!-- Memanggil about section -->
    @include('components.products')  <!-- Memanggil products section -->
    @include('components.testimoni') <!-- Memanggil testimonial section -->
    @include('components.contact')    <!-- Memanggil contact section -->
    @include('components.footer')     <!-- Memanggil footer -->
</body>
</html>