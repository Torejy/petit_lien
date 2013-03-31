<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width" />
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('normalize', 'foundation'));
		echo $this->Html->script(array('vendor/custom.modernizr.js'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="fr"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
</head>
<body>

  <div class="row">
    <div class="large-12 columns">
 
        <ul class="button-group">
          <li><a href="#" class="button">Nav Item 1</a></li>
          <li><a href="#" class="button">Nav Item 2</a></li>
          <li><a href="#" class="button">Nav Item 3</a></li>
        </ul>
 
        <div class="row">
 				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
          
        </div>
 
        <footer class="row">
        <div class="large-12 columns"><hr />
            <div class="row">
				<?php echo $this->element('sql_dump'); ?>
            </div>
        </div>
      </footer>
 
      <!-- End Footer -->
 
 
    </div>
  </div>
  <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  <script type="text/javascript">
    $(window).load(function() {
      $('#featured').orbit({ fluid: '2x1' });
    });
  </script>
  <!-- End Footer -->

</body>
</html>