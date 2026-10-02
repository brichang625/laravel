@extends('layouts.guest')

@section('title', 'Iniciar sesión')

@section('content')

    <div class="text-center mb-8">

        <h2 class="text-3xl font-bold text-[#662F2E]">
            Iniciar sesión
        </h2>

        <p class="text-[#662F2E] mt-2">
            Accede a tu cuenta de EjemploSeg
        </p>

    </div>

    <form action="{{ route('login') }}" method="POST">

        @csrf

        <div class="mb-5">

            <label
                for="email"
                class="block text-sm font-semibold text-[#662F2E] mb-2"
            >
                Correo electrónico
            </label>

            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                autofocus
                placeholder="correo@ejemplo.com"
                class="w-full px-4 py-3 bg-white border-2 border-pink-brown rounded-lg outline-none focus:ring-2 focus:ring-[#A14F4B]"
            >

            @error('email')
                <p class="text-red-700 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="mb-5">

            <label
                for="password"
                class="block text-sm font-semibold text-[#662F2E] mb-2"
            >
                Contraseña
            </label>

            <input
                type="password"
                name="password"
                id="password"
                required
                placeholder="••••••••"
                class="w-full px-4 py-3 bg-white border-2 border-pink-brown rounded-lg outline-none focus:ring-2 focus:ring-[#A14F4B]"
            >

            @error('password')
                <p class="text-red-700 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="flex items-center mb-6">

            <input
                type="checkbox"
                name="remember"
                id="remember"
                class="w-4 h-4 accent-[#A14F4B]"
            >

            <label
                for="remember"
                class="ml-2 text-sm text-[#662F2E]"
            >
                Recordarme
            </label>

        </div>

        <button
            type="submit"
            class="w-full bg-pink-brown hover:bg-[#662F2E] text-white font-semibold py-3 rounded-lg transition duration-200"
        >
            Entrar
        </button>

        <p class="text-center text-sm text-[#662F2E] mt-6">

            ¿No tienes cuenta?

            <a
                href="{{ route('register') }}"
                class="text-[#A14F4B] hover:text-pink-brown hover:underline font-bold"
            >
                Regístrate
            </a>

        </p>

    </form>

@endsection