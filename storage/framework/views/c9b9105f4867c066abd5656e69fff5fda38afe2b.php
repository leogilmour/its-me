<?php $__env->startSection('styles'); ?>
     <link href="/css/halloween.css" rel="stylesheet"> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<h1 id="title">666TH ANNUAL SUPERVILLAIN CONVENTION</h1>
<?php if($paid == "ive-paid"): ?>
    <p>To attend please select your identity and fill out the form.</p>
    <p><em>Warning:</em> There are <?php echo count($guests); ?> to choose from...</p>
<?php endif; ?>
<div id="list">
	<?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <?php if($paid == "ive-paid" && !$guest->guest): ?> 
    <a href="/halloween/guest/<?php echo e($guest->character); ?>">
    <?php endif; ?>
        <?php if($guest->guest): ?>
        <div class="guest taken">
        <?php else: ?> 
        <div class="guest">
        <?php endif; ?>
            <?php if($guest->guest): ?>
                <h2><?php echo e($guest->guest); ?></h2>
                
                
            <?php else: ?>
                <h2><?php echo e($guest->character); ?></h2>
            <?php endif; ?>
            <div class="image" style="background-image: url(<?php echo e($guest->image); ?>);">
            <?php if($guest->driving): ?>
                <p>Driving from <?php echo e($guest->driving); ?></p>
            <?php endif; ?>
            </div>
        </div>
    </a>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>