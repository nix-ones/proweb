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
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Ajouter Produit
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">AJOUT PRODUIT</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
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
                                <label   class="form-label">Quantité</label>
                            <input type="entier" class="form-control" placeholder="quantité ptoduit"  >
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
