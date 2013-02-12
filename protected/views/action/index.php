<?php
/* @var $this ActionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actions',
);

$this->menuContent=array(
	array('label'=>'Create Action', 'url'=>array('create')),
	array('label'=>'Manage Action', 'url'=>array('admin')),
);
?>

<h1>Action</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
