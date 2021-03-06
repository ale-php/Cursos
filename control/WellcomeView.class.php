<?php
/**
 * WellcomeView
 *
 * @version    1.0
 * @package    samples
 * @subpackage tutor
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006-2012 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class WellcomeView extends TPage
{
    private $html;
    
    /**
     * Class constructor
     * Creates the page
     */
    function __construct()
    {
        parent::__construct();
        
        try{
        TTransaction::open("sample");
        
        $evento = new Agenda(R);
        
        
        $evento->nome = "Curso Adianti framework";
        $evento->lugar = "Progs Scholl alterado";
        $evento->descricao = "Curso basico";
        $evento->data_ev = date("Y-m-d");
        $evento->hora_ev = date("h:m:");
        
        $evento->store();
        TTransaction::close();
        
        }catch(Exception $e){
        
        echo $e->getMessage();
        }
        TPage::include_css('app/resources/styles.css');
        $this->html = new THtmlRenderer('app/resources/wellcome.html');

        // define replacements for the main section
        $replace = array();
        
        // replace the main section variables
        $this->html->enableSection('main', $replace);
        
        // add the template to the page
        parent::add($this->html);
    }
}
?>
