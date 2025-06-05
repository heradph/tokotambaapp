<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-header>{{ $title }}</x-header>
    <ul class="mt-18 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($items as $item)
            <li>
                <a href="/{{ $item->slug }}" class="group block overflow-hidden">
                    <div class="relative h-[350px] sm:h-[450px]">
                        <img src="{{ $item->image1 }}" alt=""
                            class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0" />

                        <img src="{{ $item->image2 }}" alt=""
                            class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100" />
                    </div>

                    <div class="relative bg-white pt-3">
                        <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                            {{ $item->name }}
                        </h3>

                        <p class="mt-1.5 tracking-wide text-gray-900">Rp{{ $item->price }}</p>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
    {{ $items->links() }}
</x-layout>
