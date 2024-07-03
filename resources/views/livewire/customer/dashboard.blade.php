<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- start coluoms --}}
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    {{-- start column products --}}
                    <div class="border rounded-md px-2 py-2">
                        <div class="flex items-center mb-5">
                            <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                {{ $amountProduct }}
                            </p>
                            <p class="ms-2 font-semibold text-gray-600">Produk</p>
                            <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">376 reviews</p>
                            <a
                                wire:navigate
                                href="{{ route('admin-product') }}"
                                class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                                Read all reviews
                            </a>
                        </div>
                        <div class="gap-8 sm:grid sm:grid-cols-1">
                            @php
                                $listCategory = \App\Helpers\ListCategory::ListCategories;
                            @endphp
                            <div>
                                @forelse ($listCategory as $key => $category)
                                    <dl>
                                        @php
                                            $countProductByCategory = \App\Models\Product::where('category', $key)->count();
                                            $amountProductByCategory = $countProductByCategory ?? 0;
                                        @endphp
                                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $category }} </dt>
                                        <dd class="flex items-center mb-3">
                                            <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                                <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: {{$amountProductByCategory }}%"> </div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400"> {{ $amountProductByCategory  }}% </span>
                                        </dd>
                                    </dl>
                                @empty
                                    <p>No users</p>
                                @endforelse
                                {{-- <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400"> {{ __('Comfort') }} </dt>
                                    <dd class="flex items-center mb-3">
                                        <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                            <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Comfort</dt>
                                    <dd class="flex items-center mb-3">
                                        <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                            <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Free WiFi</dt>
                                    <dd class="flex items-center mb-3">
                                        <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                            <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Facilities</dt>
                                    <dd class="flex items-center">
                                        <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                            <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 54%"></div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5.4</span>
                                    </dd>
                                </dl> --}}
                            </div>
                        </div>
                    </div>
                    {{-- end column products --}}

                    {{-- start column order --}}

                    {{-- end columns order --}}
                    <div class="border rounded-md px-2 py-2">
                        <div class="flex items-center mb-5">
                            <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded dark:bg-blue-200 dark:text-blue-800">8.7</p>
                            <p class="ms-2 font-semibold text-gray-600">Order</p>
                            <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">376 reviews</p>
                            <a href="#" class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read all reviews</a>
                        </div>
                        <div class="gap-8 sm:grid sm:grid-cols-1">
                            <div>
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Staff</dt>
                                    <dd class="flex items-center mb-3">
                                        <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                            <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Comfort</dt>
                                    <dd class="flex items-center mb-3">
                                        <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                            <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Free WiFi</dt>
                                    <dd class="flex items-center mb-3">
                                        <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                            <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Facilities</dt>
                                    <dd class="flex items-center">
                                        <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                            <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 54%"></div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5.4</span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end columns --}}
            </div>
        </div>
    </div>
</div>
