<?php $__env->startSection('styles'); ?>
    <link href="/css/<?php echo e($party->slug); ?>.css" rel="stylesheet"> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session()->has('guest_name')): ?>
        <p class="serif">✨ Once this page refreshes, this information will disappear ✨</p>
        <h1 id="title">Thank you</h1>
        <h2><?php echo e(session()->get('guest_name')); ?> is attending</h2>
        <h2><?php echo e($party->party); ?></h2>
        <hr>
        <?php if(session()->has('plus_one_link')): ?>
            <p><strong>Important:</strong> Please send this link to your plus one so they can add a fact about you.</p>
            <input id="post-shortlink" value="<?php echo e(url(session()->get('plus_one_link'))); ?>">
            <button class="button" id="copy-button" data-clipboard-target="#post-shortlink">Copy</button>
        <?php endif; ?>
        <hr>
        <p>The address for the party is below. This message will only appear temporarily, so please make a note of it now</p>
        <p class="serif"><strong>
            <?php echo null !== session()->get('first_address') ? session()->get('first_address') . ',<br>': ''; ?>

            <?php echo null !== session()->get('second_address') ? session()->get('second_address') . ',<br>': ''; ?>

            <?php echo null !== session()->get('city') ? session()->get('city') . ',<br>': ''; ?>

            <?php echo null !== session()->get('county') ? session()->get('county') . ',<br>': ''; ?>

            <?php echo e(session()->get('postcode')); ?>

        </strong></p>
        <hr>
    <?php else: ?>
    <p class="serif"><strong>Oops. Something went wrong.</strong></p>
    <?php endif; ?>

    <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js">
    </script>
    <script>
    (function(){
        new Clipboard('#copy-button');
    })();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>