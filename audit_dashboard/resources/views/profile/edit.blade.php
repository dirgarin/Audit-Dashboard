@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile</h2>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control-file" id="avatar" name="avatar">
            @if ($user->avatar)
                <img src="{{ Storage::url($user->avatar) }}" alt="Avatar" class="img-thumbnail mt-2" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
