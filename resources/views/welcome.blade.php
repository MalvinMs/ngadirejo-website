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
        <div class="container px-12 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                💼 UMKM Lokal, Kunci Kemajuan Desa Ngadirejo
            </h1>

            <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
                Dari tangan-tangan kreatif warga Ngadirejo lahir produk berkualitas
                tinggi yang mencerminkan budaya dan kearifan lokal. Dukung UMKM kami
                untuk membangun ekonomi desa yang mandiri dan berkelanjutan.
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($umkm as $u)
                    <div class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <img class="object-cover object-center w-full h-56" src="{{ asset('storage/' . $u->foto) }}"
                            alt="avatar">
                        <div class="px-6 py-4">
                            <h1 class="text-xl font-semibold text-gray-800 dark:text-white"> {{ $u->nama }}</h1>

                            <p class="py-2 text-gray-700 dark:text-gray-400"> {{ $u->deskripsi }}</p>

                            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                <svg aria-label="suitcase icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 11H10V13H14V11Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 5V4C7 2.89545 7.89539 2 9 2H15C16.1046 2 17 2.89545 17 4V5H20C21.6569 5 23 6.34314 23 8V18C23 19.6569 21.6569 21 20 21H4C2.34314 21 1 19.6569 1 18V8C1 6.34314 2.34314 5 4 5H7ZM9 4H15V5H9V4ZM4 7C3.44775 7 3 7.44769 3 8V14H21V8C21 7.44769 20.5522 7 20 7H4ZM3 18V16H21V18C21 18.5523 20.5522 19 20 19H4C3.44775 19 3 18.5523 3 18Z" />
                                </svg>

                                <h1 class="px-2 text-sm"> {{ $u->jenis }}</h1>
                            </div>

                            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                <svg aria-label="location pin icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>

                                <h1 class="px-2 text-sm"> {{ $u->alamat }}</h1>
                            </div>

                            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                <svg aria-label="email icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" />
                                </svg>

                                <h1 class="px-2 text-sm"> {{ $u->telp }}</h1>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- PERTANIAN -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-12 ">
            <h2 class="text-lg font-medium text-gray-800 dark:text-white">Customers</h2>

            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">These companies have purchased in the last 12
                months.
            </p>

            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Jenis Tanaman
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Jumlah Petani
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    <!-- Data Tabel -->
                                    @foreach ($pertanian as $d)
                                        <tr>
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-white whitespace-nowrap">
                                                {{ $d->nama }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400 whitespace-nowrap">
                                                {{ $d->total }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
