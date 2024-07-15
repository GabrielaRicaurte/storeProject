@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center w-full relative">
        {{-- <div class="bg-[#278d33] absolute w-full h-[200px] z-0"></div> --}}
        <div class="w-6/12 flex flex-col justify-center items-center text-white z-10 relative">
            <h1 class="text-4xl font-bold text-[#278d33]">¡Bienvenido a StoreProject!</h1>
            <p class="pt-2 font-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                <br> Ipsam aperiam placeat vitae ducimus pariatur ad quaerat corporis,
                <br> hic odio esse! Hic a nihil quibusdam labore ipsa, fuga mollitia rerum ipsum?
            </p>
            <hr class="h-[2px] w-8/12 bg-[#278d33] border-[#278d33] mt-4">
        </div>
        <img src="{{ asset('assets/img/producto.png') }}" alt="" class="w-6/12 z-10">
    </div>

    <div class="flex justify-center items-center ">
        <div class="flex w-6/12 flex-col justify-center items-center bg-white">
            <img src="{{ asset('assets/img/producto_2.png') }}" alt="" class="">
        </div>
        <div class="text-white w-6/12 flex flex-col justify-center items-center">
            <h1 class="text-4xl font-bold text-[#278d33]">Nuestros productos</h1>
            <p class="pt-2 font-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                <br> Ipsam aperiam placeat vitae ducimus pariatur ad quaerat corporis,
                <br> hic odio esse! Hic a nihil quibusdam labore ipsa, fuga mollitia rerum ipsum?
            </p>
            <hr class="h-[2px] w-8/12 bg-[#278d33] border-[#278d33] mt-4">
        </div>
    </div>
@endsection
