<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Inserisci i dati della moto</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
        </ul> 
    </div>
@endif
<form action="{{Route('motorcycles.store')}}" method="post">
    @csrf
    <div>
        <input type="text" name="producer" value="" placeholder="producer">
    </div>
    <div>
        <input type="text" name="model" value="" placeholder="model">
    </div>
    <div>
        <input type="text" name="price" value="" placeholder="price">
    </div>
    <div>
        <input type="text" name="year" value="" placeholder="year">
    </div>
    <div>   
        <input type="text" name="color" value="" placeholder="color">
    </div>
    <div>
        <input type="text" name="description" value="" placeholder="description">
    </div>
    <div>
        <button type="submit">Salva</button>
    </div>
    

    @method('POST')


</form>

</body>
</html>