@extends('base',['titre'=> 'liste etudiant'])


@section()
<h1>Liste des etudiants</h1>
 <ul>
@foreach ($etudiants as $etudiant )
    <li>{{$etudiant->prenom}}{{$etudiant->nom}}</li>
@endforeach
</ul>
@endsection
