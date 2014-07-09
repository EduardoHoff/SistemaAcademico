<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Criar '.$model->tipo.'', 'url'=>array('create', 'tipo'=>$model->tipo)),
	array('label'=>'Listar '.$model->tipo.'', 'url'=>array('index', 'tipo'=>$model->tipo)),
	array('label'=>'Visualizar '.$model->tipo.'', 'url'=>array('view', 'id'=>$model->id, 'tipo'=>$model->tipo)),
);
?>

<h1>Editar <?php echo $model->tipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'tipo'=>$model->tipo)); ?>