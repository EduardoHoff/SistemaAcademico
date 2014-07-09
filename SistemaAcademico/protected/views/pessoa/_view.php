 <?php
/* @var $this PessoaController */
/* @var $data Pessoa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataNascimento')); ?>:</b>
	<?php echo CHtml::encode(date('d/m/Y', strtotime($data->dataNascimento))); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CPF')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matricula')); ?>:</b>
	<?php echo CHtml::encode($data->matricula); ?>
	<br />
	
	<br />
	<?php echo CHtml::link(CHtml::encode("Visualizar ".$data->tipo), array('view', 'id'=>$data->id, 'tipo'=>$data->tipo)); ?>
	<br />


</div>