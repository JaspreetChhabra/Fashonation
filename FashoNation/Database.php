<?php
class Database
{

    static $_LINK;
    public static function connect($server,$username,$pass,$db)
    {
        self::$_LINK=mysqli_connect($server,$username,$pass,$db);
        return self::$_LINK;
        
    }
    public static function disconnect()
    {
        mysqli_close(self::$_LINK);
    }

}


?>
