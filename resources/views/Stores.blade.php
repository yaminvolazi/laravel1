<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CITYSHOP Stores</title>
</head>
<body>
    <h1>CITYSHOP / Stores</h1>
    @foreach($stores as $store)
        <h3>{{$store->name}}</h3>
        <hr>
    @endforeach
    
</body>
</html>