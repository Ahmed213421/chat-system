<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create post</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        @method('POST')

        <input type="text" placeholder="enter name" name="name">
        <input type="hidden"  name="user_id">
        <select name="category_id" id="">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>                
            @endforeach
        </select>
        <label for="">add tags</label>
        <select name="tag_id[]" id="" multiple>
            @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
            
        <button type="submit">add</button>
    </form>
</body>
</html>