<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    category {{$category->name}}

    <h1>posts</h1>
    
<table style="width:100%" border="2px">
    <tr>
      <th>#</th>
      <th>post name</th>
      <th>category name</th>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->category->name}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>