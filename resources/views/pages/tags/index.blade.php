<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>all tags</h1>
    @foreach ($tags as $tag)
        <a href="{{route('tags.show',$tag->id)}}">{{$tag->name}}</a><br>
        @foreach ($tag->posts as $post)
            {{$post->name}}
        @endforeach<br>
    @endforeach
    <h1>add a tag</h1>
    <form action="{{route('tags.store')}}" method="post">
        @csrf
        @method('POST')
        <label for="">add tag name</label>
        <input type="text" name="tag" placeholder="add tag">
        <button type="submit">add</button>
    </form>

</body>
</html>