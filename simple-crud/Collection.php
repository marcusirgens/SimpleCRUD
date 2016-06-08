<?php

namespace marcuspi\SimpleCRUD;

/**
 * A collection of documents in a database.
 */
interface Collection
{
    
    /**
     * Creates a new document.
     * 
     * @access public
     * @param array $data
     * @return Document
     */
    public function create($data);
    
    /**
     * Finds a document in the database.
     * 
     * @access public
     * @param Id $id The object's unique identifier
     * @return Document
     */
    public function read(Id $id);
    
    /**
     * Updates the specified document.
     * 
     * @access public
     * @param Id $id The object's unique identifier
     * @param array $data The data to update
     * @return int The number of modified objects
     */
    public function update(Id $id, $data);

    /**
     * Removes the specified document.
     * 
     * @access public
     * @param Id $id The object's unique identifier
     * @return int The number of modified objects
     */
    public function delete(Id $id);
}