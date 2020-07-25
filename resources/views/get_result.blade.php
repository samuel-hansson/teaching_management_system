<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
你好!<br/>
@foreach ($users as $user)
    <p>This is user {{ $user->name }}</p>
@endforeach
</body>
</html>
