<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        EjemploSeg - @yield('title', 'Access')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[E3D6BF] min-h-screen font-sans">

    <div class="min-h-screen flex flex-col items-center justify-center p-6">

        <a
            href="{{ url('/') }}"
            class="text-4xl font-bold text-burgundy mb-8"
        >
            EjemploSeg
        </a>

        <div class="w-full max-w-md bg-card rounded-2xl shadow-xl p-8">

            @if(session('success'))

                <div class="bg-coral text-burgundy px-4 py-3 rounded-lg mb-5">
                    {{ session('success') }}
                </div>

            @endif

            @yield('content')

        </div>

        <p class="text-burgundy text-sm mt-6">
            © {{ date('Y') }} EjemploSeg
        </p>

    </div>

</body>

</html>