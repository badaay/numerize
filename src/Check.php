<?php 
namespace Numerize;

class Check {

    public static function isGenap(int $angka){
        return "Angka ".$angka." Adalah Genap ( ".($angka % 2 == 1)." )";
    } 

    public static function world()
    {
        return 'Hello World, Composer!';
    }
}