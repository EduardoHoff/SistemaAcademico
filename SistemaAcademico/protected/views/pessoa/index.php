<?php
/* @var $this PessoaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pessoas',
);

$this->menu=array(
	array('label'=>'Criar '.$_GET['tipo'].'', 'url'=>array('create', 'tipo'=>$_GET['tipo'])),
	array('label'=>'Editar '.$_GET['tipo'].'', 'url'=>array('admin', 'tipo'=>$_GET['tipo'])),
);
?>

<h1><?php echo $_GET['tipo']; ?></h1>
<?php $dataProvider = new CActiveDataProvider('pessoa',array(
        'criteria'=>array(
            'condition'=>'tipo = "'.$_GET['tipo'].'"',
        ),
      
    ));
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
