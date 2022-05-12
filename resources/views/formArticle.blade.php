@extends('templateAdmin')

@section('titre')
    Gestion Admin
@endsection

@section('contenu')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/create/article" method="post" enctype='multipart/form-data'>
    @csrf
<div class="modal-body">
        <div class="mb-3">
            <label   class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" placeholder="Titre produit">
        </div>


        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Article</label>
            <textarea name="article" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label   class="form-label">Photos</label>
            <input type="file" class="form-control" name="img" placeholder="Titre produit">
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</form>
@endsection
