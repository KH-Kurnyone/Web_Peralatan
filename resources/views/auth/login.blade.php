<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icon PT -->
    <link href="img/Logo-PT.png" rel="icon">
    <link href="img/Logo-PT.png" rel="apple-touch-icon">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-primary {
            background-color: #0000FE !important;
            transition: 0.3s;
        }

        .btn-primary:hover {
            filter: opacity(0.5);
        }
    </style>
</head>

<body>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="col-lg-4">
            <div class="card py-3 shadow-sm">
                <div class="d-flex justify-content-center">
                    <img src="img/Logo-PT-1.jpg" width="60%" alt="logo">
                </div>
                <h4 class="text-center fw-bold my-3">Login Website</h4>
                <div class="mx-4">
                    <form action="/loginwebsite" method="POST">
                        @csrf
                        @include('sweetalert::alert')
                        <input type="text" name="username"
                            class="form-control mt-2 @error('username') is-invalid @enderror" placeholder="Username">
                        @error('username')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <input type="password" name="password" class="form-control mt-2 @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <button type="submit" class="form-control btn btn-primary my-2">Login</button>
                    </form>
                    <p class="d-flex justify-content-end">Belum punya akun? <a href="/register">Registrasi</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
