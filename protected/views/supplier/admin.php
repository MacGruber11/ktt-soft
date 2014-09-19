<?php

$this->menu=array(
	array('label'=>'List Supplier','url'=>array('index')),
	array('label'=>'Create Supplier','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('supplier-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Suppliers</h1>




<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'supplier-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
