<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{asset('AdminTemp')}}/dist/style.css">

</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.typekit.net/rjb4unc.js"></script>

    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
    <style type="text/css">
        .container {
            width: 450px;
        }
    </style>
    <div class="container">

        <div class="logo">
            <p style="color:white" width="90%" height="90%">Halaman Login
        </div>
        <div class="login-item">

            <form action="{{url('actionlogin')}}" method="post" class="form form-login">
                {{csrf_field()}}
                @if ($message = Session::get('warning'))
                <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <div class="form-field">

                    <label class="user" for="login-username"><span class="hidden">Username</span></label>
                    <input id="login-username" type="text" name="username" class="form-input" placeholder="Username" required>
                </div>

                <div class="form-field">
                    <label class="lock" for="login-password"><span class="hidden">Password</span></label>
                    <input id="login-password" name="password" type="password" class="form-input" placeholder="Password" required>
                </div>

                <div class="form-field">
                    <input type="submit" value="Log in">
                </div>

            </form>

        </div>

    </div>


    <!-- partial -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>