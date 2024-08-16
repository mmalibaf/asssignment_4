
<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Show Contact</h3>
                </div>
                <div class="card-body">
                    <p>ID: <?php echo e($contact->id); ?></p>
                    <p>Name: <?php echo e($contact->name); ?></p>
                    <p>Email: <?php echo e($contact->email); ?></p>
                    <p>Phone: <?php echo e($contact->phone); ?></p>
                    <p>Address: <?php echo e($contact->address); ?></p>
                    <p>Created At: <?php echo e($contact->created_at); ?></p>
                    <p>Updated At: <?php echo e($contact->updated_at); ?></p>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\ostad-app\SWO Murad\asssignment_4\resources\views/show.blade.php ENDPATH**/ ?>