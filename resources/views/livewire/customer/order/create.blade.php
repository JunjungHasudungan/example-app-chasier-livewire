<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- start columns --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    {{-- start column image --}}
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    {{-- end column image --}}

                    {{-- start column description --}}
                    <div>
                        <div class="h-auto max-w-full p-6 shadow">
                                <h5 class="mb-2 text-xl font-normal tracking-tight text-gray-800">
                                    {{ $product->name }}
                                </h5>

                                @if ( $product->orders()->sum('amount')  > 0)
                                    <h5 class="mb-2 text-sm font-normal tracking-tight text-gray-800">
                                        Terjual: {{ $product->orders()->sum('amount') }}
                                    </h5>
                                @endif

                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">
                                    Rp.{{ $product->price }}
                                </h5>

                            <p class="mb-5 font-light text-gray-700 dark:text-gray-400">
                               Min Pemesanan: 1 Buah
                            </p>
                            <p class="mb-3 font-normal text-gray-700">
                               {{ $product->description }}
                             </p>
                            <a
                                href="{{ route('customer-order-index') }}"
                                wire:navigate
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                               Kembali
                            </a>
                        </div>
                    </div>
                    {{-- end column description --}}

                    {{-- start card order-quantity --}}
                    <div>
                        <livewire:customer.order.order-quantity :product="$product" />
                    </div>
                    {{-- end card order-quantity --}}
                </div>

                {{-- end columns --}}
                {{-- start column --}}


                {{-- end column --}}
            </div>
        </div>
    </div>
</div>
