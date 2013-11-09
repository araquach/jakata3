<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */
?>

<section id="news_admin">

<h1>News Articles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</section>
