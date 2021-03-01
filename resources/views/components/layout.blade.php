<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5, minimum-scale=1.0">
    <meta name="description" content="Moovingo | Sell your home for more">
    <title>Moovingo</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
</head>
<body {{ $attributes }}>
    <div class="left-0 right-0 light:absolute light:top-0 z-30">
        <x-header-mobile/>
    </div>
    <div class="container mx-auto max-w-screen-lg hidden md:block left-0 right-0 light:absolute light:top-0 z-30">
        <x-header/>
    </div>
    {{ $slot }}
    <x-footer/>
</body>
</html>