<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
你好!<br/>
<table>
    <thead>
        <td>名字</td>
        <td>密码</td>
    </thead>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->password }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
