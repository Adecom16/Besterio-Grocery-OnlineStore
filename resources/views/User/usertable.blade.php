@extends('adminlayouts.app')

@section('content')
<div class="container">
    <section class="home">
        <h2>Users Page</h2>
        @if (count($users) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $sn = 1; @endphp
                @foreach ($users as $user)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <form action="{{ route('user.delete') }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ url('admin/user', $user->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No users available</p>
        @endif
    </section>
</div>
<style>
    /* Add your custom CSS here */
    .container {
        margin-top: 20px;
    }

    .home {
        margin-left: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 8px 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .btn {
        padding: 5px 10px;
        text-decoration: none;
        margin-right: 5px;
    }

    .btn-primary {
        background-color: #0072C6;
        color: white;
        border: none;
    }

    .btn-danger {
        background-color: #FF0000;
        color: white;
        border: none;
    }
</style>

@endsection
