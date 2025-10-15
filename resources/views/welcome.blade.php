<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>alert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @php
        $message = "This is a Custom Message";
    @endphp
    <div class="container mt-4">
        <x-alert class="p-5" type="success" message="{{ $message }}" />
        <x-alert type="warning" message="this is a waring message" />
        <x-alert type="danger" message="this is a danger message" />
    </div>
    <x-card>
        <x-slot:title>
            this is a title
        </x-slot:title>
        this is the content which injected in the slot area
        <x-slot:link>
            Click Me
        </x-slot:link>
    </x-card>
</body>

</html>
