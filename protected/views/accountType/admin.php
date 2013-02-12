<?php
/* @var $this AccountTypeController */
/* @var $model AccountType */

$this->menuContent=array(
	array('label'=>'Create Account Type', 'url'=>array('create')),
);

?>

<h1>Manage Account Type</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'account-type-grid',
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
