<?php
    
namespace marcuspi\SimpleCRUD;

/**
 * A document in the database. Objects are stored in an associative array.
 */
interface Document
{
    
    
    /**
     * Finds a document in the collection and returns it.
     *
     * @access public
     * @static
     * @param Collection $collection The collection to read from
     * @param Id $id The document's unique identifier
     * @return Document
     */
    public static function restore(Collection $collection, Id $id);
    
    /**
     * Creates a new document in the collection and returns it.
     *
     * @access public
     * @static
     * @param Collection $collection The collection to insert into
     * @param mixed $data The document's unique identifier
     * @return void
     */
    public static function create(Collection $collection, $data);
    
    /**
     * Pulls the contents of this document from the database.
     *
     * @access public
     * @return void
     */
    public function read();
    
    /**
     * Stores changes made to the document.
     *
     * @access public
     * @return void
     */
    public function update();
    
    /**
     * Removes the document from the collection.
     *
     * @access public
     * @return void
     */
    public function delete();
    
    /**
     * Returns the document as an array.
     *
     * @access public
     * @return void
     */
    public function toArray();
}
