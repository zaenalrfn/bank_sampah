<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title['title'] ?? '' }} | AiTrash</title>
    @vite(['resources/js/app.js'])
    <style>
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <x-aside></x-aside>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
