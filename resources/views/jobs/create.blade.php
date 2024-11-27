<x-layout>
    {{-- dynamic title --}}
    <x-slot name='title'>Create Jobs</x-slot>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <div>
            <label for="title">Job Title:</label>
            <input type="text" id="title" name="name" required>
        </div>
        <div>
            <label for="description">Job Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <div>
            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" required>
        </div>
        <div>
            <label for="type">Job Type:</label>
            <select id="type" name="type" required>
                <option value="full-time">Full-time</option>
                <option value="part-time">Part-time</option>
                <option value="contract">Contract</option>
            </select>
        </div>
        <div>
            <button type="submit">Create Job</button>
        </div>
    </form>
</x-layout>
