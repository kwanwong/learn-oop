<?php
/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/2/23
 * Time: 22:20
 */
interface Logger{
    public function save($message);
}

class FileLogger implements Logger {
    public function save($message)
    {
        var_dump('log into file:'.$message);
    }
}

class DatabaseLogger implements Logger {
    public function save($message)
    {
        var_dump('log into database:'.$message);
    }
}

class UserController{
    /**
     * UserController constructor.
     */
    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function register()
    {
        $this->logger->save('register');
    }
}

$user = new UserController(new DatabaseLogger());
$user->register();