<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
        <!-- Navigation (if any) -->
        <nav>
            <ul>
                <li><a href="{{ route('tasks.index') }}">Task List</a></li>
                <li><a href="{{ route('tasks.create') }}">Create Task</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
