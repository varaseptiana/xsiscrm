<?php
/* @var $this ActionTypeController */
/* @var $model ActionType */

$this->breadcrumbs=array(
	'Action Types'=>array('index'),
	$model->name,
);

$this->menuContent=array(
	array('label'=>'List ActionType', 'url'=>array('index')),
	array('label'=>'Create ActionType', 'url'=>array('create')),
	array('label'=>'Update ActionType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ActionType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ActionType', 'url'=>array('admin')),
);
?>

<h1>View ActionType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
