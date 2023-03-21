<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Utilisateur;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Récupérer les categories pour les lister dans le navbar
        $categories = Categorie::all();

        //Afficher 8 articles les plus recents
        $articlesRecents = Article::latest('idArticle')->take(8)->get();

        //Afficher articles par catégorie
        $categorieChoisie = $request->get('categorieChoisie');
        $articlesParCategorie = Article::where('idCategorie', $categorieChoisie)
                                        ->get();
        $nomCategorie = Categorie::where('idCategorie', $categorieChoisie)
                                    ->first();

        //Faire la recherche
        $rechercher = $request->get('rechercher');
        $resultatRecherche = Article::where('titreArticle','like','%'.$rechercher.'%')->paginate();

        return view('accueil', ['categories' => $categories,
                                'categorieChoisie' => $articlesParCategorie,
                                'nomCategorie' => $nomCategorie,
                                'recherche' => $rechercher,
                                'resultatRecherche' => $resultatRecherche,
                                'artRecents' => $articlesRecents]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation des inputs
        $request->validate([
            'idCategorie' => ['required'],
            'titreArticle' => ['required'],
            'resumeArticle' => ['required'],
            'texteArticle' => ['required']
        ]);

        //Création d'article
        $article = new Article;
        $article->idArticle = 0;
        $article->titreArticle = $request->titreArticle;
        $article->texteArticle = $request->texteArticle;
        $article->resumeArticle = $request->resumeArticle;
        $article->dateArticle = now();
        $article->idUtilisateur = '3';
        $article->idCategorie = $request->idCategorie;
        $article->save();

        return redirect()->route('cat.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function storeCommentaire(Request $request)
    {
        $request->validate([
            'newCommentaire' => ['required']
        ]);

        $commentaire = new Commentaire;
        $commentaire->idCommentaire = 0;
        $commentaire->textCommentaire = $request->newCommentaire;
        $commentaire->dateCommentaire = now();
        $commentaire->idUtilisateur = '2';
        $commentaire->idArticle = $request->idArticle;
        $commentaire->save();

        return back();
    }

    public function show(Request $request)
    {   
        $id = $request->get('idArticle');

        $auteur = Utilisateur::select('Utilisateur.pseudo')
                                ->join('Article', 'Utilisateur.idUtilisateur', '=', 'Article.idUtilisateur')
                                ->where("Article.idArticle", $id) 
                                ->first();
        $categorie = Categorie::select('Categorie.nomCategorie')
                                ->join('Article', 'Categorie.idCategorie', '=', 'Article.idCategorie')
                                ->where("Article.idArticle", $id) 
                                ->first();
        $article = Article::where("idArticle", $id)->first();
        $commentaires = Utilisateur::select('Utilisateur.pseudo', 'Commentaire.textCommentaire', 'Commentaire.dateCommentaire')
                                ->join('Commentaire', 'Utilisateur.idUtilisateur', '=', 'Commentaire.idUtilisateur')
                                ->where("Commentaire.idArticle", $id)
                                ->orderby("Commentaire.dateCommentaire")
                                ->get();

        return view("consulterArticle", ["auteur" => $auteur,
                                        "article" => $article, 
                                        "categorie" => $categorie,
                                        "commentaires" => $commentaires ]);
    }

    public function showCategories()
    {
        $categories = Categorie::all();
        return view('publierArticle', ['categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
