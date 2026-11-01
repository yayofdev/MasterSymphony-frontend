@extends('layout.base')
@section('contenido')
    <style>
        #btn-ver-ofertas {
            border: 2px solid transparent;
            transition: border-color: 0.3s ease;
        }

        #btn-ver-ofertas:hover {
            border-color: #8128e7;
        }
    </style>
    {{-- BANNER --}}
    <section class="bg-gray-100 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-12 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2">
            <div class="mr-auto place-self-center lg:col-span-1 w-full px-8">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Master Symphøny</h1>
                <p class="mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Descubre nuestra colección exclusiva con ofertas únicas pensadas para ti.
                    Compra fácil, rápido y seguro desde donde estés. ¡Eleva tu experiencia de compra
                    y recibe tus productos sin complicaciones!</p>
                <a href="/ofertas" id="btn-ver-ofertas"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-blue-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                    style="">
                    Ver ofertas
                </a>
            </div>
            <div class="lg:mt-0 lg:col-span-2 lg:flex py-8">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="h-56 w-full">
                                <a href="/detalle_producto">
                                    <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/drum.jpeg"
                                        alt="imagen_productobateria_drum" />
                                </a>
                            </div>
        
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <span
                                        class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        Descuento del 20% </span>
                                </div>
        
                                <a href="/detalle_producto"
                                    class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Drum Yamaha 9300 Series</a>
        
                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$1,399</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="h-56 w-full">
                                <a href="/detalle_producto">
                                    <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/bateria1.png"
                                        alt="imagen_productobateria1" />
                                </a>
                            </div>
        
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <span
                                        class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        Descuento del 10% </span>
                                </div>
        
                                <a href="/detalle_producto"
                                    class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Batería
                                    Fender Azul Agua 5pzas. c/Asiento y Platillos</a>
        
                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$15,160</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="h-56 w-full">
                                <a href="/detalle_producto">
                                    <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/acordeon.png"
                                        alt="imagen_productoacordeon" />
                                </a>
                            </div>
        
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <span
                                        class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        Descuento del 35% </span>
                                </div>
        
                                <a href="/detalle_producto"
                                    class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Acordeón
                                    Jackson Bravo III 34 Teclas 72 Bajos Negro</a>
        
                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$46,280</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 hover:bg-gray-900 group-focus:ring-4 group-focus:ring-gray-500">
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                        </span>

                    </button>

                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 hover:bg-gray-900 group-focus:ring-4 group-focus:ring-gray-500">
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 1l4 4-4 4" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        {{-- PRODUCTOS DESTACADOS --}}
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h1 style="font-size: 150%;"> <strong>Destacados</strong> </h1>
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-4">
                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto jackson instrumentosCuerdas familias rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/guitarra1.png"
                                alt="imagen_producto" />
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-end gap-4">
                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-2"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-2" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;"    
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Guitarra
                            Acústica Jackson CG100 Natural ’39</a>
                            <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 60px;">
                            Guitarra acústica clásica de 39 pulgadas con acabado natural, perfecta para principiantes y estudiantes. Sonido cálido y construcción resistente.                        
                        </p>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(1,233)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$2,440</p>
                        </div>
                    </div>
                </div>

                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto yamaha aditivos baquetas rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/baquetas_yamaha.jpeg"
                                alt="imagen_producto" />
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-end gap-4">

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-3"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-3" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;"    
                        class=" text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Baquetas Yamaha 5a</a>
                            <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 60px;">
                            Baquetas estándar tamaño 5A, fabricadas en madera de alta calidad para una respuesta equilibrada. Perfectas para práctica y presentaciones en vivo.
                        </p>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">4,8</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(2,957)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$149</p>
                        </div>
                    </div>
                </div>

                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto yamaha aditivos puas rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/paquete_puas.jpeg"
                                alt="imagen_producto" />
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-end gap-4">

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-7"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-7" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Paquete de púas Yamaha</a>
                            <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 60px;">
                            Set de púas Yamaha en varios grosores y colores. Perfectas para guitarristas que buscan variedad y calidad en su técnica.
                        </p>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.7</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(387)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$150</p>
                        </div>
                    </div>
                </div>

                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto yamaha instrumentosViento familias rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/clarinete.jpg"
                                alt="imagen_producto" />
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-end gap-4">

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-8"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-8" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Clarinete
                            Yamaha YCL255</a>
                            <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 60px;">
                            Clarinete Yamaha ideal para estudiantes, fabricado en resina ABS duradera con un tono cálido y afinación precisa. Fácil de tocar y mantener.
                        </p>

                        <div class="mt-2 flex items-center gap-2">

                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(4,775)</p>

                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$11,499</p>
                        </div>

                    </div>
                </div>

                <a href="/galeria">
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp; Ver mas</h2>
                </a>
            </div>
        </div>

        {{-- OFERTAS --}}
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h1 style="font-size: 150%;"> <strong>Ofertas</strong> </h1>
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-4">
                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto jackson aditivos baquetas rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/baquetas_jackson.jpeg"
                                alt="imagen_producto" />
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                Descuento del 20% </span>

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-7"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-7" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white"> Baquetas Jackson </a>
                        <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 60px;">
                            Baquetas resistentes con diseño ergonómico, ideales para bateristas de todos los niveles. Ofrecen buen equilibrio y durabilidad.
                        </p>
                        
                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.7</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(387)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$100</p>
                        </div>
                    </div>
                </div>

                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto fender aditivos cuerdas rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/cuerdas1.jpeg"
                                alt="imagen_producto" />
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                Descuento del 20% </span>

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-7"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-7" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Juego de cuerdas Fender para guitarra folclorica</a>
                        <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 60px;">
                            Set de cuerdas Fender diseñado para guitarras folclóricas, brinda un tono brillante y duradero con excelente proyección.                        
                        </p>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.7</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(387)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$130</p>
                        </div>
                    </div>
                </div>

                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto fender instrumentosPercusion familias rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/bateria1.png"
                                alt="imagen_producto" />
                        </a>
                    </div>

                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                Descuento del 10% </span>

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-5"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-5" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Batería
                            Fender Azul Agua 5pzas. c/Asiento y Platillos</a>
                            <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 60px;">
                            Set completo de batería de 5 piezas en color azul agua, incluye asiento y platillos. Ideal para principiantes y estudiantes con un sonido completo y profesional.
                        </p>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.8</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(4,263)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$15,160</p>
                        </div>
                    </div>
                </div>

                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto jackson instrumentosViento familias rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/acordeon.png"
                                alt="imagen_producto" />
                    </div>

                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                Descuento del 35% </span>

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites-3"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites-3" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Acordeón
                            Jackson Bravo III 34 Teclas 72 Bajos Negro</a>
                            <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 60px;">
                            Acordeón versátil de 34 teclas y 72 bajos, ideal para músicos intermedios. Diseño elegante en color negro con excelente proyección sonora.
                        </p>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(879)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$46,280</p>
                        </div>
                    </div>
                </div>

                <a href="/ofertas">
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp; Ver mas</h2>
                </a>
            </div>
        </div>
    </section>
@endsection
