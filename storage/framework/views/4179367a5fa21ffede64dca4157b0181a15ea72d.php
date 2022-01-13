
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Transaction History</h5>
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Transaction ID</th>
                        <th scope="col ">Total Amount</th>
                        <th scope="col ">Total Price</th>
                        <th scope="col ">Total Payment</th>
                        <th scope="col ">Change</th>
                        <th scope="col ">Cashier</th>
                        <th scope="col ">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($transaction->id); ?></td>
                        <td><?php echo e($transaction->total_amount); ?></td>
                        <td><?php echo e($transaction->total_price); ?></td>
                        <td><?php echo e($transaction->total_payment); ?></td>
                        <td><?php echo e($transaction->change); ?></td>
                        <td><?php echo e($transaction->cashier_name); ?></td>
                        <td><?php echo e($transaction->created_at); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5">No Data</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pos-cashier\resources\views/history.blade.php ENDPATH**/ ?>