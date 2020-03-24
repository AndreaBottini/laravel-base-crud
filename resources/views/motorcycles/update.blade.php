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
<form action="{{(!empty($motorcycle)) ? Route('motorcycles.update', $motorcycle->id) : Route('motorcycles.store')}}" method="post">
    @csrf
    @if (!empty($motorcycle))
        @method('PATCH') 
        @else
        @method('POST')    
    @endif
    <div>
    <input type="text" name="producer" value="{{(!empty($motorcycle)) ? $motorcycle->producer : ''}}" placeholder="producer">
    </div>
    <div>
        <input type="text" name="model" value="{{(!empty($motorcycle)) ? $motorcycle->model : ''}}" placeholder="model">
    </div>
    <div>
        <input type="text" name="price" value="{{(!empty($motorcycle)) ? $motorcycle->price : ''}}" placeholder="price">
    </div>
    <div>
        <input type="text" name="year" value="{{(!empty($motorcycle)) ? $motorcycle->year : ''}}" placeholder="year">
    </div>
    <div>   
        <input type="text" name="color" value="{{(!empty($motorcycle)) ? $motorcycle->color : ''}}" placeholder="color">
    </div>
    <div>
        <input type="text" name="description" value="{{(!empty($motorcycle)) ? $motorcycle->description : ''}}" placeholder="description">
    </div>

    <div>
        @if (!empty($motorcycle))
        <input type="hidden" name="id" value="{{$motorcycle->id}}">
        <input type="submit" value="Invia">    
        @endif
    </div>
   
   


</form>

</body>
</html>