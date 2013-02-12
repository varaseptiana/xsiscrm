<?php
/* @var $this ActionTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Action Types',
);

$this->menuContent=array(
	array('label'=>'Create ActionType', 'url'=>array('create')),
	array('label'=>'Manage ActionType', 'url'=>array('admin')),
);
?>

<h1>Action Type</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
