<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>投稿一覧</h1>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>content</th>
            <th>createdate</th>
            <th>updatedate</th>
        </tr>
        @foreach($posts as $post)
           <tr>
               <td>{{ $post->id }}</td>
               <td>{{ $post->title }}</td>
               <td>{{ $post->content }}</td>
               <td>{{ $post->created_at }}</td>
               <td>{{ $post->updated_at }}</td>
           </tr>            
       @endforeach  
    </table>
</body>
</html>