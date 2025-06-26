<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Task</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Task</h1>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border rounded p-2 @error('title') border-red-500 @enderror" value="{{ old('title', $task->title) }}">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium">Description</label>
                <textarea name="description" id="description" class="mt-1 block w-full border rounded p-2 @error('description') border-red-500 @enderror">{{ old('description', $task->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="is_completed" class="block text-sm font-medium">Completed</label>
                <input type="checkbox" name="is_completed" id="is_completed" value="1" class="mt-1" {{ old('is_completed', $task->is_completed) ? 'checked' : '' }}>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Task</button>
        </form>
    </div>
</body>
</html>