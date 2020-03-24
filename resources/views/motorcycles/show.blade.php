{{-- @dd($motorcycle); --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Produttore: {{$motorcycle->producer}}</li>
        <li>Modello: {{$motorcycle->model}}</li>
        <li>Prezzo: {{$motorcycle->price}}</li>
        <li>Anno: {{$motorcycle->year}}</li>
        <li>Colore: {{$motorcycle->color}}</li>
        <li>Descrizione: {{$motorcycle->description}}</li>
    </ul>    
</body>
</html>