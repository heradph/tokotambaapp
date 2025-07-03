<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-header>{{ $title }}</x-header>
    <section class="bg-white py-8 antialiased md:py-8">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-6">
                        @if (session('cart') && count(session('cart')) > 0)
                            @foreach (session('cart') as $cartItem)
                                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm mb-4">
                                    <div
                                        class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                        <a href="#" class="shrink-0 md:order-1">
                                            <img class="h-20 w-20 object-cover" src="{{ asset($cartItem['image1']) }}"
                                                alt="{{ $cartItem['name'] }}" />
                                        </a>

                                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                                            <div class="flex items-center">
                                                {{-- Button "-" --}}
                                                <form method="POST"
                                                    action="{{ route('cart.update', ['id' => $cartItem['id'], 'action' => 'decrement']) }}">
                                                    @csrf
                                                    <button type="submit" data-input-counter-decrement="counter-input"
                                                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                                        <svg class="h-2.5 w-2.5 text-gray-900" viewBox="0 0 18 2">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-width="2" d="M1 1h16" />
                                                        </svg>
                                                    </button>
                                                </form>

                                                {{-- Quantity Display --}}
                                                <input type="text" readonly value="{{ $cartItem['quantity'] }}"
                                                    class="w-10 text-center text-sm font-medium text-gray-900 bg-transparent border-0" />

                                                {{-- Button "+" --}}
                                                <form method="POST"
                                                    action="{{ route('cart.update', ['id' => $cartItem['id'], 'action' => 'increment']) }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                                        <svg class="h-2.5 w-2.5 text-gray-900" viewBox="0 0 18 18">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="text-end md:order-4 md:w-32">
                                                <p class="text-base font-bold text-gray-900">Rp {{ $cartItem['price'] }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                            <a href="{{ url('/' . $cartItem['slug']) }}"
                                                class="text-base font-medium text-gray-900 hover:underline">
                                                {{ $cartItem['name'] }}
                                            </a>

                                            <div class="flex items-center gap-4">
                                                <button type="button"
                                                    class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline">
                                                    ❤️ Add to Favorites
                                                </button>
                                                

                                                <form method="POST"
                                                    action="{{ route('cart.remove', $cartItem['id']) }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                                                        🗑️ Remove
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-gray-600">Keranjangmu kosong.</p>
                        @endif

                    </div>
                    <div class="hidden xl:mt-8 xl:block">
                        <h3 class="text-2xl font-semibold text-gray-900">People also bought</h3>
                        <div class="mt-6 grid grid-cols-3 gap-4 sm:mt-8">
                            @foreach ($items as $item)
                                <div
                                    class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                                    <a href="/{{ $item->slug }}" class="overflow-hidden rounded">
                                        <img class="mx-auto h-44 w-44 " src="{{ $item->image1 }}" alt="imac image" />
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline">{{ $item->name }}</a>
                                        <p class="mt-2 text-base font-normal text-gray-500">{{ $item->description }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-lg font-bold leading-tight text-gray-900">Rp{{ $item->price }}
                                        </p>
                                    </div>
                                    <div class="mt-6 flex items-center gap-2.5">
                                        <button data-tooltip-target="favourites-tooltip-1" type="button"
                                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 ">
                                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z"></path>
                                            </svg>
                                        </button>
                                        <div id="favourites-tooltip-1" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-30">
                                            Add to favourites
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <button type="button"
                                            class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                                            <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                            </svg>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                @php
                    $cart = session('cart', []);
                    $subtotal = collect($cart)->reduce(function ($sum, $item) {
                        $price = (int) str_replace('.', '', $item['price']);
                        return $sum + $price * $item['quantity'];
                    }, 0);

                    $formattedSubtotal = number_format($subtotal, 0, ',', '.');
                    $tax = 0; // Atur pajak kalau ada
                    $pickup = 0; // Atur biaya pickup kalau perlu
                    $total = $subtotal + $tax + $pickup;
                @endphp

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
                        <p class="text-xl font-semibold text-gray-900">Ringkasan Pesanan</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500">Subtotal</dt>
                                    <dd class="text-base font-medium text-gray-900">Rp {{ $formattedSubtotal }}</dd>
                                </dl>

                                {{-- Biaya Lain (Opsional) --}}
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500">Biaya Pickup</dt>
                                    <dd class="text-base font-medium text-gray-900">Rp
                                        {{ number_format($pickup, 0, ',', '.') }}</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500">Pajak</dt>
                                    <dd class="text-base font-medium text-gray-900">Rp
                                        {{ number_format($tax, 0, ',', '.') }}</dd>
                                </dl>
                            </div>

                            <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                                <dt class="text-base font-bold text-gray-900">Total</dt>
                                <dd class="text-base font-bold text-gray-900">Rp
                                    {{ number_format($total, 0, ',', '.') }}</dd>
                            </dl>
                        </div>

                        <a href="#"
                            class="flex w-full items-center justify-center rounded-lg bg-[#32620e] px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                            Lanjut ke Checkout
                        </a>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500">atau</span>
                            <a href="/"
                                class="inline-flex items-center gap-2 text-sm font-medium text-[#32620e] underline hover:no-underline">
                                Lanjut Belanja
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>
