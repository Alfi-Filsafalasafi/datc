<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('logo/logo-biru.png') }}" />
    <style>
        .custom-section {
            background: linear-gradient(rgba(1, 58, 99, 0.78), rgba(1, 42, 74, 0.78)), url("{{ asset('img/bg-home.jpg') }}");
            background-size: cover;

            background-repeat: no-repeat;
        }
    </style>
    <title>Linktree DATC</title>
</head>

<body class="custom-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card my-5 py-2">
                    <div class="card-body text-center p-4 p-md-5">
                        <img src="{{ asset('logo/logo-biru.png') }}" class="text-center" height="64" alt=""
                            srcset="">
                        <h5 class="mt-3">DATC</h5>
                        <p>Dwi Achmad Tax Consultant Company Profile</p>
                        <hr>
                        {{-- <a href="#" class="btn btn-outline-primary w-100 mt-4 py-3">
                        <i class="fab fa-facebook"></i>
                        <span class="ml-2">Facebook</span>
                    </a> --}}
                        <a href="https://wa.me/6285735741517" class="btn btn-outline-success w-100 mt-4 py-3">
                            <i class="fab fa-whatsapp"></i>
                            <span class="ml-2">Whatsapp</span>
                        </a>
                        <a href="https://www.instagram.com/datc.id" class="btn btn-outline-secondary w-100 mt-4 py-3">
                            <i class="fab fa-instagram"></i>
                            <span class="ml-2">instagram</span>
                        </a>
                        <a href="{{ route('welcome') }}" target="_blank" class="btn btn-outline-dark w-100 mt-4 py-3">
                            <i class="fas fa-tv"></i>
                            <span class="ml-2">Website</span>
                        </a>
                        <p class="mt-4" style="font-size:12px">Copyright © 2023. DATC <a href="{{ route('welcome') }}"
                                target="_blank">Website DATC</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
