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
                            <a class="nav-link active" aria-current="page" href="">Dashboard</a>
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
                            <a class="nav-link" href="#">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>




    @if(Session::has('pass'))
    <div class='alert alert-success'>{{Session::get('pass')}}</div>
    @endif

    @if(Session::has('fail'))
            <div class='alert alert-danger'>{{Session::get('fail')}}</div>
            @endif


<div class="container m-md-5">
    <form class="row g-3" method="POST" action="{{route('update.registration',$registrations->id)}}">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname', isset($registrations) ? $registrations->fname : '')}}">
            <span class="text-danger">@error('fname'){{$message}}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="{{ old('lname', isset($registrations) ? $registrations->lname : '')}}">
            <span class="text-danger">@error('lname'){{$message}}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="email" value="{{ old('email', isset($registrations) ? $registrations->email : '')}}">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="Address" placeholder="" name="address" value="{{ old('address', isset($registrations) ? $registrations->address : '')}}">
            <span class="text-danger">@error('address'){{$message}}@enderror</span>
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="City" name="city" value="{{ old('city', isset($registrations) ? $registrations->city : '')}}">
            <span class="text-danger">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="State" class="form-select" name="state" value="{{ old('state', isset($registrations) ? $registrations->state : '')}}">
                <option selected>{{ old('state', isset($registrations) ? $registrations->state : '')}}</option>
                <option>Madhya pradesh</option>
                <option>Rajesthan</option>
                <option>Uttar pradesh</option>
                <option>Maharashtra</option>
                <option>kerela</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="Zip" name="zip" value="{{ old('zip', isset($registrations) ? $registrations->zip : '')}}">
            <span class="text-danger">@error('zip'){{$message}}@enderror</span>
        </div>
        <div class="col-12">

        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
        </div>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>
