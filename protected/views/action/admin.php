<?php
/* @var $this ActionController */
/* @var $model Action */

$this->menuContent=array(
	array('label'=>'Create Actions', 'url'=>array('create')),
);

?>

<h1>Manage Actions</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'action-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'project_id',
		'action_type_id',
		'start_date',
		'end_date',
		/*
		'note',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
		),
	),
)); ?>
