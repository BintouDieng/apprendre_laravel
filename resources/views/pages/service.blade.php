@inject('nomobjet', 'App\Utilities\GetWeekend')
@extends("base",['titre' => "Page Service"])

@section('vitrine')
   <h3> page Service bigua woooo</h3>
   {{$nomobjet->getWeekend()}}
@endsection   