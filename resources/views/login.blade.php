<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tecmicra-Form</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="text">Login</div>
        <form action="login" method="post">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="email">
                    <div class="underline"></div>
                    <label for="email">Email</label>
                    @error('email')
                    <div style="color:red">{{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="password" name="password">
                    <div class="underline"></div>
                    <label for="password">Password</label>
                    @error('password')
                    <div style="color:red">{{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="submit">
                </div>
            </div>
        </form>
    </div>
</body>

</html>
