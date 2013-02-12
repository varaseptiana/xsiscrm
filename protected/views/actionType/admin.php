<?php
/* @var $this ActionTypeController */
/* @var $model ActionType */

$this->menuContent=array(
	array('label'=>'Create ActionType', 'url'=>array('create')),
);

?>

<h1>Manage Action Type</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'action-type-grid',
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
