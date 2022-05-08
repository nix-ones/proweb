@extends('templateAdmin')

@section('titre')
    Gestion Admin
@endsection

@section('contenu')

<div class="card">
    <div class="card-header">
     Commande
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="{{'/dashbord/commande/form'}}" class="btn btn-primary">Ajouter une commande</a>
    </div>
  </div>


@endsection
