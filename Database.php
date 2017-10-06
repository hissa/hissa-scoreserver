<?php
class Database{
    private initialized = false;
    private static function initialize(){
        $configFile = "database.json";
        $config = json_decode(file_get_contents($configFile));
        self::$pdo =
            new PDO("mysql:host=".$config->host.";dbname=".$config->dbname, $config->user,$config->password, [PDO::MYSQL_ATTR_INIT_COMMAND=>"SET CHARACTER SET 'utf8'"]);
        self::initialzied = true;
    }

    public static function getPdo(){
        if(!self::$initialized){
            self::initialize();
        }
        return self::$pdo;
    } 
}