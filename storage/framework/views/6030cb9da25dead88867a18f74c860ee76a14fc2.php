<!doctype html>
<html lang='en'>

<head>
	<?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->yieldContent('styles'); ?>
    <link href="/css/base.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		

		<div id="main">
			<?php echo $__env->yieldContent('content'); ?>
	</div>

		
	</div>
	<footer>
		<!-- hello -->
		<!-- <script src="/js/app.js"></script> -->
		
		<?php echo $__env->yieldContent('js'); ?>

		<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</footer>
</body>

</html>