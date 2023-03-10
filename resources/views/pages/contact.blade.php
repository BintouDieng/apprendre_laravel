@inject('nomobjet', 'App\Utilities\GetWeekend')
@extends("base",['titre' =>"page Contact", 'page_contact' => ''
                ])

@section('vitrine')
   <h3> page contact bigua woooo</h3>

   {{$nomobjet->getWeekend()}}
   @push('message_js') 
   <script src="js/index.js"></script>
   @endpush
@endsection   