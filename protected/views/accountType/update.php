<?php
/* @var $this AccountTypeController */
/* @var $model AccountType */

$this->breadcrumbs=array(
	'Account Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menuContent=array(
	array('label'=>'Create AccountType', 'url'=>array('create')),
	array('label'=>'View AccountType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountType', 'url'=>array('admin')),
);
?>

<h1>Update Account Type <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>