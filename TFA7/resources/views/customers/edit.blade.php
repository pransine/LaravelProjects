<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h1>Edit Customer</h1>

    <a href="{{ route('customers') }}">Back to Customer Accounts</a>

    <h2>Update Customer Information</h2>

    <form action="{{ route('customers.update', $customer->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name"
                value="{{ old('full_name', $customer->full_name) }}">

            @error('full_name')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email"
                value="{{ old('email', $customer->email) }}">

            @error('email')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Phone Number:</label><br>
            <input type="text" name="phone"
                value="{{ old('phone', $customer->phone) }}">

            @error('phone')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Update Customer</button>

    </form>

</body>
</html>