<?php
/* @var $this PagesController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Update Page', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Page', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),
    'confirm'=>'Are you sure you want to delete this item?')),
  array('label'=>'Add Picture', 'url'=>array('admins/pictures/create', 'resource_id' => $model->id, 
                                                 'resource_type' => get_class($model))),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>View Page #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'header',
    'menu_header',
    'slug',
		'content',
		'seo_title',
		'seo_keywords',
		'seo_description',
		'pattern',
		'created_at',
		'updated_at',
	),
)); ?>
