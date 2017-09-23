<?php
/**
 * Created by PhpStorm.
 * User: Xepcoh
 */

class DbMySql
{
    private $mysql;

    /**
     * DbMySql constructor.
     */
    public function __construct()
    {
        $this->mysql = new mysqli('localhost', 'xepcoh', '123456.l', 'test_task');
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array(array($this->mysql, $name), $arguments);
    }

}