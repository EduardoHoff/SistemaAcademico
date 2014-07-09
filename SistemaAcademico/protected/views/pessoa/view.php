<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Criar '.$model->tipo.'', 'url'=>array('create', 'tipo'=>$model->tipo)),
	array('label'=>'Listar '.$model->tipo.'', 'url'=>array('index', 'tipo'=>$model->tipo)),
	array('label'=>'Editar '.$model->tipo.'', 'url'=>array('update', 'id'=>$model->id, 'tipo'=>$model->tipo)),
	array('label'=>'Deletar '.$model->tipo.'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Pessoa', 'url'=>array('admin')),
);
?>

<h1>Visualizar <?php echo $model->tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'dataNascimento',
		'cpf',
		'matricula',
		'tipo',
	),
)); ?>
