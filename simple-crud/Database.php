<?php
    
namespace marcuspi\SimpleCRUD;

/**
 * Interface for interacting with a simple document-based database
 */
interface Database {
    
    /**
     * Initializes the database.
     * 
     * @access public
     * @static
     * @param string $path
     * @return Database
     */
    public static function connect($path);
    
    /**
     * Returns the collections in the database.
     * 
     * @access public
     * @return Collection[] An array of Collection objects
     */
    public function collections();
    
    /**
     * Returns a specific collection.
     * 
     * @access public
     * @param string $title
     * @return Collection
     */
    public function collection($title);
    
    /**
     * Adds a collection to the database.
     * 
     * @access public
     * @param string $title
     * @return boolean True if the operation was successful, false otherwise
     */
    public function addCollection($title);
    
    /**
     * Removes a collection from the database.
     * 
     * @access public
     * @param string $title
     * @return boolean True if the operation was successful, false otherwise
     */
    public function removeCollection($title);
    
}