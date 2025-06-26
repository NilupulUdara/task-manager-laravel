@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <p>Welcome to your dashboard!</p>
    <a href="{{ route('tasks.index') }}" class="text-blue-500 hover:underline">Go to Tasks</a>
@endsection