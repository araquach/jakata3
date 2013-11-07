<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Hairdressing News - Hairdressers in Cheshire';
?>

<?php Yii::app()->facebook->ogTags['og:title'] = "Jakata News"; ?>
<?php Yii::app()->facebook->ogTags['og:description'] = "All the latest news from the salon"; ?>
<?php Yii::app()->facebook->ogTags['og:image'] =  "http://www.jakatasalon.co.uk/images/main/jakata_logo_meta.jpg"; ?>

<script type="text/javascript">
window.addEvent('domready', function(){
	  new Fx.Accordion($('accordion'), '#accordion .reveal', '#accordion .hidden')
	  });
</script>

<section id="news">

<section id="accordion">
<?php foreach ($model as $key => $value):?>
<?php echo '<article class="article">
<a id=" '. CHtml::encode($value->anchor) .' " class="anchor"></a><a id="'. CHtml::encode($value->anchor) .'" class="anchor"></a>
<section class="visible">' .
CHtml::encode($value->unhid_img) .
'<h2>' . CHtml::encode($value->title) . '</h2>' .
$value->unhidden .
'<p class="reveal">Read more &gt;</p>
</section>
<section class="hidden">' .
CHtml::encode($value->hidden_img) .
$value->hidden .
'<p class="offer">' . CHtml::encode($value->offer) . '</p>';?>

<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.jakatasalon.co.uk/news#' . CHtml::encode($value->anchor),
   'show_faces'=>true,
   'send' => true,
));  ?>	

<?php echo '</section>
<p class="author">Published by ' . CHtml::encode($value->author) . '</p>
<time datetime="2013-10-11">' . CHtml::encode(Yii::app()->dateFormatter->formatDateTime($value->date, "long","")) . '</time>
</article>'; ?>

<?php endforeach; ?>

</section> <!--end #accordion-->

</section> <!--end #news-->
