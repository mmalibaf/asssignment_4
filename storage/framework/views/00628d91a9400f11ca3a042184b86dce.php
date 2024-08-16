
<?php $__env->startSection('content'); ?>
    <div class="text-center mt-4">
        <h2>Edit contact</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="<?php echo e(Route('contact.update', $contact->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required placeholder="Enter Name" value="<?php echo e($contact->name); ?>">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" required placeholder="Enter Email" value="<?php echo e($contact->email); ?>">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" value="<?php echo e($contact->phone); ?>">
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php echo e($contact->address); ?>">
                </div>
                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-danger" value="Cancel">
                </div>
            </form>
        </div>
    </div>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\ostad-app\SWO Murad\asssignment_4\resources\views/edit.blade.php ENDPATH**/ ?>