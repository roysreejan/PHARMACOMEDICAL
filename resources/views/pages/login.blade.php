<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container" style="width:500px;"> 
        <h2>Log in</h2> 
        <form action="{{route('login')}}" method="post">
            {{@csrf_field()}}
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group p-1">
                <span>
                    <input type="submit" name="submit" value="Login" class="btn btn-info">
                    Don't have an account? <a href="{{route('registration')}}">sign-up</a>
                </span>
            </div>
            <div class="form-group p-1">
                <span>
                    <a href="{{url('auth/facebook')}}" class="btn btn-primary" style="background-color: #3b5998; padding: 10px; width: 100%;" href="#!" role="button">
                    <i class="fab fa-facebook me-2"></i>Login With Facebook</a>
                </span>
            </div>
            <div class="form-group p-1">
                <span>
                    <a href="{{url('auth/google')}}" class="btn btn-danger" style="background-color: #d34836; padding: 10px; width: 100%;" href="#!" role="button">
                    <i class="fab fa-google-plus-g me-2"></i>Login With Google</a>
                </span>
            </div>
        </form>
        </div>
    </body>
</html>