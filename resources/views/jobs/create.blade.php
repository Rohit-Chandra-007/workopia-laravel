<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Create New Job</h1>
        <form action="{{ route('jobs.store') }}" method="POST" class="space-y-6 bg-white rounded-lg shadow-md p-6">
            @csrf
            <div class="space-y-2">
                <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title"
                    placeholder="Enter job title" 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ old('title') }}"
                >
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Job Description</label>
                <textarea 
                    name="description" 
                    id="description"
                    rows="4"
                    placeholder="Enter job description" 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button 
                type="submit"
                class="w-full bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-200"
            >
                Create Job
            </button>
        </form>
    </div>
</x-layout>
