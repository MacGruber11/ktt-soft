<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	
        <?php echo CHtml::link(CHtml::encode($data->name),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instock')); ?>:</b>
	<?php echo CHtml::encode($data->instock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->getSupplier($data->supplier_id)); ?>
	<br />


</div>