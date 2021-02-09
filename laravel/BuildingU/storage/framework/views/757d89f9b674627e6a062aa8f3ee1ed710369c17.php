

<!DOCTYPE html>
<html>






    <?php




    ?>

<h1>Program Management Poral</h1>
<button onclick="window.location.href='/create'" type="button" class="btn btn-primary">Create a Program</button>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Program Name</th>
      <th scope="col">Program Area</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>

<?php $index = 0; ?>
    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
    <td scope="row"> <?php echo e($index=$index+1); ?> </td>
    <td ><a href="/Programs/<?php echo e($program['Program ID']); ?>" ><?php echo e($program['Program Title']); ?> </td>
    <td><?php echo e($program['Program Area']); ?> </td>
    <td><a href="/edit-program/<?php echo e($program['Program ID']); ?>/edit" ><button type="button" class="btn btn-primary">Edit</button></td>
    <td><a href="/delete-program/<?php echo e($program['Program ID']); ?>/delete" > <button type="button" class="btn btn-danger">Delete</button>
</td>

  </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>



<?php $__env->startSection('content'); ?>


<br>

<?php $__env->stopSection(); ?>

</html>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BU\InternshipProgram\laravel\BuildingU\resources\views/Programs/index.blade.php ENDPATH**/ ?>