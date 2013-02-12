<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->menuContent=array(
	array('label'=>'Create Company', 'url'=>array('create')),
);

?>

<h1>Manage Company</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'company-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'address',
		'industry_type_id',
		'note',
		'active_status',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
		),
	),
)); ?>
