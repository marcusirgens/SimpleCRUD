<?php
    
namespace marcuspi\SimpleCRUD;

interface Id
{
    public static function make();
    
    public static function restore($id);
}