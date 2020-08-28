<?php $__env->startSection('title','profile'); ?>
<?php $__env->startSection('content'); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <?php if(Session::get('message')): ?>
<p class="alert alert-success"><?php echo e(Session('message')); ?></p>
  <?php endif; ?>
            <div class="well well-sm">
                <div class="row">
                    <?php if(Auth::user()->image): ?>
                    <div class="col-sm-6 col-md-4">
                        <img src="../images/<?php echo e(Auth::user()->image); ?>" alt="" class="img-rounded img-responsive" />
                        
                    </div>
                    <?php else: ?>
                    <style>.avatar {vertical-align: middle;width: 80px;height: 90px; margin-left: 20px;margin-right: 30px;}</style>
                    <img src="../images/I80W1Q0.png" alt="Avatar" class="avatar" st>
                    <?php endif; ?>
                    
                    
                    <div class="col-sm-6 col-md-8">
                        
                        <h1><?php echo e(Auth::user()->name); ?></h1>
                 
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i> <?php echo e(Auth::user()->email); ?>

                        </p>

                        <!-- Split button -->
                        <div class="btn-group">
                            <a class="btn btn-primary" href="user/profile/<?php echo e(Auth::user()->id); ?>">Edit</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/meditation/resources/views/profiles/profile.blade.php ENDPATH**/ ?>