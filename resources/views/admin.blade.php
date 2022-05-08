




  @extends('templateAdmin')

@section('titre')
    Gestion Admin
@endsection

@section('contenu')


<div class="card">
    <h5 class="card-header">TABLE USER</h5>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Ajouter client!!!!</a>
    </div>
  </div>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">NOM</th>
        <th scope="col">PRENOM</th>
        <th scope="col">PSEUDO</th>
        <th scope="col">E-Mail</th>
        <th scope="col">SEXE</th>
        <th scope="col">ADRESSE</th>
        <th scope="col">DATE </th>
        <th scope="col">ROLE </th>
        <th class="text-right">ACTION</th>
      </tr>

    </thead>
    @foreach ($users as $user)


    <tbody>
        <tr>

          <td>{{ $user->nom }}</td>
          <td>{{ $user->prenom }}</td>
          <td>{{ $user->pseudo }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->sexe }}</td>
          <td>{{ $user->adresse }}</td>
          <td>{{ $user->date }}</td>
          <td>{{ $user->role->nom }}</td>
          <td class="text-right">
              <button type="button" class="btn btn-warning rounded-pill" style="width: 80px">EDIT</button>
              <button type="button" class="btn btn-danger rounded-pill  "style="width: 80px">DELETE</button>
          </td>
        </tr>

      </tbody>
    @endforeach
  </table>

@endsection
