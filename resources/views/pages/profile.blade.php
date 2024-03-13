<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Profile</title>
    <style>
        .profile {
            width: 100px;
        }

        .profile {
            text-align: center
        }
    </style>
</head>

<body style="background: lightgray">
    @include('component.navbar')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="profile">
                <h1><a>@</a>{{ auth()->user()->name }}</h1>
                <h1>{{ auth()->user()->email }}</h1>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger">logout</button>
                </form>
            </div>


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
