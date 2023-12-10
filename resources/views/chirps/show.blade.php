<!-- resources/views/chirps/show.blade.php -->

<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-semibold mb-4">Chirp Details</h2>
                <p class="text-lg">{{ $chirp->message }}</p>
                <div class="mt-4 text-sm text-gray-600">
                    <p>Posted by: {{ $chirp->user->name }}</p>
                    <p>Created at: {{ $chirp->created_at->format('j M Y, g:i a') }}</p>
                    @unless ($chirp->created_at->eq($chirp->updated_at))
                        <p>Edited</p>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
