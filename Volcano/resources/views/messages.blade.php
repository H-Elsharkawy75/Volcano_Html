@extends('dashboardlayout.app')

@section('content')
    <h1>messages</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                {{-- @dd($message->image) --}}
                <tr>
                    <td>{{ $message->firstname }}</td>
                    <td>{{ $message->lastname }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->phone }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->message }}</td>

                    <td>
                        <form action="{{ route('messages.destroy', $message) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
