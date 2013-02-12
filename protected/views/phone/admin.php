<?php
/* @var $this PhoneController */
/* @var $model Phone */

$this->menuContent=array(
	array('label'=>'Create Phones', 'url'=>array('create')),
);
?>

<h1>Manage Phones</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phone-grid',
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
