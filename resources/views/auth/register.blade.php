<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.css') }}">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        section {
            display: flex;
            min-height: 100vh;
            min-width: 100vw;
            align-items: center;
            justify-content: center;
        }

        svg {
            height: 30px;
        }

        ._img {
            object-fit: cover;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 !important;
            transform: translate(4px, 12px);
            padding: 10px;
        }

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            background: transparent;
        }

        .custom-file-input:lang(en)~.custom-file-label::after {
            display: none;
        }

        .card {
            border: none;
            border-top: 5px solid rgb(176, 106, 252);
            border-bottom: 5px solid rgb(176, 106, 252);
            background: #212042;
            color: #57557A;
            position: relative;
        }

        /* .card::before {
            content: '';3
            position: absolute;
            inset: 0;
            border: none;
            /* border-top: 5px solid rgb(176, 106, 252); */
        background: #21204262;
        color: #57557A;
        }

        */ p {
            font-weight: 600;
            font-size: 15px;
        }

        .fab {
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            background: #2A284D;
            height: 40px;
            width: 90px;
        }

        .fab:hover {
            cursor: pointer;
        }

        .fa-twitter {
            color: #56ABEC;
        }

        .fa-facebook {
            color: #1775F1;
        }

        .fa-google {
            color: #CB5048;
        }

        .division {
            float: none;
            position: relative;
            margin: 30px auto 20px;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }

        .division .line {
            border-top: 1.5px solid #57557A;
            ;
            position: absolute;
            top: 13px;
            width: 85%;
        }

        .line.l {
            left: 52px;
        }

        .line.r {
            right: 45px;

        }

        .division span {
            font-weight: 600;
            font-size: 14px;
        }

        .myform {
            padding: 0 25px 0 33px;
        }

        .form-control,
        .custom-file-label {
            border: 1px solid #57557A;
            border-radius: 3px;
            background: #212042;
            margin-bottom: 20px;
            letter-spacing: 1px;

        }

        .form-control:focus {
            border: 1px solid #57557A;
            border-radius: 3px;
            box-shadow: none;
            background: #212042;
            color: #fff;
            letter-spacing: 1px;
        }

        .bn {
            text-decoration: underline;
        }

        .bn:hover {
            cursor: pointer;
        }

        .form-check-input {
            margin-top: 8px !important;
        }

        .btn-primary {
            background: linear-gradient(135deg, rgba(176, 106, 252, 1) 39%, rgba(116, 17, 255, 1) 101%);
            border: none;
            border-radius: 50px;
            transition: all ease-in-out .3s;
        }

        .btn-primary:focus {
            box-shadow: none;
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, rgba(116, 17, 255, 1) 39%, rgba(176, 106, 252, 1) 101%);
            filter: blur(.4px);
        }

        small {
            color: #F2CEFF;
        }

        .far.fa-user {
            font-size: 13px;
        }

        @media(min-width: 767px) {
            .bn {
                text-align: right;
            }
        }

        @media(max-width: 767px) {
            .form-check {
                text-align: center;
            }

            .bn {
                text-align: center;
                align-items: center;
            }
        }

        @media(max-width: 450px) {
            .fab {
                width: 100%;
                height: 100%;
            }

            .division .line {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <section style="background: url('{{ asset('backend/img/login.jpg') }}') no-repeat center; background-size: cover;">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card py-3 px-2 pb-5">

                        <!-- socil -->

                        {{-- <div class="row mx-auto mt-4">
                            <div class="col-4">
                                <a href="https://www.facebook.com/profile.php?id=100078038529568">
                                    <svg viewBox="0 0 36 36" fill='#0062E0'>
                                        <path
                                            d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z">
                                        </path>
                                        <path fill="#fff" class="xe3v8dz"
                                            d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="https://github.com/amr-fadl">
                                    <svg height="32" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32"
                                        data-view-component="true" class="octicon octicon-mark-github v-align-middle">
                                        <path fill-rule="evenodd"
                                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="https://www.linkedin.com/in/amr-gamal5/">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                        <g fill="none" fill-rule="evenodd">
                                            <path
                                                d="M36,72 L36,72 C55.882251,72 72,55.882251 72,36 L72,36 C72,16.117749 55.882251,-3.65231026e-15 36,0 L36,0 C16.117749,3.65231026e-15 -2.4348735e-15,16.117749 0,36 L0,36 C2.4348735e-15,55.882251 16.117749,72 36,72 Z"
                                                fill="#315b70" />
                                            <path
                                                d="M59,57 L49.959375,57 L49.959375,41.6017895 C49.959375,37.3800228 48.3552083,35.0207581 45.0136719,35.0207581 C41.3785156,35.0207581 39.4792969,37.4759395 39.4792969,41.6017895 L39.4792969,57 L30.7666667,57 L30.7666667,27.6666667 L39.4792969,27.6666667 L39.4792969,31.6178624 C39.4792969,31.6178624 42.0989583,26.7704897 48.3236979,26.7704897 C54.5455729,26.7704897 59,30.5699366 59,38.4279486 L59,57 Z M20.372526,23.8257036 C17.4048177,23.8257036 15,21.4020172 15,18.4128518 C15,15.4236864 17.4048177,13 20.372526,13 C23.3402344,13 25.7436198,15.4236864 25.7436198,18.4128518 C25.7436198,21.4020172 23.3402344,23.8257036 20.372526,23.8257036 Z M15.8736979,57 L24.958724,57 L24.958724,27.6666667 L15.8736979,27.6666667 L15.8736979,57 Z"
                                                fill="#FFF" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div> --}}

                        <!-- title form -->

                        <div class="division">
                            <div class="row  align-items-center">
                                <div class="col-3">
                                    <div class="line l"></div>
                                </div>
                                <div class="col-6 d-flex justify-content-center align-items-center">
                                    <img class="d-block mt-3 _img" style="width: 150px"
                                        src="{{ asset('backend/img/PngItem_5510463.png') }}" alt="">
                                </div>
                                <div class="col-3">
                                    <div class="line r"></div>
                                </div>
                            </div>
                        </div>

                        <!-- form -->

                        <form method="POST" action="{{ route('register') }}" class="myform" enctype="multipart/form-data">
                            @csrf

                            <!-- Name -->
                            <div class="form-group">
                                <x-text-input id="name" class="form-control" placeholder="Name" type="text"
                                    name="name" :value="old('name')" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-text-input id="email" class="form-control" placeholder="Email" type="email"
                                    name="email" :value="old('email')" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <x-text-input id="password" class="form-control" placeholder="Password" type="password"
                                    name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <x-text-input id="password_confirmation" class="form-control"
                                    placeholder="Confirm Password" type="password" name="password_confirmation"
                                    required />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <!-- image -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        {{-- <x-text-input type="file" onchange="showPrev(event)" value=""
                                            class="custom-file-input" name="image" required /> --}}
                                            <input type="file" onchange="showPrev(event)" value=""
                                            class="custom-file-input" name="image">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        <script>
                                            function showPrev(event) {
                                                event.target.files.length > 0 ? document.querySelector('._img').src = URL.createObjectURL(event.target
                                                    .files[0]) : '';
                                            }
                                        </script>
                                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4 mb-3">
                                <x-primary-button class="btn btn-block btn-primary btn-lg border-0 "><small><i
                                            class="far fa-user pr-2"></i>{{ __('Register') }}</small>
                                </x-primary-button>
                            </div>

                            <div class="row justify-content-center">
                                {{-- <div class="col-md-6 col-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Rester connecte</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 bn">Mot se passe oublie</div> --}}


                                <a class="col-md-6 col-12 bn" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
