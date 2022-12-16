<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('add.task') }}"> Add Task</a>
                        </li>
                        <a class="nav-link" href="{{ route('registration') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>



    <div class="container m-md-5">
        <form class="form-control" method="POST" action="{{ route('store.task') }}">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Add Task</label>
                <input type="text" class="form-control" id="" name="task" value="">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">ADD</button>



        </form>
    </div>

    <div class="container m-md-5">
        <form action="{{ route('store.task') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Task</label>
                <input type="text" class="form-control" id="" name="task">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>
