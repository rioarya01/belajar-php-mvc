<?php
    namespace ProgrammerZamanNow\Belajar\PHP\MVC\App;

    class View {
        static function render(string $view, $model) {
            require __DIR__ . "/../View/" . $view . ".php";
        }
    }