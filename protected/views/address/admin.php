<?php
/* @var $this AddressController */
/* @var $model Address */

$this->menuContent=array(
	array('label'=>'Create Address', 'url'=>array('create')),
);

?>

<h1>Manage Address</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'address-grid',
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
