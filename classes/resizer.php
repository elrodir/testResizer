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

        if(!filter_var($url,    FILTER_VALIDATE_URL))   {
            return  '';
        }

        $url    =   $this->db->escape_string($url);


        $exsists    =   $this->db->query("SELECT    code    FROM
          links   WHERE   url   =   '{$url}'");

        if($exsists->num_rows)  {
            return   $exsists->fetch_object()->code;
        }   else{

            $this->db->query("INSERT    INTO    links(url,  created)
              VALUES('{$url}', NOW())");

            $code   =   $this->generateCode($this->db->insert_id);

            $this->db->query("")
        }
    }
}