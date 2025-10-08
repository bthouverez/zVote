@extends('layouts.main')

@section('title', 'Controle')

@section('content')
    <h1 class="text-5xl font-bold py-4">{{ $scrutin->libelle }}</h1>

    <div class="flex gap-4">
        <div class="w-[250px] h-[250px] bg-green-700 text-7xl text-white text-center flex justify-center rounded-xl items-center">OUI</div>
        <div class="w-[250px] h-[250px] bg-red-700 text-7xl text-white text-center flex justify-center rounded-xl items-center">NON</div>
    </div>
@endsection
