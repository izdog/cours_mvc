<?php 

namespace App\Model;

// Importation de la classe Database
use \App\Database;
use \PDO;

class FilmModel {

    public static function getFilms(){
        $statement = 'SELECT * FROM Films';
        
        
        $req = Database::getDB()->query($statement);
        $req->execute();

        $films = $req->fetchAll(PDO::FETCH_OBJ);

        return $films;
    }

    public static function getFilmById(int $id){
        $statement = 'SELECT * FROM films WHERE films.id = :id';

        $req = Database::getDB()->prepare($statement);
        $req->execute([':id' => $id]);

        $film = $req->fetch(PDO::FETCH_OBJ);

        return $film;
    }
}