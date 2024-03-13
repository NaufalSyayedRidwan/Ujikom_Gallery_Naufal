<!DOCTYPE HTML>
<html>

<head>
    <title>register</title>
    <link href="{{ 'assets/css/style.css' }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background: lightgray">
    <div class="section">
        <h1>Daftar</h1>
        <form id="register-form" action="/register" method="post">
            @csrf
            <label>Username</label><br>
            <input type="text" id="name" name="name" placeholder="username" required><br>
            <label>Email</label><br>
            
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <label>Password</label><br>

            <input type="password" id="password" name="password" placeholder="password" required><br>
            <button href="/register" type="submit">Sign up</button>
        </form>
        <p>Sudah punya akun? <a href="login">Masuk disini</a></p>
    </div>
    {{-- <script>
        function register() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
        alert('name')
        }
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>


</html>
