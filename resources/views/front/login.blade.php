<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container"><!--leave comment-->

    <div class="card mt-5">
        <div class="card-header">
            <h2>Login</h2>
        </div>
        @if(Session::has('error'))
        <div class="container">
            <div class="col-md-8 mt-2">
                <div class="alert alert-success">
                    {{ Session::get('error') }}
                    @php
                        Session::forget('error');
                    @endphp
                </div>
            </div>
        </div>
        @endif
        <div class="card-body">
            <form class="form-horizontal contact-form" role="form" method="post" action="{{route('login')}}">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="email" name="login"
                            placeholder="login">
                            @if ($errors->has('login'))
                        <span class="text-danger">{{ $errors->first('login') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="col-md-8">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="password">
                            @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

</div><!--end leave comment-->
</body>
</html>
