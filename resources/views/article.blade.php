@extends('templateAdmin')

@section('titre')
    Gestion Admin
@endsection

@section('contenu')

<a type="button" class="btn btn-primary btn-lg" href="{{'/dashbord/form'}}">Ajouter Article</a>
      <table class="table table-sm">
        <div class="col-lg-7 px-4 pt-5">
            @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
        </div>
        <thead>
          <tr>
            <th scope="col">N° ARTICLE</th>
            <th scope="col">TITRE</th>
            <th scope="col">IMAGES</th>
            <th scope="col">ARTICLES</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        @foreach ($articles as $article)
        <tbody>
          <tr>
            <td>{{ $article['id_article'] }}</td>
            <td>{{ $article['titre'] }}</td>
            <td>{{ $article['img'] }}</td>
            <td>{{ $article['article'] }}</td>
            <td class="text-right">
                <a type="button"href="{{'/delete/article/'.$article['id_article']}}"  class="btn btn-danger rounded-pill  "style="width: 80px">DELETE</a>
               <a href="{{'/delete/article/{id}'}}" type="button"  class="btn btn-warning" style="width: 80px">EDIT</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection
