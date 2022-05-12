@extends('templateAdmin')

@section('titre')
Ajouter Produit
@endsection

@section('contenu')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/create/produit" method="post">
    @csrf
<div class="modal-body">
        <div class="mb-3">
            <label   class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" placeholder="Titre produit">
        </div>

        <div class="row">
            <div class="col">
                <label   class="form-label">Prix</label>
            <input type="float" name="prix" class="form-control" placeholder="Prix"  >
            </div>
           <div class="col">
               <label class="form-label" >Catégorie</label>
                <select name="cat" class="form-control">
                    @foreach ( $categories as $categorie)
                        <option  value='{{ $categorie->id }}'>{{ $categorie->nom }}</option>
                    @endforeach

              </select>

           </div>
            <div class="col">
                <label   class="form-label">Quantité</label>
            <input type="entier" name="qtite" class="form-control" placeholder="quantité ptoduit"  >
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea  name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label   class="form-label">Photos</label>
            <input type="file" class="form-control" name="img" placeholder="Titre produit">
        </div>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</form>
</div>
@endsection
