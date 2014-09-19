<?php
$this->menu = array(
    array('label' => 'List Product', 'url' => array('index')),
    array('label' => 'Create Product', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('product-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'product-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'name',
        'instock',
        'code',
        'supplier_id' => array(
            'name' => 'name',
            'value' => 'Product::model()->getSupplier($data->supplier_id)',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
