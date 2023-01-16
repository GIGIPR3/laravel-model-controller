<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>prima pagina</title>
</head>
<body>

    <div>

         {{-- @foreach()
            <p> {{ $elem->title }} </p>






        @endforeach --}}



        @foreach ( $movies as $elem )
            <div class="container">
                <h2>{{ $elem->title }}</h2>
                <h3>{{ $elem->original_title }}</h3>
                <h3>{{ $elem->nationality }}</h3>
                <h4>{{ $elem->date }}</h4>
                <h4>{{ $elem->vote }}</h4>
            </div>
        @endforeach



    </div>




    

    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>