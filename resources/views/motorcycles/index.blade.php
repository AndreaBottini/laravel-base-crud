<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CATALOGO MOTO</h1>
    @if(!empty($id))
      <div>Hai cancellato il record {{$id}}</div>
    @endif
    @foreach ($motorcycles as $motorcycle)
    <button action=""><a href="{{Route('motorcycles.create')}}">INSERISCI NUOVA MOTO</a></button>
<div class="motorcycles">
    <div class="motorcycle">
        <ul>
            <li>{{$motorcycle->producer}}</li>
            <li>{{$motorcycle->model}}</li>
            <li>{{$motorcycle->price}}</li>
            <li>{{$motorcycle->year}}</li>
            <li>{{$motorcycle->color}}</li>
            <li>{{$motorcycle->description}}</li>
            <form action="{{Route('motorcycles.edit', $motorcycle->id)}}" method="GET">
                @csrf
                @method('GET')
                <button type="submit">MODIFICA LA MOTO</button>
            </form>
            <form action="{{Route('motorcycles.destroy', $motorcycle->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">CANCELLA LA MOTO</button>
            </form>          
        </ul>
    </div>
    @endforeach
</div>
</body>
</html>