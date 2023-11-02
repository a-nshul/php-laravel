<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Contact us Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('/student')); ?>" method="post">
      <?php echo csrf_field(); ?>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" required></br>
        <label>Mobile</label></br>
        <input type="number" name="mobile" id="mobile" class="form-control" required></br>
        <input type="submit" value="Submit" class="btn btn-success"></br>
    </form></br>
    <a href="<?php echo e(url('/student')); ?>" class="btn btn-primary">Back</a>
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('contacts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anshul/Desktop/laravel-php/practice/resources/views/contacts/create.blade.php ENDPATH**/ ?>