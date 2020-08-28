<?php $__env->startSection('title','edit'); ?>
<?php $__env->startSection('content'); ?>
    
<div class="col-sm-6">
  <?php if(Session::get('message')): ?>
<p class="alert alert-success"><?php echo e(Session('message')); ?></p>
  <?php endif; ?>
<form action="<?php echo e(url("profile/update/$user->id")); ?>" method="POST" enctype="multipart/form-data">

  <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" >
            </div>
        <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" aria-describedby="emailHelp" >
            </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id=""  name="email" aria-describedby="emailHelp" value="<?php echo e($user->email); ?>">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">Birthday</label>
          <input type="date" class="form-control" name="dob" value="">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" value="<?php echo e($user->password); ?>" name="password" >
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/meditation/resources/views/profiles/edit_profile.blade.php ENDPATH**/ ?>