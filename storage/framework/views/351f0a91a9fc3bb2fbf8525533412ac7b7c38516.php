
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

   <p><?php echo e($post->relationToUser->name); ?> -- <?php echo e($post->body); ?> </p>

       <ul>
	   <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

	     <li><?php echo e($comment->body); ?> -- Commented By: <?php echo e($comment->getUser->name); ?></li>

	   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	  </ul>

	  <hr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


