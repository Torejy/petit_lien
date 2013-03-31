<?php $this->assign('title', "Bienvenue sur le réducteur de lien"); ?> 

<div class="large-12 columns"> 
	<div class="radius panel"> 
		<?php echo $this->Form->create('Links');  ?>
			<div class="row collapse"> 
				<div class="large-10 small-8 columns"> 
					<?php echo $this->Form->input('Link.url', array('type' => 'text', 'placeholder' => 'http://')); ?>
				</div> 
				<?php echo $this->Form->end(array('label' => 'Réduire','div' => array('class' => 'large-2 small-3 columns'), 'class'  =>  'postfix button expand')); ?>
			</div> 
		</form> 
	</div> 
</div>