

<?php $__env->startSection('content'); ?>


<h1>Edit Program</h1>


<form action="/edit" method="POST">
<?php echo csrf_field(); ?>
<input type="hidden"  id="Program ID" name="Program ID" value="<?php echo e($program['Program ID']); ?>">
<div class="form-group">
  <label for="BuildingU Program Type">BuildingU Program Type</label>
  <input type="text" class="form-control" id="BuildingU Program Type" name="BuildingU Program Type" value="<?php echo e($program['BuildingU Program Type']); ?>">
</div>
  <div class="form-group">
    <label for="Program Title">Program Title</label>
    <input type="text" class="form-control" id="Program Title" name="Program Title" value="<?php echo e($program['Program Title']); ?>">
  </div>
  <div class="form-group">
    <label for="Program Area">Program Area</label>
    <input type="text" class="form-control" id="Program Area" name="Program Area" value="<?php echo e($program['Program Area']); ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BU\InternshipProgram\laravel\BuildingU\resources\views/Programs/edit.blade.php ENDPATH**/ ?>