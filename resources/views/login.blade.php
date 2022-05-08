@extends('template')

@section('titre')
Sign in
@endsection

@section('contenu')
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }
    .row{
    background: white;
    border-radius: 30px;
}
img{
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
}
.btn1{
    border: none;
    height: 50px;
    height: none;
    width: 100%;
    background-color: rgb(114, 143, 151);
    font-weight: bold;
    color: beige;
    border-radius: 4px;
}
.btn1:hover{
    background: whitesmoke;
    border: 1px solid;
    color: black;
}
</style>

<section class="form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="{{ asset('img/login.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 px-4 pt-5">
                <h1 class="font-weight-bold py-3">CONNEXION</h1>

                <div class="col-lg-7 px-4 pt-5">
                    @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                </div>
                <form action="">
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Adresse E-mail" class="form-control my-2 p-2" >

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" name="password" placeholder="Adresse Mot de passe" value="{{ old('password') }}" class="form-control my-2 p-2">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                           <button type="button" class="btn1 mt-3 mb-5">Login</button>
                        </div>
                    </div>
                    <p>Je suis nouveau <a href="{{'sign'}}">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
