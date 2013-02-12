<?php
/* @var $this PersonTypeController */
/* @var $model PersonType */

$this->menuContent=array(
	array('label'=>'Create Person Types', 'url'=>array('create')),
);

?>

<h1>Manage Person Types</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'person-type-grid',
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
