<?php
/* @var $this AccountTypeController */
/* @var $model AccountType */

$this->breadcrumbs=array(
	'Account Types'=>array('index'),
	'Create',
);

$this->menuContent=array(
	array('label'=>'Manage AccountType', 'url'=>array('admin')),
);
?>

<h1>Create Account Type</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>