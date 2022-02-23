<?php
class Connextion {
    private static $_instance = null;
    public static function getInstance($dsn,$user,$password){
        //si on a pas encore d'objet de connexion
        if(!self::$_instance){
         try{

            self::$_instance= new PDO($dsn,$user,$password);
        }catch(PDOException $e){
             print "Erreur de connexion".$e->getMessage();
         }
        }
        return self::$_instance;
    }
}
