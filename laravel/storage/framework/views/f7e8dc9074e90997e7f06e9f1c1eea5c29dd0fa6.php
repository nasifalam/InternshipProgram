

<?php $__env->startSection('content'); ?>


<div class="admin-content">
    <div class="page-title">
        <h2>Manage Accounts</h2>
    </div>

    <table>
        <thead>
            <th>Name</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>User Role</th>
            <th colspan="2">Actions</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user-> name); ?></td>
                    <td><?php echo e($user-> email); ?></td>
                    <td><?php echo e($user-> password); ?></td>
                    <td><?php echo e($user-> role); ?></td>
                    <td><button class="btn edit">Edit</button></td>
                    <td><button class="btn delete">Delete</button></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jeff\Desktop\Andrew\building-u\UserLoginForm\laravel\resources\views/building-u/management.blade.php ENDPATH**/ ?>