

<?php $__env->startSection('content'); ?>


<h1>Create Program</h1>


<form action="/create" method="POST">
<?php echo csrf_field(); ?>
<div class="form-group">
  <label for="BuildingU Program Type">Program Type</label>
  <input type="text" class="form-control" id="BuildingU Program Type" name="BuildingU Program Type" value="">
</div>
  <div class="form-group">
    <label for="Program Title">Program Title</label>
    <input type="text" class="form-control" id="Program Title" name="Program Title" value="">
  </div>
  <div class="form-group">
    <label for="Program Area">Program Area</label>
    <input type="text" class="form-control" id="Program Area" name="Program Area" value="">
  </div>
  <div class="form-group">
    <label for="Program Skillset">Program Skillset</label>
    <input type="text" class="form-control" id="Program Skillset" name="Program Skillset" value="">
  </div>

  <div class="form-group">
  <label for="Program Start Date">Program Start Date</label>
    <input class="form-control" type="date" value="" id="Program Start Date" name="Program Start Date">
  </div>

  <div class="form-group">
  <label for="Program End Date">Program End Date</label>
    <input class="form-control" type="date" value="" id="Program End Date" name="Program End Date">
  </div>

  <div class="form-group">
    <label for="Program Skillset">Program Country</label>
    <input type="text" class="form-control" id="Program Country" name="Program Country" value="">
  </div>

  <div class="form-group">
    <label for="Program Skillset">Program City</label>
    <input type="text" class="form-control" id="Program City" name="Program City" value="">
  </div>

  <div class="form-group">
    <label for="Program Skillset">Program Address</label>
    <input type="text" class="form-control" id="Program Address" name="Program Address" value="">
  </div>

  <div class="form-group">
    <label for="Program Skillset">Program Hosting Organization</label>
    <input type="text" class="form-control" id="Program Hosting Organization" name="Program Hosting Organization" value="">
  </div>

  <div class="form-group">
    <label for="Program Enrollement Space">Program Enrollement Space</label>
      <input class="form-control" type="number" value="" id="Program Enrollement Space" name="Program Enrollement Space">
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Save</button>
</form>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BU\InternshipProgram\laravel\BuildingU\resources\views/Programs/create.blade.php ENDPATH**/ ?>