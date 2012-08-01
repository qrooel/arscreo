<?php
/* @var $this PicturesController */
/* @var $model Picture */

$this->breadcrumbs=array(
	'Pictures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Picture', 'url'=>array('index')),
	array('label'=>'Manage Picture', 'url'=>array('admin')),
);
?>

<h1>Create Picture</h1>

<?php echo $this->renderPartial('_form', ['model'=>$model, 'pages' => $pages, 'selectedResourceId' => $selectedResourceId]); ?>
