<!DOCTYPE HTML>
<html>

<head>
    <link href="{{ 'assets/css/style.css' }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<title>{{ $title }}</title>

<body style="background: lightgray">
    <div class="section">
        <div class="form">
            <h1>LOGIN</h1>
            <form id="login-form" action="{{ route('proseslogin') }}" method="post">
                @csrf
                <label>Username</label><br>
                <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror"
                    placeholder="Email" required autofocus value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback" style="color: #ff0000;">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="password" required><br>
                <button type="submit">Log in</button>
            </form>
            <p>Belum punya akun? <a href="register">Daftar disini</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

</body>

</html>
