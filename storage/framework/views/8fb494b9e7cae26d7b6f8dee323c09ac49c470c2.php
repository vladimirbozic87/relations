
<h3>Addresses</h3>

<h4> <?php echo e($addresses->address); ?> </h4>


<?php $__currentLoopData = $addresses->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

   <p> Post: <?php echo e($post->body); ?> -- Posted by: <?php echo e($post->relationToUser->name); ?></p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


