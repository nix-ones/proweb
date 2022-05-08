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
                <h1 class="font-weight-bold py-3">JE M'INSCRIS</h1>


                <div  class="col-lg-7">
                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                </div>
                <form  action="create/user" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="nom" placeholder="Nom " value="{{ old('nom') }}" class="form-control my-2 p-2" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="prenom" placeholder="Prenom " value="{{ old('prenom') }}" class="form-control my-2 p-2" >

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="pseudo" placeholder="Pseudo "value="{{ old('pseudo') }}" class="form-control my-2 p-2" >

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="date" name="date" placeholder="Date de naisssance " value="{{ old('date') }}" class="form-control my-2 p-2" >

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Adresse E-mail" class="form-control my-2 p-2">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="adresse" value="{{ old('adresse') }}" placeholder="Adresse" class="form-control my-2 p-2">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <select class="form-control my-2 p-2" value="{{ old('cp') }}" name="cp">
                                <option value="" >choissiez le code postal</option>
                                 @foreach ($adresses as $adresse)
                                    <option value='{{ $adresse->id }}'  >{{ $adresse->cp }}</option>
                                 @endforeach
                            </select>
                            <select class="form-control my-2 p-2" value="{{ old('ville') }}" name="ville">
                                <option value="" >choissiez la ville</option>
                                @foreach ($adresses as $adresse)
                                   <option value='{{ $adresse->id }}'  >{{ $adresse->ville }}</option>
                                @endforeach
                           </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" name="password_confirmation"  value="{{ old('password_confirmation') }}" placeholder="Adresse Mot de passe" class="form-control my-2 p-2">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                           <button type="submit" class="btn1 mt-3 mb-5">Login</button>
                        </div>
                    </div>
                    <p>J'ai un compte <a href="{{'login'}}">Connexion</a></p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
