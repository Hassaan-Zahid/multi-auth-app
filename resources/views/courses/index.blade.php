@extends('layouts.admin.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-gray-800">Courses</h1>
            <a href="{{ route('courses.create') }}" class="btn btn-primary">Create Course</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                @if(count($courses) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>{{ $course->created_at->format('M d, Y H:i:s') }}</td>
                                    <td>
                                        <!-- Edit Link -->
                                        <a href="{{ route('courses.edit', $course->id) }}"
                                           class="btn btn-sm btn-primary">Edit</a>

                                        <!-- Delete Form -->
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this course?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        {{ $courses->links() }}
                    </div>
                @else
                    <p>No courses available.</p>
                @endif
            </div>
        </div>

    </div>
@endsection
