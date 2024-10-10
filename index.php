<?php
    $columnsNumber = 4;
    class Movie {
        public $title;
        public $genres;
        public $casting;
        public $year;

        // costruttore
        function __construct(
            string $title, 
            string $genres, 
            int $year, 
            array $casting) {
            $this -> title = $title;
            $this -> setGenres($genres);
            $this -> casting = $casting;
            $this -> year = $year;
        }

        // function
        public function setGenres() {
            if (is_string($genres)) {
                $this -> genres = $genres;
            }
            else {
                $this -> genres = 'non valido';
            }
        }
    }

    // definizione istanze
        // $film = new Movie();
        // $film -> title = 'Shutter Island';
        // $film -> genres = 'Thriller';
        // $film -> year = 2010;
        // $film -> casting = [
        //     'Mark Ruffalo',
        //     'Leonardo DiCaprio',
        //     'Ben Kingsley',
        // ];
        // var_dump($film);
    
    // SHUTTER ISLAND
    $casting = [
        'Mark Ruffalo',
        'Leonardo DiCaprio',
        'Ben Kingsley',
    ];

    $shutterIsland = new Movie('Shutter Island','Thriller', 2010, $casting);
    var_dump($shutterIsland);
    var_dump($shutterIsland -> setGenres());

    // SPIDER MAN: UN NUOVO UNIVERSO
    $castingSpider = [
        'Shalmek Moore',
        'Oscar Isaac',
        'Nicolas Cage',
        'Chris Pine',
        'Liev Schreiber',
    ];
    $SpiedrMan = new Movie('Spider Man: un nuovo universo','Animazione', 2018, $castingSpider);
    var_dump($SpiedrMan);
?>
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header class="py-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                        PHP OOP 1
                        </h1>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>