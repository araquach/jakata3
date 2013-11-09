<?php
/* @var $this NewsController */
/* @var $model News */
?>
<section id="news_admin">

<div id="news_menu">
<?php echo CHtml::link("List News Items", array('news/list')); ?>
</div>

<h1>Update News <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</section> <!--#news_admin-->