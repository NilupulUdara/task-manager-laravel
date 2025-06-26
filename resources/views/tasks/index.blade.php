@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Your Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Task</a>
    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-4 mt-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-6 grid grid-cols-1 gap-4">
        @forelse ($tasks as $task)
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-semibold">{{ $task->title }}</h2>
                <p class="text-gray-600">{{ $task->description }}</p>
                <p class="text-sm text-gray-500">Status: {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>
                <div class="mt-4 flex space-x-2">
                    <a href="{{ route('tasks.edit', $task) }}" class="text-green-500 hover:underline">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No tasks found.</p>
        @endforelse
    </div>
@endsection