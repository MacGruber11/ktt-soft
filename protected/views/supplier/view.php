<?php


$this->menu=array(
	array('label'=>'List Supplier','url'=>array('index')),
	array('label'=>'Create Supplier','url'=>array('create')),
	array('label'=>'Update Supplier','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Supplier','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Supplier','url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
