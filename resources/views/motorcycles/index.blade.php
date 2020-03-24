<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <button action=""><a href="{{Route('motorcycles.create')}}">Vai al form</a></button>
 @foreach ($motorcycles as $motorcycle)
 <ul>
     <li>{{$motorcycle->producer}}</li>
     <li>{{$motorcycle->model}}</li>
     <li>{{$motorcycle->price}}</li>
     <li>{{$motorcycle->year}}</li>
     <li>{{$motorcycle->color}}</li>
     <li>{{$motorcycle->description}}</li>
     <form action="{{Route('motorcycles.destroy', $motorcycle)}}" method="POST">
        @csrf
        @method('DELETE');
        <button type="submit">DELETE</button>
    </form>   
 </ul>    
 @endforeach 
</body>
</html>