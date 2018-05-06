<?php
/**
 * Created by PhpStorm.
 * User: u1653035
 * Date: 05/05/2018
 * Time: 15:47
 */
require_once("configuration/config.php");
class DAO
{

    private static function get_connection()
    {
        if(!self::$conn)
        {
            try{
                self::$conn = new PDO(DB_DATA_SOURCE, DB_USERNAME, DB_PASSWORD);

            }
            catch (PDOException $exception)
            {
                echo "Oh no, there was a problem" . $exception->getMessage();
            }
        }
        return self::$conn;
    }
}
