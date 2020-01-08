<?php

    class Book {
        public $author;
        public $title;
        public $pages;

    }



    @$book = new Book;
    @$book->author = "Sekiro <br>";
    @$book->title = "Thousand cuts <br>";
    @$book->pages = 1000;
    

   echo @$book->author;
   echo @$book->title;
   echo @$book->pages; 

?>