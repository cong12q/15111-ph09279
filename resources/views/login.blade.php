<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<!-- Header sẽ dùng chung bên list -->
<header><h1 class="header">Header Login</h1></header>
    <form action="{{ route('post-login') }}" method="POST">
    @csrf
        <input type="text" name="username" placeholder="usename" id="">
        <input type="password" name="password" placeholder="password" id="">
        <button type="submit">Đăng Nhập</button>
    </form>
    <footer>Footer login</footer>
</body>
</html>