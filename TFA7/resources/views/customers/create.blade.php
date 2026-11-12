<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h1>Create Customer</h1>

    <a href="{{ route('customers') }}">Back to Customer Accounts</a>

    <h2>Customer Information</h2>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="{{ old('full_name') }}">
            @error('full_name')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Phone Number:</label><br>
            <input type="text" name="phone" value="{{ old('phone') }}" required>
        </p>

        <button type="submit">Save Customer</button>
    </form>

</body>
</html>
