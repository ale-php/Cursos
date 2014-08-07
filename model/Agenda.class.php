<?php

class Agenda extends TRecord
{
    const TABLENAME = 'eventos';
    const PRIMARYKEY= 'id';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('nome');
        parent::addAttribute('lugar');
        parent::addAttribute('descricao');
        parent::addAttribute('data_ev');
        parent::addAttribute('hora_ev');
    }


}

?>