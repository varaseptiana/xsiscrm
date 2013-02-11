<?php
$this->widget('zii.widgets.CMenu',array(
	'htmlOptions'=>array('class'=>'mega-menu'),
	'items'=>array(
		array('label'=>'Home', 'url'=>array('/site/index')),
		array('label'=>'Master', 'url'=>'#',
			'items'=>array(
				array('label'=>'Manage Master', 'url'=>'#',
					'items'=>array(
						array('label'=>'Action Type', 'url'=>array('/actionType/admin')),
						array('label'=>'Account Type', 'url'=>array('/accountType/admin')),
						array('label'=>'Industry Type', 'url'=>array('/industryType/admin')),
						array('label'=>'Person Type', 'url'=>array('/personType/admin')),
					),
				),
			),
		),
		array('label'=>'Account', 'url'=>'#',
			'items'=>array(
				array('label'=>'Tasks', 'url'=>'#',
					'items'=>array(
						array('label'=>'Account', 'url'=>array('/account/admin')),
					),
				),
			),
		),
		/*array('label'=>'Candidats', 'url'=>'#',
			'items'=>array(
				array('label'=>'Tasks', 'url'=>'#',
					'items'=>array(
						array('label'=>'Manage Candidat', 'url'=>array('/candidat/admin')),
						array('label'=>'Create Candidat', 'url'=>array('/candidat/create')),
					),
				),
				array('label'=>'Reports', 'url'=>'#',
					'items'=>array(
						array('label'=>'Report-1', 'url'=>'#'),
						array('label'=>'Report-2', 'url'=>'#'),
						array('label'=>'Report-3', 'url'=>'#'),
					),
				),
			),
		),
		array('label'=>'Exam Settings', 'url'=>'#',
			'items'=>array(
				array('label'=>'Category Task', 'url'=>'#',
					'items'=>array(
						array('label'=>'Manage Category', 'url'=>array('/setting/adminCategory')),
						array('label'=>'Create Category', 'url'=>array('/setting/createCategory')),
					),
				),
				array('label'=>'Set Task', 'url'=>'#',
					'items'=>array(
						array('label'=>'Manage Set', 'url'=>array('/setting/adminSet')),
						array('label'=>'create Set', 'url'=>array('/setting/createSet')),
					),
				),
				array('label'=>'Skill Task', 'url'=>'#',
					'items'=>array(
						array('label'=>'Manage Skill', 'url'=>array('/setting/adminSkill')),
						array('label'=>'create Skill', 'url'=>array('/setting/createSkill')),
					),
				),
				array('label'=>'Category Report', 'url'=>'#',
					'items'=>array(
						array('label'=>'Report-1', 'url'=>'#'),
						array('label'=>'Report-2', 'url'=>'#'),
					),
				),
				array('label'=>'Set Report', 'url'=>'#',
					'items'=>array(
						array('label'=>'Report-1', 'url'=>'#'),
						array('label'=>'Report-2', 'url'=>'#'),
					),
				),
				array('label'=>'Skill Report', 'url'=>'#',
					'items'=>array(
						array('label'=>'Report-1', 'url'=>'#'),
						array('label'=>'Report-2', 'url'=>'#'),
					),
				),
			),
		),*/
		array('label'=>'App Configs', 'url'=>'#',
			'items'=>array(
				array('label'=>'Users', 'url'=>'#',
					'items'=>array(
						array('label'=>'Manage User', 'url'=>array('/user/admin/admin')),
						array('label'=>'create User', 'url'=>array('/user/admin/create')),
						array('label'=>'Manage Profile Field', 'url'=>array('/user/profileField/admin')),
						array('label'=>'Create Profile Field', 'url'=>array('/user/profileField/create')),
					),
				),
				array('label'=>'Access Roles', 'url'=>'#',
					'items'=>array(
						array('label'=>'Assignments', 'url'=>array('/rights/assignment/view')),
						array('label'=>'Permissions', 'url'=>array('/rights/authItem/permissions')),
						array('label'=>'Roles', 'url'=>array('/rights/authItem/roles')),
						array('label'=>'Tasks', 'url'=>array('/rights/authItem/tasks')),
						array('label'=>'Operations', 'url'=>array('/rights/authItem/operations')),
					),
				),
			),
		),
	),
));
?>
