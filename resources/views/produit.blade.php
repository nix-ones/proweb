@extends('templateAdmin')

@section('titre')
    Gestion Admin
@endsection

@section('contenu')


<div class="card">
    <div class="card-header">
     Produit
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><!-- Button trigger modal -->
      <p class="btn btn-primary"   data-bs-target="#exampleModal"> <a href="{{'/dashbord/formProduit'}}">Ajouter Produit</a></p>

    </div>
  </div>



  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">TITRE</th>
        <th scope="col">PRIX</th>
        <th scope="col">QUATITE</th>
        <th scope="col">CATEGORIE</th>
        <th scope="col">IMAGES</th>
        <th scope="col">DESCRIPTION</th>
        <th class="text-right">ACTION</th>
      </tr>
    </thead>

    @foreach ($produits as $produit)
    <tbody>

        <tr>
            <td>{{ $produit->titre }}</td>
            <td>{{ $produit->prix }}</td>
            <td>{{ $produit->qtiteproduit }}</td>
            <td>{{ $produit->id_categorie }}</td>
            <td>{{ $produit->img }}</td>
            <td>{{ $produit->desc }}</td>
            <td class="text-right">
                <button type="button" class="btn btn-warning rounded-pill" style="width: 80px">EDIT</button>
                <button type="button" class="btn btn-danger rounded-pill  "style="width: 80px">DELETE</button>
            </td>
        </tr>


    </tbody>
    @endforeach
  </table>
@endsection
