@extends('adminlayouts.app')
@vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

@section('content')
    <section class="center">
        <div class="form">
        <form action="{{ route('users.update') }}" method="post">
            @csrf
   <input size="43" type="hidden" name="id" value="{{ $users->id }}">

            @method('put')
            <h1>Edit User</h1>
            <label for="">Name</label><br>
            <input size="43" type="text" name="name" id="name" value="{{ $users->name }}"><br><br>
            <label for="">email</label><br>
            <input size="43" type="email" name="email" id="email" value="{{ $users->email }}"><br><br>
            <label for="">password</label><br>
            <input size="43" type="text" name="password" id="password" value="{{ $users->password }}"><br><br>
            <label for="">Role</label><br>
            <input size="43" type="text" name="role" id="role" value="{{ $users->role }}"><br><br>
            <input class="button" type="submit" value="Add user">
        </form>
    </div>
    </section>

@endsection
