@extends('layouts.app')

@section('content')
    <div class="px-10 pb-4 bg-white">
        <div class="flex justify-center items-center w-full relative">
            {{-- <div class="bg-[#000064] absolute w-full h-[200px] z-0"></div> --}}
            <div class="w-6/12 flex flex-col justify-center items-center z-10 relative">
                <h1 class="text-4xl font-bold text-[#E5002B]">¡Bienvenido a StoreProject!</h1>
                <p class="pt-2 font-semibold text-center text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br> Ipsam aperiam placeat vitae ducimus pariatur ad quaerat corporis,
                    <br> hic odio esse! Hic a nihil quibusdam labore ipsa, fuga mollitia rerum ipsum?
                </p>
                <hr class="h-[2px] w-8/12 bg-[#E5002B] border-[#E5002B] mt-4">
            </div>
            <div class="w-6/12 flex">
                <img src="{{ asset('assets/img/producto.png') }}" alt="" class="z-10 w-full">
            </div>
        </div>

        <hr>

        <div class="flex justify-center items-center mb-20 py-5">
            <div class="flex w-6/12 flex-col justify-center items-center">
                <section class="splide" aria-labelledby="carousel-heading">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="w-full flex justify-center ">
                                    <div class="w-[22rem] h-[18rem] flex shadow-inner">
                                        <img src="{{ asset('assets/img/Producto_10.png') }}" alt=""
                                            class="flex w-full h-full">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="w-full flex justify-center">
                                    <div class="w-[22rem] h-[18rem] flex shadow-inner p-4">
                                        <img src="{{ asset('assets/img/Producto_13.png') }}" alt=""
                                            class="flex w-full h-full">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="w-full flex justify-center">
                                    <div class="w-[22rem] h-[18rem] flex shadow-inner p-4">
                                        <img src="{{ asset('assets/img/Producto_14.png') }}" alt=""
                                            class="flex w-full h-full">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="w-full flex justify-center">
                                    <div class="w-[22rem] h-[18rem] flex shadow-inner p-4">
                                        <img src="{{ asset('assets/img/Producto_15.png') }}" alt=""
                                            class="flex w-full h-full">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="w-6/12 flex flex-col justify-center items-center">
                <h1 class="text-4xl font-bold text-[#E5002B]">Nuestros productos</h1>
                <p class="pt-2 font-semibold text-center text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br> Ipsam aperiam placeat vitae ducimus pariatur ad quaerat corporis,
                    <br> hic odio esse! Hic a nihil quibusdam labore ipsa, fuga mollitia rerum ipsum?
                </p>
                <hr class="h-[2px] w-8/12 bg-[#E5002B] border-[#E5002B] mt-4">
            </div>
        </div>
    </div>

    <div class="px-10 py-10">
        <div class="mb-5">
            <h1 class="text-white text-4xl font-semibold mb-1">Productos populares</h1>
            <hr class="h-[2px] bg-[#1A1A1A] border-[#1A1A1A] mt-4">
        </div>

        <div class="my-20">
            <div class="flex gap-x-3 justify-center flex-wrap">
                <div class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                    <div class="flex justify-center">
                        <div class="p-4 h-[13rem] w-[18rem]">
                            <img class="rounded-t-lg flex w-full h-full" src="{{ asset('assets/img/Producto_14.png') }}"
                                alt="" />
                        </div>
                    </div>
                    <div class="p-5">
                        <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                        <a href="" class="text-white bg-[#E5002B] hover:bg-[#35000A] transition duration-700 ease-in-out py-2 px-4 rounded font-bold mt-2">Ver Mas</a>
                    </div>
                </div>
            </div>

            <div class="flex gap-x-3 justify-center flex-wrap mt-5">
                <div class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                    <div class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_15.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <a href="" class="text-white bg-[#E5002B] py-1 px-2 rounded font-bold">Ver Mas</a>
                    </div>
                </div>
                <div class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                    <div class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_15.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <a href="" class="text-white bg-[#E5002B] py-1 px-2 rounded font-bold">Ver Mas</a>
                    </div>
                </div>
                <div class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                    <div class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_15.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <a href="" class="text-white bg-[#E5002B] py-1 px-2 rounded font-bold">Ver Mas</a>
                    </div>
                </div>
            </div>

            <div class="flex gap-x-3 justify-center flex-wrap mt-5">
                <div class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                    <div class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_13.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <a href="" class="text-white bg-[#E5002B] py-1 px-2 rounded font-bold">Ver Mas</a>
                    </div>
                </div>
                <div class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                    <div class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_13.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <a href="" class="text-white bg-[#E5002B] py-1 px-2 rounded font-bold">Ver Mas</a>
                    </div>
                </div>
                <div class="max-w-sm bg-[#1A1A1A] rounded-lg shadow">
                    <div class="p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/img/Producto_13.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <a href="" class="text-white bg-[#E5002B] py-1 px-2 rounded font-bold">Ver Mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 h-72 flex mb-20 bg-fixed bg-cover bg-center"
        style="background-image: url({{ asset('assets/img/bg_rog2.jpeg') }});">
        <div class="text-white text-center w-full h-full flex flex-col items-center justify-center"
            style="background-color: #000000c4">
            <h1 class="text-3xl font-semibold">Encuentra productos de marcas muy reconocidas.</h1>
            <p class="text-lg mt-4">En nuestra tienda encontraras los mejor productos de las mejores marcas que brindan una
                buena calidad para tus perifericos o computadoras.</p>
        </div>
    </div>

    <div class="px-10">
        <div class="flex py-20">
            <div class="w-6/12 flex justify-center items-center">
                <img src="{{ asset('assets/img/ASUS_logo.png') }}" alt="" class="w-[30rem] h-[8rem]">
            </div>
            <div class="w-6/12 text-white flex flex-col justify-center items-start">
                {{-- <h1 class="text-4xl font-bold uppercase">Asus</h1> --}}
                <p class="mt-2 text-xl pr-10 text-center font-semibold">
                    ASUS se ha consolidado como un líder global en tecnología, ofreciendo productos innovadores y de alta
                    calidad que definen el estándar en el mundo de la informática y el entretenimiento digital. Desde su
                    fundación en 1989, ASUS ha sido sinónimo de innovación y excelencia en cada uno de sus productos, que
                    incluyen placas base, laptops, tarjetas gráficas, y periféricos.
                </p>
            </div>
        </div>

        <hr class="h-[2px] bg-[#1A1A1A] border-[#1A1A1A] mt-4">

        <div class="flex my-20 py-20">
            <div class="w-6/12 flex justify-center text-white">
                <p class="mt-2 text-xl pl-10 text-center font-semibold">
                    Republic of Gamers (ROG), una destacada división de ASUS, se ha posicionado como el líder en tecnología
                    de gaming de alto rendimiento. Diseñada específicamente para entusiastas y profesionales del juego, ROG
                    ofrece una gama completa de productos que maximizan el rendimiento y elevan la experiencia de juego a un
                    nivel superior.
                </p>
            </div>
            <div class="w-6/12 flex justify-center items-center">
                <img src="{{ asset('assets/img/ROG_logo.png') }}" alt="" class="w-[18rem] h-[9rem] ">
            </div>
        </div>

        <hr class="h-[2px] bg-[#1A1A1A] border-[#1A1A1A] mt-4">

        <div class="flex my-20 py-20">
            <div class="w-6/12 flex justify-center items-center">
                <img src="{{ asset('assets/img/logitech_logo.png') }}" alt="" class="w-[25rem] h-[8rem] ">
            </div>
            <div class="w-6/12 flex justify-center text-white">
                <p class="mt-2 text-xl pr-10 text-center font-semibold">
                    Descubre la excelencia en periféricos con Logitech, la marca líder en tecnología diseñada para
                    transformar tu experiencia digital. Desde ratones ergonómicos y teclados ultra precisos hasta cámaras
                    web de alta definición y sistemas de audio envolventes, Logitech combina diseño innovador con
                    funcionalidad avanzada para potenciar tu productividad y entretenimiento.
                </p>
            </div>
        </div>

        <hr class="h-[2px] bg-[#1A1A1A] border-[#1A1A1A] mt-4">

        <div class="flex my-20 py-20">
            <div class="w-6/12 flex justify-center text-white">
                <p class="mt-2 text-xl pl-10 text-center font-semibold">
                    Redragon se ha establecido como una marca destacada en el mundo de los periféricos para gaming,
                    ofreciendo soluciones que combinan rendimiento excepcional con un diseño innovador. Con una sólida
                    reputación por sus productos de alta calidad y gran valor, Redragon está comprometida con mejorar la
                    experiencia de los jugadores y entusiastas de la tecnología.
                </p>
            </div>
            <div class="w-6/12 flex justify-center items-center">
                <img src="{{ asset('assets/img/redragon_logo.png') }}" alt="" class="w-[28rem] h-[10rem] ">
            </div>
        </div>
    </div>


    <div>

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
