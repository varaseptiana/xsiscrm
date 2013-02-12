<?php
/* @var $this AccountController */
/* @var $model Account */

$this->menuContent=array(
	array('label'=>'Create Account', 'url'=>array('create')),
);


?>

<h1>Manage Account</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'account-grid',
	'dataProvider'=>$model->with('nametypes','namecompanys')->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'source_id',
		//'account_type_id',
		array(
			'header'=>'account type',
			'name'=>'name',
			'value'=>'$data->nametypes->name',
		),
		array(
			'header'=>'company',
			'name'=>'name',
			'value'=>'$data->namecompanys->name',
		),
		//'company_id',
		array(
            'name' => 'active_status',
			'filter' => array(1 => 'Active', 2 => 'Non Active'),
			'value'=>'$data->active_status==1?"Active": "Non Active"',
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
		),
	),
)); ?>
