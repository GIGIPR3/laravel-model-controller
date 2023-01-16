<?php

namespace App\Http\Controllers;

/* use app\models\movie; */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //
    public function index(){

    // 'select * from books'
        $movies = Movie::all();

        dd($movies);

        

       /*  $data = [
            'title' => 'Titoli dei film',
            'movies_all' => $all_movies
        ]; */


        return view('home');
    }

}




    /* return view('home', compact('$all_movie') ); */



    /* $movie_filtered = Movies::where('title', 'original_title', 'vote')->get();

    return view('home', compact('movie_filtered') ); */
//}

/* public function index(){

    //filtraggio elementi
    $movie_filtered = Movies::where('title', 'original_title', 'vote')->get();

    return view('home', compact('movie_filtered') );
} */
//}

