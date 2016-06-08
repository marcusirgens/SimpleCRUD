<?php
    
namespace marcuspi\SimpleCRUD;

/**
 * Interface for the CRUD system's unique Ids.
 */
interface Id
{

    /**
     * Creates a new Id object
     * 
     * @access public
     * @static
     * @return self
     */
    public static function make();
    
    /**
     * Restores an Id object from string
     * 
     * @access public
     * @static
     * @param string $id An id represented as a string
     * @return self
     */
    public static function restore($id);
    
    /**
     * Requires this class to have a tostring function.
     * 
     * @access public
     * @return string
     */
    public function __toString();
}