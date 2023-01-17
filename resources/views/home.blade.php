<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>prima pagina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div>

         



        
            {{-- <div class="container">
                <h2>{{ $elem->title }}</h2>
                <h3>{{ $elem->original_title }}</h3>
                <h3>{{ $elem->nationality }}</h3>
                <h4>{{ $elem->date }}</h4>
                <h4>{{ $elem->vote }}</h4>
            </div> --}}

            <table class="w-100 mt-4 tabella">

                <tr class="titoli">
                    <th>
                        <h4>Titolo</h4>
                    </th>
                    <th>
                        <h4>Titolo originale</h4>
                    </th>
                    <th>
                        <h4>nazionalità</h4>
                    </th>
                    <th>
                        <h4>data di uscita</h4>
                    </th>
                    <th>
                        <h4>Voto</h4>
                    </th>
                </tr>
                @foreach ( $movies as $elem )

                    <tr class="films">
                        <td>{{ $elem->title }}</td>
                        <td>{{ $elem->original_title }}</td>
                        <td>{{ $elem->nationality }}</td>
                        <td>{{ $elem->date }}</td>
                        <td>{{ $elem->vote }}</td>
                    </tr>
                            
                            
                @endforeach



            </table>

        

                                                                                                                                                    

    </div>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>