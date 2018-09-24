<?php

class File
{
    protected $handle;

    public function __construct($path)
    {
        $this->handle = fopen($path, 'w+');
        var_dump($this->handle);
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

    public function write($content)
    {
        $r = fwrite($this->handle, $content);
        var_dump($r);
    }
}