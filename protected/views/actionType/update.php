<?php
/* @var $this ActionTypeController */
/* @var $model ActionType */

$this->breadcrumbs=array(
	'Action Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menuContent=array(
	array('label'=>'List ActionType', 'url'=>array('index')),
	array('label'=>'Create ActionType', 'url'=>array('create')),
	array('label'=>'View ActionType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ActionType', 'url'=>array('admin')),
);
?>

<h1>Update Action Type <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>