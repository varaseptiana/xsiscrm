<?php
/* @var $this IndustryTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Industry Types',
);

$this->menuContent=array(
	array('label'=>'Create IndustryType', 'url'=>array('create')),
	array('label'=>'Manage IndustryType', 'url'=>array('admin')),
);
?>

<h1>Industry Type</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
