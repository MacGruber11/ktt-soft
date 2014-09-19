<?php
$this->menu=array(
	array('label'=>'List Supplier','url'=>array('index')),
	array('label'=>'Manage Supplier','url'=>array('admin')),
);
?>

<h1>Create Supplier</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>