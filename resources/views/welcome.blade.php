@extends('layouts.app')

@section('content')
    <div class="px-10">
        <div class="flex justify-center items-center w-full relative">
            {{-- <div class="bg-[#000064] absolute w-full h-[200px] z-0"></div> --}}
            <div class="w-6/12 flex flex-col justify-center items-center text-white z-10 relative">
                <h1 class="text-4xl font-bold text-[#1A1A1A]">¡Bienvenido a StoreProject!</h1>
                <p class="pt-2 font-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br> Ipsam aperiam placeat vitae ducimus pariatur ad quaerat corporis,
                    <br> hic odio esse! Hic a nihil quibusdam labore ipsa, fuga mollitia rerum ipsum?
                </p>
                <hr class="h-[2px] w-8/12 bg-[#1A1A1A] border-[#1A1A1A] mt-4">
            </div>
            <div class="w-6/12 flex">
                <img src="{{ asset('assets/img/producto.png') }}" alt="" class="z-10 w-full">
            </div>
        </div>

        <div class="flex justify-center items-center mb-20 py-4">
            <div class="flex w-6/12 flex-col justify-center items-center">
                <section class="splide" aria-labelledby="carousel-heading">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="w-full flex justify-center">
                                    <div class="w-[22rem] h-[18rem] flex">
                                        <img src="{{ asset('assets/img/Producto_10.png') }}" alt=""
                                            class="flex w-full h-full">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="w-full flex justify-center">
                                    <div class="w-[22rem] h-[18rem] flex">
                                        <img src="{{ asset('assets/img/Producto_13.png') }}" alt=""
                                            class="flex w-full h-full">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="w-full flex justify-center">
                                    <div class="w-[22rem] h-[18rem] flex">
                                        <img src="{{ asset('assets/img/Producto_14.png') }}" alt=""
                                            class="flex w-full h-full">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="w-full flex justify-center">
                                    <div class="w-[22rem] h-[18rem] flex">
                                        <img src="{{ asset('assets/img/Producto_15.png') }}" alt=""
                                            class="flex w-full h-full">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="text-white w-6/12 flex flex-col justify-center items-center">
                <h1 class="text-4xl font-bold text-[#1A1A1A]">Nuestros productos</h1>
                <p class="pt-2 font-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br> Ipsam aperiam placeat vitae ducimus pariatur ad quaerat corporis,
                    <br> hic odio esse! Hic a nihil quibusdam labore ipsa, fuga mollitia rerum ipsum?
                </p>
                <hr class="h-[2px] w-8/12 bg-[#1A1A1A] border-[#1A1A1A] mt-4">
            </div>
        </div>

        <div>
            <div class="mb-5">
                <h1 class="text-white text-4xl font-semibold mb-1">Productos populares</h1>
                <hr class="h-[2px] bg-[#1A1A1A] border-[#1A1A1A] mt-4">
            </div>

            <div class="my-20">
                <div class="flex gap-x-3 justify-center flex-wrap">
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_14.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_14.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_14.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                </div>

                <div class="flex gap-x-3 justify-center flex-wrap mt-5">
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_15.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_15.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_15.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                </div>

                <div class="flex gap-x-3 justify-center flex-wrap mt-5">
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_13.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_13.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                        <div class="p-4">
                            <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_13.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <a href="" class="text-white bg-[#000064] py-1 px-2 rounded font-bold">Ver Mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 h-72 flex mb-20 bg-fixed bg-cover bg-center" style="background-image: url({{asset('assets/img/bg_rog2.jpeg')}});">
        <div class="text-white text-center w-full h-full flex flex-col items-center justify-center" style="background-color: #000000c4">
            <h1 class="text-3xl font-semibold">Encuentra productos de marcas muy reconocidas.</h1>
            <p class="text-lg mt-4">En nuestra tienda encontraras los mejor productos de las mejores marcas que brindan una buena calidad para tus perifericos o computadoras.</p>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var splide = new Splide('.splide', {
            width: '100%',
            type: 'fade',
            perPage: 1,
            rewind: true,
            arrows: false,
            pagination: false,
            autoplay: true,
            drag: false,
            pauseOnHover: false,
            pauseOnFocus: false,


        });

        splide.mount();
    </script>
@endsection
