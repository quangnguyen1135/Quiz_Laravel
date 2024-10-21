@extends('layout.master')

@section('content')
    <h1>Course List</h1>

    <a href="{{ route('courses.create') }}">Add New Course</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($courses as $course)
            <li>
                {{ $course->title }}
                <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
