
<p>Country name: <?php echo e($country->countryName); ?></p>

<p>City: </p>

<ul>

<?php $__currentLoopData = $country->city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

    <li> <?php echo e($city->cityName); ?> </li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

</ul>