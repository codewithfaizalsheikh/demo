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
                <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
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
                            <a class="nav-link" href="{{ route('add.task') }}"> Add Task</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('registration') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container"><h1 style="text-align: center">Login</h1></div>

    <div class="container m-md-5 col-xl-5 ">
        @if(Session::has('fail'))
            <div class='alert alert-danger'>{{Session::get('fail')}}</div>
            @endif
        <form method="POST" action="{{route('login.store')}}" class="form-control col-xl-5">
            @csrf
            <div class="mb-3 col-xl-12" >
                <label class="form-label"><b>Email address</b></label>
                <input type="email" class="form-control" id="Email1" name="email">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>

            </div>
            <div class="mb-3 col-xl-12">
                <label class="form-label"><b>Password</b></label>
                <input type="password" class="form-control" id="Password1" name="password">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    </div>
