<h3>Profile Page</h3>

<p>Username: <?php echo e($user->name); ?></p>

<p>Email: <?php echo e($user->email); ?></p>

<p>Address: <?php echo e($user->getAddresses->address); ?> </p>

<p>Role:</p>

    <ul>

   <?php $__currentLoopData = $user->getRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

   		<li> <?php echo e($role->name); ?> </li>

   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

   </ul>


<h3>Posts:</h3>

<?php $__currentLoopData = $user->getPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

   <p> <?php echo e($post->body); ?> </p>

      <ul>
	   <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

	     <li><?php echo e($comment->body); ?> -- Commented By: <?php echo e($comment->getUser->name); ?></li>

	   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
     </ul>

   <hr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__currentLoopData = $user->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

   <p> <?php echo e($comment->body); ?> </p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<hr>
<b>All Comment by This User</b>

<?php $__currentLoopData = $user->commentsByUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

   <p> <?php echo e($comment->body); ?> </p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>