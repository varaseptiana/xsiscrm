<?php
/* @var $this EmailController */
/* @var $model Email */

$this->menuContent=array(
	array('label'=>'Create Email', 'url'=>array('create')),
);

?>

<h1>Manage Email</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'email-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'address',
		'person_type_id',
		'person_id',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
		),
	),
)); ?>
