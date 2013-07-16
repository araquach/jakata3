<?php  $this->pageTitle=Yii::app()->name . ' - Kebelo System'; ?>

<div id="kebeloMain">

	<div id="kebelo">
	
	<h2>Kebelo System</h2>
	
	<div id="kebelo_top_links">
		<?php echo CHtml::link("Kebelo Advantage", array('kebelo/advantage'));?>
		<?php echo CHtml::link("Kebelo Silk", array('kebelo/silk'));?>
		<?php echo CHtml::link("Q &amp; A", array('kebelo/questions'));?>
	</div>
	
	<div id="advantage_link">
	<?php echo CHtml::link("HEADS UP ON ADVANTAGE", array('kebelo/advantage'));?>
	<p>KEBELO'S SENSATIONAL WAY TO SMOOTH HAIR</p>
	</div>
	<div id="silk_link">
	<?php echo CHtml::link("SILK ON THE BEACH", array('kebelo/silk'));?>
	<p>SUN, SEA, SAND &amp; KEBELO SILK</p>
	</div>
	
	<div id="questions_link">
	<?php echo CHtml::link("YOUR QUESTIONS ANSWERED", array('kebelo/questions'));?>
	<p>EVERYTHING YOU NEED TO KNOW ABOUT KEBELO</p>
	</div>
	
	<div id="kebelo_offer">
	<p><span class="bold">Special Offer</span><br>Kebelo Advantage<br>Smoothing Treatment</p>
	<p class="big_offer">&pound;99</p>
	<p>includes aftercare products</p>
	<p>Plus FREE Cut, Dry &amp; Style<br>with every treatment</p>
	</div>
	
	
	</div> <!--end kebelo-->
	
</div> <!--end kebeloMain-->