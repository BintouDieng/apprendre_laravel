<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titre ?? 'Daraye technologie'}}</title>
</head>
<body>
 
  @if (isset($page_contact))
  
      <h2>Bienvenue sur la page d'accueil</h2>
      @endif 
   @yield('vitrine')  
   
 @stack('message_js')
  
</body>
</html>