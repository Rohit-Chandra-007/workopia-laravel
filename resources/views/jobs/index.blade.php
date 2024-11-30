<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">
            Jobs Available
        </h1>
        <ul class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($jobs as $job)
                <li class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="{{ route('jobs.show', $job->id) }}" class="block p-4 hover:bg-gray-50">
                        <h3 class="text-xl font-bold text-blue-500">{{ $job->title }}</h3>
                        <p class="text-gray-600 mt-2 line-clamp-2">{{ $job->description }}</p>
                    </a>
                </li>
            @empty
                <li class="col-span-full text-center py-8 text-gray-500">
                    No jobs available
                </li>
            @endforelse
        </ul>
    </div>
</x-layout>
