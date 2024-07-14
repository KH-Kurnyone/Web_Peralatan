<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icon PT -->
    <link href="img/Logo-PT.png" rel="icon">
    <link href="img/Logo-PT.png" rel="apple-touch-icon">
    <title>Register</title>
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
        <div class="col-lg-6">
            <div class="card py-3 shadow-sm">
                <div class="d-flex justify-content-center">
                    <img src="img/Logo-PT-2.png" width="70%" alt="logo">
                </div>
                <h4 class="text-center fw-bold my-3">Registrasi Pengguna</h4>
                <div class="mx-4">
                    <form action="">
                        <div class="row">
                            <div class="col-6">
                                {{-- Input Nama --}}
                                <label for="nama" class="text-dark">Nama Lengkap</label>
                                <input id="nama" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Nama">
                            </div>
                            <div class="col-6">
                                {{-- Input Username --}}
                                <label for="username" class="text-dark">Username</label>
                                <input id="username" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                {{-- Input Password --}}
                                <label for="password" class="text-dark">Password</label>
                                <input id="password" type="password" name="" class="form-control mb-2"
                                    placeholder="Masukan Password">
                            </div>
                            <div class="col-6">
                                {{-- Input Confirm Password --}}
                                <label for="confirmPassword" class="text-dark">Konfirmasi Password</label>
                                <input id="confirmPassword" type="password" name="" class="form-control mb-2"
                                    placeholder="Ketik Ulang Password">
                            </div>
                        </div>
                        <label for="noWa" class="text-dark">No. Whatsapp</label>
                        <input id="noWa" type="number" name="" class="form-control mb-2"
                            placeholder="Masukan Nomor">
                        <label for="alamat" class="text-dark">Alamat</label>
                        <textarea name="" id="alamat" cols="30" rows="2" class="form-control mb-3"
                            placeholder="Masukan Alamat"></textarea>
                        <button type="submit" class="form-control btn btn-primary">Konfirmasi</button>
                    </form>
                    <p class="d-flex justify-content-end">Sudah punya akun? <a href="/"> Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
