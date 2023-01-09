<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.css') }}">
    <style>
        *{
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
        } */

        p {
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

        .form-control {
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
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card py-3 px-2">
                        <div class="division">
                            <div class="row">
                                <div class="col-3">
                                    <div class="line l"></div>
                                </div>
                                <div class="col-6"><span>login</span></div>
                                <div class="col-3">
                                    <div class="line r"></div>
                                </div>
                            </div>
                        </div>

                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('login') }}" class="myform">
                            @csrf

                            <!-- Name Or email -->

                            <div class="form-group">
                                <x-text-input id="email" class="form-control" placeholder="Name Or email"
                                    type="text" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->

                            <div class="form-group">
                                <x-text-input id="password" class="form-control" placeholder="Password" type="password"
                                    name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me and Forgot password -->

                            <div class="flex items-center justify-content-between mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>

                            <!-- btn form -->

                            <div class="form-group mt-4 mb-3">
                                <x-primary-button class="btn btn-block btn-primary btn-lg border-0 "><small><i
                                            class="far fa-user pr-2"></i>{{ __('Log in') }}</small>
                                </x-primary-button>
                            </div>

                            <!-- go to register -->

                            <div class="row justify-content-center">
                                <a class="col-md-6 col-12 bn text-center" href="{{ route('register') }}">
                                    {{ __('register') }}
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
