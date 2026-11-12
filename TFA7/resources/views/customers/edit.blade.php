<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h1>Edit User</h1>

    <a href="{{ route('users') }}">Back to User Accounts</a>

    <h2>Update User Information</h2>

    <form action="{{ route('users.update', $user->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <p>
            <label>Username:</label><br>
            <input type="text" name="username"
                value="{{ old('username', $user->username) }}">

            @error('username')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name"
                value="{{ old('full_name', $user->full_name) }}">

            @error('full_name')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Current Profile Picture:</label><br>

            @if ($user->avatar)
                <img src="{{ asset('storage/' . $user->avatar) }}"
                     width="150"
                     height="150"
                     style="object-fit: cover; border-radius: 50%;">
            @else
                <p>No profile picture uploaded yet.</p>
            @endif
        </p>

        <p>
            <label>Upload New Profile Picture:</label><br>
            <input type="file" name="avatar" accept="image/*">

            @error('avatar')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror

            <br><small>Maximum file size: 2 MB.</small>
        </p>

        <button type="submit">Update User</button>

    </form>

</body>
</html>