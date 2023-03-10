@inject('nomobjet', 'App\Utilities\GetWeekend')
@extends("base",['titre' => "Page about"])

@section('vitrine')
   <h3> page about bigua woooo</h3>
   {{$nomobjet->getmessageBienvenu()}} <br>
   {{$nomobjet->getWeekend()}}

@endsection        