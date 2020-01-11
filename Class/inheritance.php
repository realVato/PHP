<?php

    class Sekiro
    {
        function cut() {
            echo "Sekiro cuts you down";
        }

        function crouch() {
            echo "Sekiro goes into stealth";
        }

        function deathblow() {
            echo "Sekiro fucks you up";
        }
    }

    class Owl extends Sekiro
    {

    }

    $sekiro = new Sekiro;
    $owl = new Owl;
    echo $sekiro->cut();
    echo $owl->crouch();

?>