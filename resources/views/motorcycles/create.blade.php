<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{Route('motorcycles.store')}}" method="post">
    @csrf
    
    <input type="text" name="producer" value="" placeholder="producer">
    <input type="text" name="model" value="" placeholder="model">
    <input type="text" name="price" value="" placeholder="price">
    <input type="text" name="year" value="" placeholder="year">
    <input type="text" name="color" value="" placeholder="color">
    <input type="text" name="description" value="" placeholder="description">
    <button type="submit">Salva</button>
    @method('POST')


</form>

</body>
</html>