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
        <div class="text">Tecmicra-Solution-Form</div>
        <form action="submit-form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="name">
                    <div class="underline"></div>
                    <label for="name">Name</label>
                    @error('name')
                        <div style="color:red">{{ $message }} </div>
                    @enderror
                </div>
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
                    <input type="text" name="mobile">
                    <div class="underline"></div>
                    <label for="mobile">Mobile</label>
                    @error('mobile')
                        <div style="color:red">{{ $message }} </div>
                    @enderror
                </div>
                <div class="input-data">
                    <input type="file" name="file" accept="image/*">
                    <div class="underline"></div>
                    @error('file')
                        <div style="color:red">{{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="password" name="password">
                    <div class="underline"></div>
                    <label for="">Password</label>

                    @error('password')
                        <div style="color:red">{{ $message }} </div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="input-data textarea">
                    <textarea rows="8" cols="80"></textarea>
                    <br />
                    <div class="underline"></div>
                    <label for="">Message</label>
                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                            <input type="submit" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
