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
<?php echo '<article class="article">'; ?>
<?php echo '<a id=" '. $value->author .' " class="anchor"></a><a id="'. $value->author .'" class="anchor"></a>';?>
<?php echo '<section class="visible">'; ?>
<?php echo $value->unhid_img; ?>
<?php echo '<h2>' . $value->title . '</h2>';?>
<?php echo $value->unhidden;?>
<?php echo '<p class="reveal">Read more is &gt;</p>'; ?>
<?php echo '</section>'; ?>
<?php echo '<section class="hidden">';?>
<?php echo $value->hidden_img ;?>
<?php echo $value->hidden ;?>
<?php echo '<p class="offer">' . $value->offer . '</p>';?>
<?php  $this->widget('ext.yii-facebook-opengraph.plugins.LikeButton', array(
   'href' => 'http://www.jakatasalon.co.uk/news#' . $value->author, 
   'show_faces'=>true,
   'send' => true,
));  ?>	
<?php echo '</section>' ;?> 
<?php echo '<p class="author">Published by ' . $value->author . '</p>';?>
<?php echo '<time datetime="2013-10-11">' . $value->date . '</time>';?>
<?php echo '</article>'; ?>

<?php endforeach; ?>

</section> <!--end #accordion-->

</section> <!--end #news-->
