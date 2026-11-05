<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Task</title>
</head>
<body>
    <h2>Create New Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title"
               value="{{ old('title') }}"
               placeholder="Enter task title">
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br>
        <button type="submit">Save Task</button>
    </form>
    <p><a href="{{ route('tasks.index') }}">
        Back to Task List
    </a></p>
</body>
</html>