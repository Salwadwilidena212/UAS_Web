<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Furniture Landing Page</title>
    <meta name="description"
        content="Get started with a free landing page built with Tailwind CSS and the Flowbite Blocks system.">
    <link href="./output.css" rel="stylesheet">

    <style>
        .img-center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Furniture</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <div class="flex">
                        <img src="assets/cart.png">
                        <img class="px-5" src="assets/frame-6.png"
                            style="width:30px !important; height: 30px !important;">
                    </div>
                    <a href="#"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        style="background-color: #212121;">Registration</a>
                    @if (auth()->user()->name ?? false)
                    <a href="/dashboard"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        style="background-color: #212121;">{{ auth()->user()->name }}</a>
                    @else
                    <a href="/dashboard"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        style="background-color: #212121;">Login</a>
                    @endif
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About
                                Us</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                     {{ $headline->title }}</h1>
                <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">{{ $headline->description }}</p>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"
                    style="background-color: #212121;">
                    Shop Now
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ $headline->image }}" alt="mockup">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" style="background: #212121 !important">
        <div class="flex justify-center items-center w-100 p-6" style="padding-top:75px; padding-bottom:75px">
            @foreach ($features as $feature)
                <div class="text-center px-2">
                    <img class="img-center" src="{{ $feature->image }}">
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mb-8 max-w-screen-md lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Our Best Seller Product</h2>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                @foreach ($products as $product)
                    <div>
                        <div class="flex justify-center items-center w-100 dark:bg-primary-900">
                            <img src="{{ $product->image }}" width="100%">
                        </div>
                        <div class=" mb-2 mt-2 flex justify-between">
                            <h4 class="text-xl font-bold dark:text-white">{{ $product->name }}</h4>
                            <h4 class="font-bold"> $ {{ $product->price }}</h4>
                        </div>
                        <div class=" mb-2 mt-2 flex justify-between">
                            <p class="text-gray-500 dark:text-gray-400">{{ $product->description }}</p>
                            <div class="flex">
                                <img class="pt-2" src="assets/Star.png"
                                    style="width:15px !important; height: 20px !important;">
                                <p class="text-gray-500 dark:text-gray-400 px-2">{{ ($product->rating) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div>
                <img class="w-full rounded-lg" src="{{ $promotion->image }}" alt="office content 1">
            </div>
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">{{ $promotion->name }}</h2>
                <p class="mb-4">{{ $promotion->description }}</p>
                <div class="flex mt-4 justify-between">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"
                        style="background-color: #212121;">
                        Buy Now
                    </a>
                    <strong class="font-extrabold" style="color:black;">$ {{ $promotion->price }}</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-900 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6"
            style="background-image: url('assets/bg1.png'); min-height: 375px;">

        </div>
    </section>

    <section class="bg-white dark:bg-gray-900 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6" style="min-height: 20px;">

        </div>
    </section>

    <footer class="p-4 bg-gray-50 sm:p-6 dark:bg-gray-900" style="background-color: #212121;">
        <div class="mx-auto max-w-screen-xl mt-4">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Furniture</span>
                    </a>

                    <div class="w-1/2">
                        <p class="text-white py-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien faucibus lectus, vel tempor dolor augue et lectus.
                        </p>

                        <img src="assets/Group 2000.png">
                    </div>

                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-white uppercase dark:text-white">Navigation</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Categories</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Best Products</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Cart</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Wishlist</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-white uppercase dark:text-white">Shop</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Ruang Tamu</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Ruang Makan</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Ruang Kerja</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Ruang Tidur</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Furniture</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-white uppercase dark:text-white">Product</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Chair</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Table</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Wardrobe</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-white uppercase dark:text-white">Paymnet Methode</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Credit Card</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Paypal</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-white uppercase dark:text-white">Setting</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">My Account</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Order</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Address</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Password</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-white uppercase dark:text-white">Contact</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">Lokasimu Di Jakarta Barat</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">furniture@gmail.com</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-white">0897 9261 1279</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>
