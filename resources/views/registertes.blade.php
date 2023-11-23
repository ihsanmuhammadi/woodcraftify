@extends('layouts.login')
@section('content')
     {{-- hero --}}
     <div id="hero">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <form style="max-width: 400px; width: 100%; margin: 0 auto;">
                        <h1 class="pb-4 mb-2 fw-bold" style="font-size: 28px;">SIGN UP</h1>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-form" style="height: 50px" id="exampleInputEmail1" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-4 mt-4 pt-2">
                            <input type="email" class="form-control rounded-form" style="height: 50px" id="exampleInputPassword1" placeholder="Email">
                        </div>
                        <div class="mb-4 mt-4 pt-2">
                            <input type="password" class="form-control rounded-form" style="height: 50px" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="mb-4 mt-4 pt-2">
                            <input type="password" class="form-control rounded-form" style="height: 50px" id="exampleInputPassword1" placeholder="Konfirmasi Password">
                        </div>
                        <div class="mb-4 mt-4 pt-2">
                            <input type="text" class="form-control rounded-form" style="height: 50px" id="exampleInputPassword1" placeholder="Nomor Handphone">
                        </div>
                        <div class="mb-4 mt-4 pt-2">
                            <input type="text" class="form-control rounded-form" style="height: 50px" id="exampleInputPassword1" placeholder="Alamat">
                        </div>
                        <button type="submit" class="btn btn-custom rounded-form mt-2 fw-bold" style="width: 100%; height: 60px">LOGIN</button>
                        <p class="mt-4 pt-2">Have an account? <a href="" class="fw-bold">Login</a></p>
                    </form>
                </div>
                <div class="col-md-6 bg-login">
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <div id="footer">
        <div class="container">
            <div class="row d-flex align-content-center align-items-center">
                <h1 class="my-4 fw-bold" style="font-size: 22px">Copyright @ 2023. All rights reserved</h1>
            </div>
        </div>
    </div>
@endsection
