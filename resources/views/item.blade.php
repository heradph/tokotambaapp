<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-header>{{ $title }}</x-header>
    <section class="py-8 bg-white md:py-16 antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="relative h-[350px] sm:h-[450px] group block overflow-hidden">
                    <img src="{{ $item->image1 }}" alt=""
                        class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0" />

                    <img src="{{ $item->image2 }}" alt=""
                        class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">
                        {{ $item->name }}
                    </h1>
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl ">
                            Rp{{ $item->price }}
                        </p>
                    </div>

                    <p class="mb-6 mt-6 text-gray-500">
                        {{ $item->description }}
                    </p>


                    <hr class="my-6 md:my-8 border-gray-200" />

                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <a href="#" title=""
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                            </svg>
                            Add to favorites
                        </a>

                        <form action="/add-to-cart" method="POST" class="mt-4 sm:mt-0">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                            <button type="submit"
                                class="text-white bg-[#32620e] hover:bg-[#498913] focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center">
                                <svg class="w-5 h-5 -ms-2 me-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </section>
</x-layout>
