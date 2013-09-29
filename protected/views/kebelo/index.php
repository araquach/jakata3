<?php  $this->pageTitle=Yii::app()->name . ' - Kebelo System'; ?>

<div id="kebeloMain">

	<div id="kebelo">
	
	<h2>Kebelo System</h2>
	
	<div id="kebelo_top_links">
		<?php echo CHtml::link("Kebelo Advantage", array('kebelo/advantage'));?>
		<?php echo CHtml::link("Kebelo Silk", array('kebelo/silk'));?>
		<?php echo CHtml::link("Q &amp; A", array('kebelo/questions'));?>
	</div>
	
	<?php echo CHtml::link(
	"<div id=\"advantage_link\">
	<h4>HEADS UP ON ADVANTAGE</h4> <p>KEBELO'S SENSATIONAL WAY TO SMOOTH HAIR</p><p>Click here &gt;</p></div>", array('kebelo/advantage'));?>
	
	
	<?php echo CHtml::link("<div id=\"silk_link\">
	<h4>SILK ON THE BEACH</h4><p>SUN, SEA, SAND &amp; KEBELO SILK</p><p>Click here &gt;</p></div>", array('kebelo/silk'));?>
	
	
	<?php echo CHtml::link("<div id=\"questions_link\">
	<h4>YOUR QUESTIONS ANSWERED</h4><p>EVERYTHING YOU NEED TO KNOW ABOUT KEBELO</p><p>Click here &gt;</p></div>", array('kebelo/questions'));?>
	
	
	
	<div id="kebelo_offer">
	<p><span class="bold">Special Offer</span><br>Kebelo Advantage<br>Smoothing Treatment</p>
	<p class="big_offer">&pound;99</p>
	<p>includes aftercare products</p>
	<p>Plus FREE Cut, Dry &amp; Style<br>with every treatment</p>
	</div>
	
	
	</div> <!--end kebelo-->
	
</div> <!--end kebeloMain-->