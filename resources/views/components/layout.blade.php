<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Aulab_post_Caccamo</title>
</head>
<body>
    <x-navbar/>
     <div>
      {{$slot}}
    </div>
</body>
</html>