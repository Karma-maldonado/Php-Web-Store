<?php

namespace core\classes;

use Exception;
use PDO;

class Database
{
    private $ligation;

    #to connect on DataBase
    private function onDatabase()
    {
        try {
            $this->ligation = new PDO(
                'mysql:' .
                    'host=' . MYSQL_SERVER . ';' .
                    'dbname=' . MYSQL_DATABASE . ';' .
                    'charset=' . MYSQL_CHARSET,
                MYSQL_USER,
                MYSQL_PASS,
                array(PDO::ATTR_PERSISTENT => true)
            );
        } catch (\Throwable $th) {
            echo 'Error start connection: ' . $th->getMessage();
            return false;
        }
    }

    #finalize connetion with DataBase
    private function offDatabase()
    {
        try {
            $this->ligation = null;
        } catch (\Throwable $th) {
            print_r('Error finalize conection: ' . $th->getMessage());
        }
    }

    #next functions are Crud
    public function read($query, $param = null)
    {
        #start ligation with database
        $this->onDatabase();
        try {
            #query with param's
            if (!empty($param)) {
                $execute = $this->ligation->prepare($query);
                $execute->execute($param);
                $result =  $execute->fetchAll(PDO::FETCH_CLASS);
            } else {
                $execute = $this->ligation->prepare($query);
                $execute->execute();
                $result =  $execute->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (\Throwable $th) {
            print_r('Error in read (CRUD): ' . $th->getMessage());
            return false;
        }
        #finalize ligation with database
        $this->offDatabase();

        return $result;
    }

    public function insert($query, $param = null)
    {
        #start ligation with database
        $this->onDatabase();
        try {
            #query with param's
            if (!empty($param)) {
                $execute = $this->ligation->prepare($query);
                $execute->execute($param);
            } else {
                $execute = $this->ligation->prepare($query);
                $execute->execute();
            }
        } catch (\Throwable $th) {
            print_r('Error in insert (CRUD): ' . $th->getMessage());
            return false;
        }
        #finalize ligation with database
        $this->offDatabase();
    }

    public function update($query, $param = null)
    {
        #start ligation with database
        $this->onDatabase();
        try {
            #query with param's
            if (!empty($param)) {
                $execute = $this->ligation->prepare($query);
                $execute->execute($param);
            } else {
                $execute = $this->ligation->prepare($query);
                $execute->execute();
            }
        } catch (\Throwable $th) {
            print_r('Error in update (CRUD): ' . $th->getMessage());
            return false;
        }
        #finalize ligation with database
        $this->offDatabase();
    }

    public function delete($query, $param = null)
    {
        #start ligation with database
        $this->onDatabase();
        try {
            #query with param's
            if (!empty($param)) {
                $execute = $this->ligation->prepare($query);
                $execute->execute($param);
            } else {
                $execute = $this->ligation->prepare($query);
                $execute->execute();
            }
        } catch (\Throwable $th) {
            print_r('Error in delete (CRUD): ' . $th->getMessage());
            return false;
        }
        #finalize ligation with database
        $this->offDatabase();
    }

    #Function for queries different from the previous ones
    public function statement($query, $param = null)
    {
        #start ligation with database
        $this->onDatabase();
        try {
            #query with param's
            if (!empty($param)) {
                $execute = $this->ligation->prepare($query);
                $execute->execute($param);
            } else {
                $execute = $this->ligation->prepare($query);
                $execute->execute();
            }
        } catch (\Throwable $th) {
            print_r('Error in delete (CRUD): ' . $th->getMessage());
            return false;
        }
        #finalize ligation with database
        $this->offDatabase();
    }
}
