<?php

    class Book {
        public $author;
        public $title;
        public $pages;

        function __construct($aAuthor, $aTitle, $aPages) {
            echo   $this->author = "$aAuthor <br>";
            echo   $this->title = "$aTitle <br>";
            echo   $this->pages = "$aPages <br><br>";
        }

    }



    @$book0 = new Book("Sekiro", "Thousand cuts", 1000);
    @$book1 = new Book("Genichiro", "Ashina", 300);
?>