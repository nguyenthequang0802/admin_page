<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>STT</th>
            <th>Ten Sach</th>
            <th>Tac gia</th>
            <th>Loai Sach</th>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$loop->index}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->type->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
