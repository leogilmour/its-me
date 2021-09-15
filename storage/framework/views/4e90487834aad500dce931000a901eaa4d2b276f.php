<?php $__env->startSection('styles'); ?>
     <link href="/css/<?php echo e($party->slug); ?>.css" rel="stylesheet"> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<h2>Unfortunately,<br>I cannot attend</h2>
<h1 id="title"><?php echo e($party->party); ?></h1>

<?php if(session()->has('guest_name')): ?>

    <p class="serif"><strong>We're sorry <?php echo e(session()->get('guest_name')); ?> cannot attend and hope to see you at the next one!</strong></p>

<?php else: ?>

<div class="panel-body">
    <?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <form action="<?php echo e(Request::fullUrl()); ?>" method="POST" class="form-horizontal">
        <?php echo e(csrf_field()); ?>

        <div class="form-groups">
            <div class="col-sm-6">
                <input type="text" name="party_id" id="party_id" class="form-control hidden" value="<?php echo e($party->id); ?>">
            </div>
            <div class="col-sm-6">
                    <input type="text" name="reply" id="reply" class="form-control hidden" value=0>
            </div>
            <div class="col-sm-6">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your name" value="<?php echo e(old('name')); ?>">
            </div>
            <div class="col-sm-6">
                <input type="email" name="email" id="email" class="form-control" placeholder="Your email" value="<?php echo e(old('email')); ?>">
            </div>
            <div class="col-sm-6">
                    <input type="text" name="password" id="password" class="form-control" placeholder="Greek name for Cupid?" value="<?php echo e(old('password')); ?>">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit">
                    RSVP
                </button>
            </div>
        </div>
    </form>

    <hr class="styled">

    <a class="secondary" href="/parties/<?php echo e($party->slug); ?>" class="button">Back to invite</a>
</div>

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>