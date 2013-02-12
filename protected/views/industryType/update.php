<?php
/* @var $this IndustryTypeController */
/* @var $model IndustryType */

$this->breadcrumbs=array(
	'Industry Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menuContent=array(
	array('label'=>'List IndustryType', 'url'=>array('index')),
	array('label'=>'Create IndustryType', 'url'=>array('create')),
	array('label'=>'View IndustryType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IndustryType', 'url'=>array('admin')),
);
?>

<h1>Update Industry Type <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>