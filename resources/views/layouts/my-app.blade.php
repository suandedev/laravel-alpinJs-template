<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>My template Alpine</title>
</head>
<body>
    <section x-data="{open: false, dropDown: false}" class="bg-indigo-200 flex flex-col md:flex-row md:justify-between p-6">
        <x-header-logo/>
        <x-nav/>
    </section>

    {{$slot}}

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>