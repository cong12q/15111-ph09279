<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('post-login') }}" method="POST">
    @csrf
        <input type="text" name="username" placeholder="usename" id="">
        <input type="password" name="password" placeholder="password" id="">
        <button type="submit">Đăng Nhập</button>
    </form>
</body>
</html>