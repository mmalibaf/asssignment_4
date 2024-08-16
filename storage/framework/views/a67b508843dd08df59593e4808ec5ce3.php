
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="herader text-center mt-4">
            <h2>Contact Management Application</h2>
        </div>
        <div class="main-content">
            <div class="row mt-4 mb-3">
                <div class="col-md-4">
                    <form action="<?php echo e(route('contact.index')); ?>" method="get">
                        <div class="row">
                        <div class="form-group col-9">
                            <input type="text" name="search" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort By
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo e(route('contact.index', ['sort'=>'name', 'direction'=>request('direction')==='asc' ? 'desc':'asc'])); ?>">By Name</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('contact.index', ['sort' =>'name', 'direction'=>request('direction')==='asc'?'desc':'asc'])); ?>">By Create Time</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Ser No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    $i = ($contacts->perPage() * ($contacts->currentPage() - 1)) + 1;
                ?>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody >
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td><?php echo e($contact->created_at); ?></td>
                        <td class="text-center">
                            <a class="btn btn-success" href="<?php echo e(Route('contact.show', $contact->id)); ?>">Show</a>
                            <a class="btn btn-info" href="<?php echo e(Route('contact.edit', $contact->id)); ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo e(Route('contact.delete', $contact->id)); ?>">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php echo e($contacts->links()); ?>

        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\ostad-app\SWO Murad\asssignment_4\resources\views/index.blade.php ENDPATH**/ ?>