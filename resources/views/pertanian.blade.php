<x-app-layout title="Pertanian">

    <section class="container bg-white dark:bg-gray-900 mx-auto">
        <div class="container bg-white dark:bg-gray-900 px-8 py-16 mx-auto">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Best place to choose
                            <br> your <span class="text-blue-500 ">clothes</span>
                        </h1>

                        <p class="mt-3 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis
                            optio.
                        </p>

                        <button
                            class="w-full px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-600 rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop
                            Now</button>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                    <img class="w-full h-full lg:max-w-3xl" src="{{ asset('img/coffee farm-rafiki.png') }}"
                        alt="Catalogue-pana.svg">
                </div>
            </div>
        </div>
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
                                    @foreach ($data as $d)
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
