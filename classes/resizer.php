<?php
class   Shortener   {
    protected   $db;

    public function __construct()   {
        $this->db   =   new Mysqli('localhost', 'root', '', 'website');
    }
