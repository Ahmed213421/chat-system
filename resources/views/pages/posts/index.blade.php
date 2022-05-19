<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="{{route('posts.create')}}">createt post</a></button>
    <h1>all posts</h1>
  

    <table style="width:50%" border="2px">
        <tr>
          <th>post number</th>
          <th>post name</th>
          <th>category name</th>
          <th>tags</th>
          <th>operations</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><a href="{{route('posts.show',$post->id)}}">{{$post->name}}</a></td>
                <td>{{$post->category->name}}</td>
                <td>@foreach ($post->tags as $item)
                        {{$item->name}}
                    @endforeach
                </td>
                <td><form action="{{route('posts.destroy',$post->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>
</body>
</html>