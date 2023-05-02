<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $liste =  article::all();
        return view('user/Acceuill_user', [
            'listePub' => $liste,
        ]);
    }
      public function fiche()
     {
        $url = request('id');
        $tab = array();
        $tab = explode("-", $url);
        $id = $tab[count($tab)-2];

        $fiche = Cache::remember('fiche_' . $id, 60, function () use ($id) {
            return article::find($id);
        });
        $response = response()->view('user/Fiche_art', [
            'fiche' => $fiche,
        ]);
        $response->header('Cache-Control', 'max-age=3600, public');
        return $response;
    }
    public function searchFront(Request $request)
    {
        $keyword = $request->input('motcle');
    
        $articles = DB::table('articles')
                    ->where('titre', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('contenu', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('resumer', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('auteur', 'LIKE', '%'.$keyword.'%')
                    ->get();
         return view('user/result',[
            'articles' => $articles,
         ]);           
    }
}

