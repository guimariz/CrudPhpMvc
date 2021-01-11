<?php

  abstract class Connection {
    
    private static $conn;

    public static function getConn() {

      if(self::$conn == null) {
        self::$conn = new PDO('mysql: host=localhost; dbname=php-mvc-crud;', 'root', '');
      }

      return self::$conn;
    }
  }