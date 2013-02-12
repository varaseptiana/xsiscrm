<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Addresses'=>array('index'),
	'Create',
);

$this->menuContent=array(
	array('label'=>'List Address', 'url'=>array('index')),
	array('label'=>'Manage Address', 'url'=>array('admin')),
);
?>

<h1>Create Address</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>