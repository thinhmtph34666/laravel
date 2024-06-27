<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang giới thiệu Sinh Viên</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>MSV</th>
                <th>NAME</th>
                <th>BIRTHDAY</th>
                <th>PHONE</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sinhvien as $item)
            <tr>
                <td> {{$item['id']}} </td>
                <td> {{$item['msv']}} </td>
                <td> {{$item['name']}} </td>
                <td> {{$item['birthday']}} </td>
                <td> {{$item['phone']}} </td>
                <td> {{$item['email']}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
