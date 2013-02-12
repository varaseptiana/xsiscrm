<?php
/* @var $this IndustryTypeController */
/* @var $model IndustryType */

$this->menuContent=array(
	array('label'=>'Create Industry Type', 'url'=>array('create')),
);

?>

<h1>Manage Industry Type</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'industry-type-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
		),
	),
)); ?>
