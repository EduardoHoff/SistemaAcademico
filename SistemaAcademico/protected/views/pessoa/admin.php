<?php
/* @var $this PessoaController */
/* @var $model Pessoa */

$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Criar '.$_GET['tipo'].'', 'url'=>array('create', 'tipo'=>$_GET['tipo'])),
	array('label'=>'Listar '.$_GET['tipo'].'', 'url'=>array('index', 'tipo'=>$_GET['tipo'])),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pessoa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Editar <?php echo $_GET['tipo']; ?></h1>


<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pessoa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nome',
		'dataNascimento' => array(      
            'name'=>'dataNascimento',
            'value'=>'date("d/m/Y",strtotime($data->dataNascimento))',
			),
		'cpf',
		'matricula',
		'tipo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
