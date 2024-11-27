<x-layout>
    <h1>
        Jobs Available
    </h1>
    <ul>
        @forelse ($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <p>No jobs available</p>
        @endforelse
    </ul>

</x-layout>
