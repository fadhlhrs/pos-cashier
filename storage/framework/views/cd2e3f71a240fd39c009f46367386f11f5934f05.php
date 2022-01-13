
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">New Transaction</h5>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" placeholder="Find Product">
                </div>
                <div class="col-12">
                    <ul class="list-group product-list">
                        <?php $__currentLoopData = $inventories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($inventory->stock != 0): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center active-list">
                            <div class="text-group">
                                <p class="m-0"><?php echo e($inventory->product_id); ?></p>
                                <p class="m-0"><?php echo e($inventory->product_name); ?></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ammount-box bg-secondary mr-1"><i class="mdi mdi-cube-outline"></i></span>
                                <p class="m-0"><?php echo e($inventory->stock); ?></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ammount-box bg-green mr-1"><i class="mdi mdi-coin"></i></span>
                                <p class="m-0">Rp. <?php echo e(number_format($inventory->price,2,',','.')); ?></p>
                            </div>
                            <a href="#" class="btn btn-icons btn-rounded btn-inverse-outline-primary font-weight-bold btn-pilih" role="button"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                            
                        <?php else: ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center active-list">
                            <div class="text-group">
                                <p class="m-0"><?php echo e($inventory->product_id); ?></p>
                                <p class="m-0 txt-light"><?php echo e($inventory->product_name); ?></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ammount-box bg-green mr-1"><i class="mdi mdi-coin"></i></span>
                                <p class="m-0">Rp. <?php echo e(number_format($inventory->price,2,',','.')); ?></p>
                            </div>
                            <a href="#" class="btn btn-icons btn-rounded btn-inverse-outline-primary font-weight-bold btn-pilih" role="button"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                        <?php endif; ?>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pos-cashier\resources\views/transaction.blade.php ENDPATH**/ ?>