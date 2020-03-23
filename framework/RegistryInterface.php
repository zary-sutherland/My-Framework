<?php
namespace FRAMEWORKNS;
interface RegistryInterface {

    static public function getRegistrySingleton();
    static public function add(string $key, $value);
    static public function set(string $key, $value);
    static public function get(string $key);
}

?>