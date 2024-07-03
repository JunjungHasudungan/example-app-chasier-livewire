<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <x-action-message
                    class="me-3 mb-2 p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-400 dark:text-green-400"
                    role="alert"
                    on="product-deleted">
                    <span class="font-medium">Produk berhasil dihapus..</span>
                </x-action-message>

                <x-action-message
                    class="me-3 mb-2 p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-400 dark:text-green-400"
                    role="alert"
                    on="product-updated">
                    <span class="font-medium">Produk berhasil diupdate..</span>
                </x-action-message>
                <div class="flex space-x-3 w-full">
                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <a href="{{ route('admin-product-create') }}" wire:navigate >
                            TAMBAH PRODUK
                        </a>
                    </button>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                 </th>
                                <th scope="col" class="px-6 py-3">
                                   Nama
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Jumlah
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Keterangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        @php
                            function shortenString($string, $length) {
                               if (strlen($string) > $length) {
                                return substr($string, 0, $length) . '...';
                               } else {
                                return $string;
                               }
                            }
                        @endphp
                        <tbody>
                            @forelse ($listProduct as $product)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->price }}
                                    </td>
                                    <td class="px-2 py-4">
                                        {{ $product->amount }}
                                    </td>
                                    <td class="px-1 py-4">
                                        {{ $product->category }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{-- <span data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button" class="ms-3 mb-2 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">  {{ shortenString($product->description, 20) }} </span> --}}
                                          {{--  {{ shortenString($product->description, 20) }} --}}
                                          <span data-tooltip-target="tooltip-right-{{$product->name}}" data-tooltip-placement="bottom"
                                                class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">
                                              {{ shortenString($product->description, 20) }}
                                          </span>
                                          <div id="tooltip-right-{{$product->name}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            {{ $product->description }}
                                              <div class="tooltip-arrow" data-popper-arrow></div>
                                          </div>
                                        {{-- {{ shortenString($product->description, 20) }} --}}
                                        {{-- {{ $product->description }} --}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('admin-product-edit', $product->id) }}"
                                            wire:navigate
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Edit
                                        </a>
                                        <a  wire:click="deleteProduct( {{ $product->id }} )"
                                            wire:confirm="Are you sure to delete this chirp?"
                                            class="font-medium  text-yellow-600 dark:text-yellow-500 hover:underline">
                                        Delete
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <div class="p-2 mb-1 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                                    <span class="font-medium">Data Produk Belum ada..</span>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-2">
                    {{ $listProduct->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
