@extends('layouts.plantilla')

@section('title', 'Dashboard')

@section('content')

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-burgundy">
            ¡Bienvenido, {{ Auth::user()->name }}!
        </h1>

        <p class="text-burgundy mt-2">
            Panel de control de EjemploSeg
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Personas -->
        <div class="bg-card rounded-2xl shadow-lg p-6 border-l-4 border-pink-brown">

            <p class="text-burgundy text-sm font-semibold">
                Total de Personas
            </p>

            <p class="text-4xl font-bold text-pink-brown mt-3">
                {{ $totalPersonas }}
            </p>

        </div>

        <!-- Intereses -->
        <div class="bg-card rounded-2xl shadow-lg p-6 border-l-4 border-coral">

            <p class="text-burgundy text-sm font-semibold">
                Total de Intereses
            </p>

            <p class="text-4xl font-bold text-burgundy mt-3">
                {{ $totalIntereses }}
            </p>

        </div>

        <!-- Usuarios -->
        <div class="bg-card rounded-2xl shadow-lg p-6 border-l-4 border-yellow">

            <p class="text-burgundy text-sm font-semibold">
                Total de Usuarios
            </p>

            <p class="text-4xl font-bold text-burgundy mt-3">
                {{ $totalUsuarios }}
            </p>

        </div>

    </div>

@endsection