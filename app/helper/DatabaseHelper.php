<?php
namespace Helper;

use PDO;
use PDOException;
use PDOStatement;

class DatabaseHelper
{
    private static $connect;

    public function getConnect()
    {
        $host = '127.0.0.1';
        $db = 'productDB';
        $charset = 'utf8';
        $username = 'root';
        $password = '123456789';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            self::$connect = new PDO($dsn, $username, $password, $opt);
            return self::$connect;
        } catch (PDOException $e) {
            error_log("Error!: " . $e->getMessage());
            die();
        }
    }

    public static function closeConnect(): void
    {
        self::$connect = null;
    }

    private static function bindTypeParam($stmt, $key, $value)
    {
        switch (gettype($value)) {
            case 'integer':
                $stmt->bindParam($key, $value, PDO::PARAM_INT);
                break;
            case 'boolean':
                $stmt->bindParam($key, $value, PDO::PARAM_BOOL);
                break;
            default:
                $stmt->bindParam($key, $value, PDO::PARAM_STR);
        }
    }

    private static function runQuery(
        string $sql,
        array $paramater = null
    ): PDOStatement {
        if (is_null($paramater)) {
            return self::getConnect()->query($sql);
        } else {
            $stmt = self::getConnect()->prepare($sql);
            foreach ($paramater as $key => $value) {
                self::bindTypeParam($stmt, $key, $value);
            }
            return $stmt;
        }
    }

    public static function get(string $sql, array $paramater = null, int $styleFetch = PDO::FETCH_ASSOC): array
    {
        try {
            return self::runQuery($sql, $paramater)->fetchAll($styleFetch);
        } catch (PDOException $e) {
            error_log('Error Database!: ' . $e->getMessage());
            die();
        }
    }

    public static function modify(string $sql, array $paramater = null): bool
    {
        try {
            $stmt = self::runQuery($sql, $paramater);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log('Error Database!: ' . $e->getMessage());
            die();
        }
    }
}
