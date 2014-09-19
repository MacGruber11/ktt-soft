<?php
$this->menu = array(
    array('label' => 'List Product', 'url' => array('index')),
    array('label' => 'Create Product', 'url' => array('create')),
    array('label' => 'Update Product', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Product', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Product', 'url' => array('admin')),
);
?>

<h1>Product <?php echo $model->name; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'instock',
        'code',
        'supplier_id' => array(
            'name' => 'supplier_id',
            'value' => Product::model()->getSupplier($model->supplier_id),
        ),
    ),
));
?>
