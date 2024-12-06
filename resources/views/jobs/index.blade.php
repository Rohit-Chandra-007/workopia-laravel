<x-layout>
    <div class=" grid grid-cols-1 md:grid-cols-3 gap-4 m-4">
        @forelse($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No jobs found</p>
        @endforelse
    </div>
</x-layout>
