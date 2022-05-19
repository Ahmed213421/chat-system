<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><h1><a href="{{route('category.create')}}">create category</a></h1></button>
    <h1>all categories</h1>
    @foreach ($categories as $category)
        <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a> 
        <form action="{{route('category.destroy',$category->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>    
        </form>
    @endforeach
</body>
</html>