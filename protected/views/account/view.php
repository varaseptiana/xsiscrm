<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->id,
);

$this->menuContent=array(
	array('label'=>'Create Account', 'url'=>array('create')),
	array('label'=>'Update Account', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Account', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Account', 'url'=>array('admin')),
);
?>

<h1>View Account #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'source_id',
		//'account_type_id',
		//'company_id',
		array(
			'header' => 'account type',
			'name'=>'id',
			'value'=>accountType::model()->findByPk($model->id)->name,
		),
		array(
			'header' => 'company',
			'name'=>'id',
			'value'=>Company::model()->findByPk($model->id)->name,
		),
		//'active_status',
		array(
			'header' => 'active_status',
			'name'=>'active_status',
			'value'=>('active_status == "1"')?'Active':'Non Active',
		),
	),
)); ?>
