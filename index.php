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
            $this -> setTitle($title);
            $this -> genres = $genres;
            $this -> casting = $casting;
            $this -> year = $year;
        }

        // function
        public function setTitle() {
            if (is_string($title)) {
                $this -> title = $title;
            }
            else {
                $this -> title = 'non valido';
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
    
    $casting = [
            'Mark Ruffalo',
            'Leonardo DiCaprio',
            'Ben Kingsley',
        ];

    $film = new Movie('Shutter Island','Thriller', 2010, $casting);
    var_dump($film);
    var_dump($film -> setTitle());
    var_dump($film -> setTitle());
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