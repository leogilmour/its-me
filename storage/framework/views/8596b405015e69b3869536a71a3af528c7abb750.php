<?php $__env->startSection('styles'); ?>
     <link href="/css/<?php echo e($party->slug); ?>.css" rel="stylesheet"> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h3><?php echo e($party->host); ?> invite you to</h3>
<h1><?php echo e($party->party); ?></h1>
<h2><?php echo e($party->tagline); ?></h2>
<p>on<br><em><?php echo e($party->date); ?></em><br>at<br><em><?php echo e($party->time); ?></em><br>in<br><em><?php echo e($party->city); ?></em></p>
<p><?php echo e($party->dress_code); ?></p>
<hr>
    <a href="/parties/<?php echo e($party->slug); ?>/rsvp">Accept</a>
    <a class="secondary" href="/parties/<?php echo e($party->slug); ?>/decline">Decline</a>
<p class="serif"><strong>R.S.V.P. before <?php echo e($party->deadline); ?></strong></p>
<hr class="styled">
<div class="serif details"><?php echo $party->description; ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>