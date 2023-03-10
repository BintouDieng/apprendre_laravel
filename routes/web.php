<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

//premier méthiode

Route::get('/', function () {
    $jours =[ "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"];
    return view('base')->with("jours", $jours);
});
/*
Route::get('/about', function () {
    return view('page/about')->with("nom","sarr")
    ->with("prenom", "modou")
    ->with('nom', "sarr");
});
*/

//Deuxieme méthiode
/*
Route::get('/about', function () {
    return view('page/about')->with("nom","sarr")
    ->withPrenom("Gnokhor")
    ->withNom("sarr");
});
*/

//Troisieme méthiode
/*Route::get('/about', function () {
    return view('page/about')->with([
        'prenom' => "Modou",
        'nom' => "Sarr"
    ]);
   
});
*/
//Quatrieme méthiode
/*
Route::get('/about', function () {
    $tab=[
        'prenom' => "Modou",
        'nom' => "Sarr"
    ];
    $nomcompelt='Isa pouyr';
    return view('page/about', compact('tab', 'nomcomplet'));
   
});
*/
//Cinquieme méthiode
/*
Route::get('/about', function () {
    $view= view('page/about');
    $view->nom = 'Sarr';
    $view->prenom = 'Fatou';
    $view->adress = 'Pikin';
    
    return $view;
   
});
*/
// Laravel blade


Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/contact');
Route::view('/service', 'pages/service');
Route::resource('etudiant', EtudiantController::class);

