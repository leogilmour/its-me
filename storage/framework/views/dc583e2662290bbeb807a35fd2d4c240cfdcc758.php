<?php $__env->startSection('styles'); ?>
     <link href="/css/<?php echo e($party->slug); ?>.css" rel="stylesheet"> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1 id="title">R.S.V.P.</h1>
<h2><?php echo e($party->party); ?></h2>
    <div class="panel-body">

        <?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <form action="<?php echo e(Request::fullUrl()); ?>" method="POST" class="form-horizontal">
            <?php echo e(csrf_field()); ?>

            <div class="form-groups">
                <div class="col-sm-6">
                    <input type="text" name="party_id" id="party_id" class="form-control hidden" value="<?php echo e($party->id); ?>">
                </div>
                <div class="col-sm-6">
                        <input type="text" name="reply" id="reply" class="form-control hidden" value=1>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control<?php echo e(isset($guest->name) ? ' disabled' : ''); ?>" <?php echo e(isset($guest->name) ? 'disabled' : ''); ?> placeholder="Your name" value="<?php echo e(old('name') ?: ( isset($plus_one->name) ? $plus_one->name : '')); ?>">
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" id="email" class="form-control <?php echo e(isset($guest->name) ? 'hidden' : ''); ?>" placeholder="Your email" value="<?php echo e(old('email')); ?>">
                </div>
                <p>&</p>
                <div class="col-sm-6">
                    <input type="text" name="plus_one" id="plus_one" class="form-control<?php echo e(isset($guest->name) ? ' disabled' : ''); ?>" <?php echo e(isset($guest->name) ? 'disabled' : ''); ?> placeholder="Your plus one's name" value="<?php echo e(old('plus_one') ?: (isset($guest->name) ? $guest->name : '')); ?>">
                </div>
                <div class="col-sm-6">
                    <textarea name="fact" id="fact" class="form-control" placeholder="A mysterious fact on <?php echo e(isset($guest->name) ? $guest->name : 'your plus one'); ?>. Outrageous or strange anecdotes work best."><?php echo e(old('fact')); ?></textarea>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="password" id="password" class="form-control" placeholder="Greek name for Cupid?" value="<?php echo e(old('password')); ?>">
                </div>
            </div>
<br>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit">
                        RSVP
                    </button>
                </div>
            </div>
        </form>
        <hr class="styled">
        <?php echo isset($guest->name) ? '' : '<a class="secondary" href="/parties/' . $party->slug . '" class="button">Back to invite</a>'; ?>

    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>