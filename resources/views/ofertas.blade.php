@extends('layout.base')
@section('contenido')
    <section class="bg-gray-100 py-8 antialiased dark:bg-gray-900 md:py-12" style="top: 100">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">

            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">¡Productos en oferta!</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <button data-modal-toggle="filterModal" data-modal-target="filterModal" type="button"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                        <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                        </svg>
                        Filtros
                        <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="marcas mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto jackson instrumentosCuerdas familias rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/bajo1.png" alt="imagen_producto" />
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                Descuento del 35% 
                            </span>

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Agregar al carrito </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Agregar al carrito
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="/detalle_producto"
                        style="min-height: 50px; display: inline-block;" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Bajo
                            Jackson JS1X Minion AH FB Met RD 29155557552</a>
                            <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 40px;">
                            Bajo eléctrico de escala corta con cuerpo ligero y diseño agresivo, ideal para jóvenes músicos o bajistas que buscan comodidad sin sacrificar potencia. Acabado metálico rojo vibrante.
                        </p>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">5.0</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(455)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$3,999</p>
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
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 40px;">
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
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 40px;">
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
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 40px;">
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

                <div id="productDiv" onclick="window.location.href = '/detalle_producto';" class="producto yamaha instrumentosPercusion familias rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="/detalle_producto">
                            <img class="mx-auto h-full dark:hidden" src="/partials/imagenes/drum.jpeg"
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
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Drum Yamaha 9300 Series</a>
                            <br>
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 40px;">
                            Tambor profesional de la serie 9300 de Yamaha, conocido por su gran proyección, durabilidad y sonido nítido. Usado en bandas y orquestas.
                        </p>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">4.7</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(387)</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$1,399</p>
                        </div>
                    </div>
                </div>

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
                        <p class="text-xs leading-none overflow-hidden text-gray-900 dark:text-white" style="min-height: 40px;">
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

            </div>
        </div>

        <!-- Filtros -->
        <form action="#" method="get" id="filterModal" tabindex="-1" aria-hidden="true"
            class="fixed left-0 right-0 top-0 z-50 hidden h-modal w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
            <div class="relative h-full w-full max-w-xl md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-800 pb-8">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between rounded-t p-4 md:p-5">
                        <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Filtros</h3>
                    </div>
                    <div class="px-4 md:px-5">
                        <div id="myTabContent">
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3" id="brand" role="tabpanel"
                                aria-labelledby="brand-tab">
                                
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input id="aditivos" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                            
                                            <label for="aditivos" 
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <h5 class="text-lg font-medium uppercase text-black dark:text-white ml-2">Aditivos</h5> </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="checkbox_cuerdas" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="checkbox_cuerdas"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Cuerdas (97)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="checkbox_baquetas" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="checkbox_baquetas"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Baquetas
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="checkbox_puas" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="checkbox_puas"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Puas
                                        </label>
                                    </div>

                                    {{-- <div class="flex items-center">
                                        <input id="atari" type="checkbox" value="" 
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="asus"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Correas
                                        </label>
                                    </div> --}}
                                </div>

                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input id="familias" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                            
                                            <label for="familias" 
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <h5 class="text-lg font-medium uppercase text-black dark:text-white ml-2">Familias</h5> </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="checkbox_instrumentosCuerdas" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="checkbox_instrumentosCuerdas"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Instrumentos de cuerda </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="checkbox_instrumentosViento" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="checkbox_instrumentosViento"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Instrumentos de viento </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="checkbox_instrumentosPercusion" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="checkbox_instrumentosPercusion"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Instrumentos de percusion </label>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input id="marcas" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                            
                                            <label for="marcas" 
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <h5 class="text-lg font-medium uppercase text-black dark:text-white ml-2">Marcas</h5> </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="btn_yamaha" type="checkbox" value="" role="button"
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="btn_yamaha" 
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Yamaha </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="btn_fender" type="checkbox" value="" role="button"
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="btn_fender"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            id="btn_fender">
                                            Fender </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="btn_jackson" type="checkbox" value="" role="button"
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="btn_jackson"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            id="btn_jackson">
                                            Jackson </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>
@endsection
