<?php
class   Shortener   {
    protected   $db;

    public  function    __construct()   {
        $this->db   =   new Mysqli('localhost', 'root', '', 'website');
    }


    public  function generateCode($num)  {
        return  base_convert($num,  10, 36);
    }


    public  function    makeCode($url)  {
        $url    =   trim($url);
    }
}