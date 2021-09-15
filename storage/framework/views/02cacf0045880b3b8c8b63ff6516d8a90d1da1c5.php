<?php $__env->startSection('styles'); ?>
     <link href="/css/learn.css" rel="stylesheet"> 
     <link href="/css/wildcard.css" rel="stylesheet"> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h2><?php echo e($party->date); ?>: <?php echo e($party->party); ?></h2>
<h3>Attendees</h3>
<?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <div class="guest">
        
        <div class="name"><p><?php echo e($g['guest']->name); ?></p></div>
        
        
        <div class="fact">
            <?php if(isset($g['fact']->cupid_fact)): ?>
                <p>- <?php echo e($g['fact']->cupid_fact); ?></p>
            <?php else: ?>
                <p>- <a href="<?php echo e(url("/parties/" . $party->slug . "/" . $g['guest']->id . "/" . str_slug($g['plus_one']->name, '-'))); ?>">RSVP</a></p>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<h3>Absent</h3>

    <div class="absent">
        
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>