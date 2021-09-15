<?php $__env->startSection('styles'); ?>
	<link href="/css/app.css" rel="stylesheet">	
	<link href="/css/home.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="title">
	<h1>Leo Gilmour</h1>
</div>

<div class="info">
	<ul>
		
		<li>
			<p>London based web developer on <a target="_blank" href="https://www.linkedin.com/in/leo-gilmour">LinkedIn &#9755;</a></p>
			<!-- <ul class="dropdown"> -->
			<!-- </ul> -->
		</li>
		<li><a href="/learn-to-code">Learn to code &#9755;</a></li>
		<li><p>I tutor in Maths, Coding, and Science</p></li>
		<li><a target="_blank" href="http://instagram.com/themathematicalmermaid/">@themathematicalmermaid  &#9755;</a></li>
	</ul>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>