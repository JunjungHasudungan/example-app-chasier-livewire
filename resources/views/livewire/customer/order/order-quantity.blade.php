<div>
    <div class="h-auto max-w-full p-6 bg-white border border-gray-300 rounded-lg shadow">
        <div class="mb-5">
            <h5 class="text-xl font-normal tracking-tight text-gray-800">
                {{ __('Atur Jumlah') }}
            </h5>
        </div>
        <div class="mb-5">
            <div class="flex">
                <div class="flex me-6 border gap-6 border-gray-500 rounded-md px-6">
                    <button wire:click="btnSubtractOrderItem">
                        <span class="font-normal text-lg"> - </span>
                    </button>
                    {{ $amountOrder }}
                    <button wire:click="btnAddOrderItem" @if($disableAddButton) disabled @endif > + </button>
                </div>
                <div class="flex gap-5">
                    <h5 class="font-normal">Stok Produk: </h5>
                    <h1 class="font-semibold"> {{ $product->amount }} </h1>
                </div>
            </div>
        </div>

        <div class="mb-5">
            {{-- <livewire:customer.order.order-quantity /> --}}
            <div class="flex justify-between">
                <h5 class="font-normal text-gray-400">Sub Total </h5>
                <h1 class="font-semibold px-2"> Rp.{{ $subTotal }} </h1>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button wire:click="orderProduct"
                    type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                </svg>
                Order now
                </button>
                <x-action-message class="me-3" on="success-ordered">
                    {{ __('Berhasil dipesan..') }}
                </x-action-message>
        </div>
    </div>
</div>
