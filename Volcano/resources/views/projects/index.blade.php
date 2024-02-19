@extends('dashboardlayout.app')

@section('content')
    <h1>Projects</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('projects.create') }}" class="btn btn-primary">Create Project</a>
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Projects</h4>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>
                            @if ($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" width="50">
                            @else
                                No image uploaded
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="post"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    </table>
@endsection
