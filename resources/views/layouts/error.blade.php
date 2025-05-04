{{-- filepath: d:\PersonalFolder\Freel\LIMSIANGHUAT\web_folder\resources\views\layouts\error.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Error</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="flex flex-col items-center justify-center min-h-screen">
        @yield('content')
    </div>
</body>
</html>
