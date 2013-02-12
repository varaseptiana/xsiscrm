<?php
/* @var $this ActionTypeController */
/* @var $model ActionType */

$this->breadcrumbs=array(
	'Action Types'=>array('index'),
	'Create',
);

$this->menuContent=array(
	array('label'=>'List ActionType', 'url'=>array('index')),
	array('label'=>'Manage ActionType', 'url'=>array('admin')),
);
?>

<h1>Create Action Type</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>