Route::get('/', function () {
    // Apprendre SQL Brut
    // Séléctionner la liste des articles
//    $articles= DB::select('select * from article ');
//    dd($articles);

 // Séléctionner le premier article
 //    $articles= DB::select('select * from article ')[0];
//    dd($articles);

 // Séléctionner le premier article
// $articles= DB::select('select * from article limit 1 ');
    // dd($articles);

    // A partir du 2éme article recuperer 2 articles
// $articles= DB::select('select * from article limit 1 offset 2 ');
// dd($articles);

// inserer un article: 1er méthode
// $ok= DB::insert('INSERT INTO article values(null, :titre, :contenu, :etat, :date)',[
//     'titre' => 'titre4',
//     'contenu' => 'contenu4',
//     'etat' => 1,
//     'date' => date('Y-m-d H:i:s')
// ]);
// dd($ok); //1 ou 0

// inserer un article: 2er méthode
// $titre = 'titre 5';
// $contenu= 'contenu 5';
// $etat = 0;
// $date = date('Y-m-d H:i:s');
// $ok= DB::insert('INSERT INTO article values(null, :titre, :contenu, :etat, :date)',
//                 compact('titre', 'contenu', 'etat', 'date' ));
// dd($ok); //1 ou 0

// // inserer un article: 3er méthode
// $titre = 'titre 6';
// $contenu= 'contenu 6';
// $etat = 0;
// $date = date('Y-m-d H:i:s');
// $ok= DB::insert('INSERT INTO article values(null, ?, ?, ?, ?)',
//                 [$titre, $contenu, $etat, $date ]);
// dd($ok); //1 ou 0

// //Modifier le titre du deuxiem article
// $ok= DB::update("UPDATE article SET titre= 'titre 2 modifier' WHERE id =2");
// dd($ok); //1 ou 0

// Supprimer article dont l'id= 5
// $ok= DB::delete("DELETE from article WHERE  id =5");
// dd($ok); //1 ou 0

//  Apprendre Fluent Query Builder

// selectionner tous les articles
//  $articles=DB::table('article')->get('*');
// dd($articles);

// selectionner uniquement les colonnes id et titre
//  $articles=DB::table('article')->get(['id', 'titre']);
// dd($articles);

// selectionner le premier article
//  $article=DB::table('article')->first();
// dd($article);

// selectionner le titre du premier article
//  $article=DB::table('article')->first()->titre;
// dd($article);

// selectionner le titre du premier article
//  $article=DB::table('article')->first();
// dd($article->contenu);

// selectionner l'article qui a pour titre "titre 2"
//  $article=DB::table('article')->whereid(2)->get();
// dd($article);

// selectionner l'article qui a pour titre "titre 2"
//  $article=DB::table('article')->where('id', 2)->get();
// dd($article);

// selectionner tous les articles dont leur id est >= 2
//  $article=DB::table('article')->where('id','>', 2)->get();
// dd($article);

// selectionner l'articles dont le titre  est "titre 2" et le contenu est "contenu 2"
//  $article=DB::table('article')->whereTitreAndContenu('titre 2','contenu2')->get();
// dd($article);

// selectionner l'articles dont le titre  est "titre 2" et le contenu est "contenu 2" deuxiem mathiode
//  $article=DB::table('article')
//              ->where('titre','titre 2')
//              ->where('contenu', 'contenu2')->get();
// dd($article);

// selectionner l'articles dont le titre  est "titre 2" ou le contenu est "contenu 2"
//  $article=DB::table('article')->whereTitreOrContenu('titre 2','contenu2')->get();
// dd($article);

// selectionner l'articles dont le titre  est "titre 2" ou le contenu est "contenu 2" deuxiem mathiode
//  $article=DB::table('article')
//              ->where('titre','titre 2')
//              ->orwhere('contenu', 'contenu2')->get();
// dd($article);


// selectionner  deux articles
//  $article=DB::table('article')->take(2)->get();
// dd($article);

// A partir du deuxiem articles, selectionner 3 articles
//  $article=DB::table('article')->where('id', '>', '2')->take(3)->get();
// dd($article);

// Selectionner tous les articles en faisant un trie ascendant sur le titre
//  $article=DB::table('article')->orderBy('titre', 'asc')->get();
//  $article=DB::table('article')->orderBy('titre', 'desc')->get();
//  $article=DB::table('article')->orderBy('titre', 'desc')->get();
// dd($article);
// dd($article2);

// Selectionner tous les articles dont leur id >2 en faisant un trie ascendant 
//  $article=DB::table('article')->where('id','>' ,'2')->orderBy('titre', 'asc')->get();
// dd($article);

// Afficher le nombre d'article 
//  $article=DB::table('article')->count();
// dd($article);

// Inserer un article 
// $ok=DB::table('article')->insert(
// [
//      [ 'titre' => 'titre8',
//       'contenu' => 'contenu8',
//       'etat' => 0,
//       'date' => date('Y-m-d H:i:s')
//     ],
//     [
//       'titre' => 'titre9',
//       'contenu' => 'contenu9',
//       'etat' => 1,
//       'date' => date('Y-m-d H:i:s')
//     ]
// ],
// );
// dd($ok);

 
// Modifier le titre et le contenu de l'article dont l'id =2
// $ok=DB::table('articles')->whereId(2)->update(

//      [ 'titre' => 'Btitre modifier',
//       'contenu' => 'contenu8 modifier',
     
//     ]
 
// );
// dd($ok);

// Suprimer l'article l'id 4
// $ok=DB::table('article')->where('Id', 4)->delete();
// dd($ok);
 
//  *** Apprendre Eloquoent (ORM) ***
// $etudiants = Etudiant::all();
// dd($etudiants);
// $etudiants = Etudiant::get();
// dd($etudiants);

//  Recuperer  etudiant qui l'id 1
// $etudiants = Etudiant::find(1);
// dd($etudiants);

//  Recuperer le nom et le prenom l'etudiant qui a l'id 2
// $etudiants = Etudiant::whereId(2)->get(['nom', 'prenom']);
// dd($etudiants);


//  Recuperer le nom et le prenom l'etudiant dont son prenom est different de "Bintou" et son age > 16
// $etudiants = Etudiant::where('prenom', '!=', 'Bintou')
//                      ->where('age', '>', 13)
//                      ->get(['nom', 'prenom']);
// dd($etudiants);
// $etudiants = Etudiant::where('prenom', '!=', 'Bintou')->where('age', '>', 16)->get(['prenom', 'age']);
// dd($etudiants);

//  Recuperer le nom  du premier etudiant
// $nompremierEtudiant= Etudiant::first()->nom;
// dd($nompremierEtudiant);

// Ajouter un etudiant (premier methode)
// $etudiant= new Etudiant();
// $etudiant->nom ='Fall';
// $etudiant->prenom ='Fatou';
// $etudiant->matricul ='101010';
// $etudiant->age =19;
// $ok=$etudiant->save();
// dd($ok);

// Ajouter un etudiant (deuxiem methode)
// $etudiant= new Etudiant(
//     [
//         'nom' => "Mbaye",
//         'prenom'  => "ibrahima",
//         'matricul'  => "101014",
//         'age'  => 17
//     ]
//    );

// $ok=$etudiant->save();
// dd($ok);

// // Ajouter un etudiant (troisiém methode)
// $etudiant= Etudiant::create(
//     [
//         'nom' => "faye",
//         'prenom'  => "lamine",
//         'matricul'  => "101015",
//         'age'  => 15
//     ]
//    );

// dd("L'etudaint" . ''. $etudiant->prenom .' ' . $etudiant->nom .'' .$etudiant->age.
//          'à été crée avec succès !!!');



    return view('base');
});