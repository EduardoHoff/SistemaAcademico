<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar '.$_GET['tipo'].'', 'url'=>array('index', 'tipo'=>$_GET['tipo'])),
);
?>

<h1>Criar <?php echo $_GET['tipo'] ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'tipo'=>$_GET['tipo'])); ?>