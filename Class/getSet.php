<?php

    class Movie {
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating($rating);
        }

        function getRating() {
          return $this->rating;
        }

        function setRating($rating) {
            if($rating == 1 || $rating == 2 || $rating == 3) {
                $this->rating = $rating;
            } elseif($rating < 1 || $rating > 3) {
                $this->rating = "Not rated";
            }
        }
    }



    $movie = new Movie("Avengers", 2);
    // 1, 2 , 3 (ratings)
    
    $movie->setRating(3);
    echo $movie->getRating();

?>