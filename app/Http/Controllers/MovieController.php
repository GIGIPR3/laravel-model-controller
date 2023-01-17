<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
/* use Illuminate\Support\Facades\DB; */

class MovieController extends Controller
{
    //
    public function index(){

    // 'select * from books'
        $movies = Movie::All();

        //dd($movies_all);

        

       /*  $data = [
            'title' => 'Titoli dei film',
            'movies_all' => $all_movies
        ]; */


        return view('home', compact('movies'));
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

