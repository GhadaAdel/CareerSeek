<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerSeek</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk">

<!-- div as a wrapper for the nav bar and the main area after it -->

<div class="px-10">

<!-- We have 3 sections within the nav bar, (Logo,Links and Image), so we'll create 3 divs for them -->
<nav class="flex justify-between items-center py-4 border-b border-white/20">

<div>
    <a href="/">
        <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="logo">
    </a>
</div>

<div class="space-x-5 font-bold">
    <a href="#">Jobs</a>
    <a href="#">Career</a>
    <a href="#">Salaries</a>
    <a href="#">Companies</a>
</div>

<div>
    <a href="#">Post A Job</a>
</div>

</nav>



<main class="mt-10 max-w-[986px] mx-auto">
    {{ $slot }}
</main>

</div>
    
</body>
</html>