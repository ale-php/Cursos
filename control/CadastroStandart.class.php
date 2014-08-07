<?php




class CadastroStandart extends TStandardForm {


protected $form;

function __construct(){

parent::__construct();

parent::setDatabase('sample');
parent::setActiveRecord('Agenda');

$this->form = new TQuickForm('Agenda');

$id = new THidden('id');
$nome = new TEntry('nome');
$lugar = new TEntry('lugar');
$descricao = new TText('descricao');
$data_ev = new TDate('data_ev');
$hora_ev = new TEntry('hora_ev');

$hora_ev->setMask('99:99');

$this->form->addQuickField('',$id);
$this->form->addQuickField('Nome :',$nome);
$this->form->addQuickField('Lugar :',$lugar);
$this->form->addQuickField('Data: ',$data_ev);
$this->form->addQuickField('Hora: ',$hora_ev);
$this->form->addQuickField('Descricao: ',$descricao);

$descricao->setSize(300,200);

$this->form->addQuickAction('Gravar', new TAction(array($this,'onSave')),'ico_save.png');

parent::add($this->form);
}

}
?>