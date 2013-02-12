<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	'Create',
);

$this->menuContent=array(
	array('label'=>'Manage Account', 'url'=>array('admin')),
);
?>

<h1>Create Account</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>