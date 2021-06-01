@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="panel-heading text-center">
                        <b>Hallo and Selamat Datang</b>
                    </h1>
                    <h2 class="panel-heading text-center">
                       <b>ke Sistem Informasi Akademi </b>
                    </h2>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h5 class="panel-heading text-center">
                        <a>Silahkan <a href="login">Login</a> / <a href="register">Register</a> untuk lanjut</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<script>
    

<body>
