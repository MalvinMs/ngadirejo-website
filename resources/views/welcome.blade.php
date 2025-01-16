<x-app-layout title="Home">
    {{-- Hero Section --}}
    <div
        class="container bg-white dark:bg-gray-900 flex flex-col px-6 py-4 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
        <div class="flex flex-col items-center w-full lg:flex-row lg:w-1/2">
            <div class="flex justify-center order-2 mt-6 lg:mt-0 lg:space-y-3 lg:flex-col">
                <button class="w-3 h-3 mx-2 bg-blue-500 rounded-full lg:mx-0 focus:outline-none"></button>
                <button
                    class="w-3 h-3 mx-2 bg-gray-300 rounded-full lg:mx-0 focus:outline-none hover:bg-blue-500"></button>
                <button
                    class="w-3 h-3 mx-2 bg-gray-300 rounded-full lg:mx-0 focus:outline-none hover:bg-blue-500"></button>
                <button
                    class="w-3 h-3 mx-2 bg-gray-300 rounded-full lg:mx-0 focus:outline-none hover:bg-blue-500"></button>
            </div>

            <div class="max-w-lg lg:mx-12 lg:order-2">
                <h1 class="text-3xl font-semibold tracking-wide text-gray-800 dark:text-white lg:text-4xl">
                    🌾 Hasil Alam Berkualitas, Dari Desa Ngadirejo untuk Indonesia 🌾
                </h1>
                <p class="mt-4 text-gray-600 dark:text-gray-300">
                    Dukung petani lokal dan UMKM desa kami! Nikmati produk alami terbaik,
                    langsung dari tangan petani ke rumah Anda. Bersama kita tumbuh, bersama
                    kita sejahtera.
                </p>
                <div class="mt-6">
                    <a href="/umkm"
                        class="px-6 py-2.5 mt-6 text-sm font-medium leading-5 text-center text-white capitalize bg-blue-600 rounded-lg hover:bg-blue-500 lg:mx-0 lg:w-auto focus:outline-none">Jelajahi
                        Produk Kami</a>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
            <img class="object-cover w-full h-full max-w-2xl rounded-md"
                src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80"
                alt="apple watch photo" />
        </div>
    </div>
    <!-- UMKM -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                💼 UMKM Lokal, Kunci Kemajuan Desa Ngadirejo
            </h1>

            <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
                Dari tangan-tangan kreatif warga Ngadirejo lahir produk berkualitas
                tinggi yang mencerminkan budaya dan kearifan lokal. Dukung UMKM kami
                untuk membangun ekonomi desa yang mandiri dan berkelanjutan.
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                    <div class="px-4 py-2">
                        <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">
                            NIKE AIR
                        </h1>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                            quos quidem sequi illum facere recusandae voluptatibus
                        </p>
                    </div>

                    <img class="object-cover w-full h-48 mt-2"
                        src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=320&q=80"
                        alt="NIKE AIR" />

                    <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                        <h1 class="text-lg font-bold text-white">$129</h1>
                        <button
                            class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">
                            Add to cart
                        </button>
                    </div>
                </div>
                <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                    <div class="px-4 py-2">
                        <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">
                            NIKE AIR
                        </h1>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                            quos quidem sequi illum facere recusandae voluptatibus
                        </p>
                    </div>

                    <img class="object-cover w-full h-48 mt-2"
                        src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=320&q=80"
                        alt="NIKE AIR" />

                    <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                        <h1 class="text-lg font-bold text-white">$129</h1>
                        <button
                            class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PERTANIAN -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    From the blog
                </h1>

                <p class="max-w-lg mx-auto mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                    veritatis sint autem nesciunt, laudantium quia tempore delect
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2">
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="https://images.unsplash.com/photo-1644018335954-ab54c83e007f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="" />

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#"
                            class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            All the features you want to know
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                            veritatis sint autem nesciunt, laudantium quia tempore delect
                        </p>

                        <p class="mt-3 text-sm text-blue-500">21 October 2019</p>
                    </div>
                </div>

                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="" />

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#"
                            class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            How to use sticky note for problem solving
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                            veritatis sint autem nesciunt, laudantium quia tempore delect
                        </p>

                        <p class="mt-3 text-sm text-blue-500">20 October 2019</p>
                    </div>
                </div>
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="" />

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#"
                            class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            How to use sticky note for problem solving
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                            veritatis sint autem nesciunt, laudantium quia tempore delect
                        </p>

                        <p class="mt-3 text-sm text-blue-500">20 October 2019</p>
                    </div>
                </div>
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="" />

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#"
                            class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            How to use sticky note for problem solving
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                            veritatis sint autem nesciunt, laudantium quia tempore delect
                        </p>

                        <p class="mt-3 text-sm text-blue-500">20 October 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
