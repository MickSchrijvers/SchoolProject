<?php

class DierenPage {

    public $content;

    public function __construct($pageVars) 
    {
        
        if (!empty($pageVars[1])) $cat = $pageVars[1];
        else $cat = '';
        $content = $this->get_dieren($cat);
        


    }   

    private function get_dieren( $cat = '')
    {

        $db = new DatabaseController();

        if (empty($cat)) $sql = 'SELECT * FROM animals';
        else $sql = 'SELECT * FROM animals WHERE category = :cat';

        $db->query($sql);
		if (!empty($cat)) $db->bind(':cat', $cat);	
    
       
    }
}