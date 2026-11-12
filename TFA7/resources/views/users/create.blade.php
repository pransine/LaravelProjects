<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h1>Create User</h1>

    <a href="{{ route('users') }}">Back to User Accounts</a>

    <h2>User Information</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <p>
            <label>Username:</label><br>
            <input type="text" name="username" value="{{ old('username') }}">
            @error('username')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="{{ old('full_name') }}">
            @error('full_name')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Save User</button>
    </form>

</body>
</html>