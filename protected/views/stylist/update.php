
<div id="application">
<?php
$this->breadcrumbs=array(
	'Stylists'=>array('index'),
	$model->first_name=>array('view','id'=>$model->stylist_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stylist', 'url'=>array('index')),
	array('label'=>'Create Stylist', 'url'=>array('create')),
	array('label'=>'View Stylist', 'url'=>array('view', 'id'=>$model->stylist_id)),
	array('label'=>'Manage Stylist', 'url'=>array('admin')),
);
?>

<h1>Update Stylist <?php echo $model->stylist_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--application-->