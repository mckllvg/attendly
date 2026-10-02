<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Upcoming Events
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-4">
                @forelse ($events as $event)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-lg font-bold">{{ $event->title }}</h3>
                        <p class="text-sm text-gray-500 mt-1">
                            {{ $event->starts_at->format('M d, Y - g:i A') }}
                            @if($event->location)
                                &middot; {{ $event->location }}
                            @endif
                        </p>
                        @if($event->description)
                            <p class="mt-3 text-gray-700">{{ $event->description }}</p>
                        @endif
                    </div>
                @empty
                    <p class="text-gray-500">No events yet. Check back soon.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>