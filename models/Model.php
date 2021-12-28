<?php
    abstract class Model {
        private static $_bdd

        //INSTANCIE LA CONNEXION À LA BDD
        private static function setBdd() {
            self::$_bdd = new PDO('mysql:host=localhost;dbname=login-system;charset=utf8', 'root', '');
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //RÉCUPÈRE LA CONNEXION À LA BDD
        protected function getBdd() {
            if(self::$_bdd == null) {
                self::setBdd();
            }
            return self::$_bdd;
        }

        protected function getAll($table, $obj) {
            $var = [];
            $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' ODER BY id desc');
            $req->execute();
            while($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $var[] = new $obj($data);
            }
            return $var;
            $req->closeCursor();
        }
    }
?>