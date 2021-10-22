;
<?php $__env->startSection('dashboard-content'); ?>;

    <?php if(Session::get('deleted')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
            <strong> <?php echo e(Session::get('deleted')); ?> </strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if(Session::get('deleted-failed')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">
            <strong> <?php echo e(Session::get('deleted-failed')); ?> </strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Products
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th> Product Name </th>
                    <th> Product Price </th>
                    <th> Product Discount </th>
                    <th> Product Category </th>
                    <th> Product Photo </th>
                    <th> Action </th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th> Product Name </th>
                    <th> Product Price </th>
                    <th> Product Discount </th>
                    <th> Product Category </th>
                    <th> Product Photo </th>
                    <th> Action </th>
                </tr>
                </tfoot>
                <tbody>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->discount); ?></td>
                        <td><?php echo e($product->category->name); ?></td>
                        <td><img src="<?php echo e($product->photo); ?>" width="100" height="100"></td>
                        <td>
                            <a href="<?php echo e(URL::to('edit-product')); ?>/<?php echo e($product->id); ?>" class="btn btn-outline-primary btn-sm">Edit</a>
                            |
                            <a href="<?php echo e(URL::to('delete-product')); ?>/<?php echo e($product->id); ?>" class="btn btn-outline-danger btn-sm" onclick="checkDelete()">Delete</a>
                        </td>
                    </tr>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
        </div>
    </div>

    <script>
        function checkDelete(){
            var check = confirm('Are you sure you want to Delete this?');
            if(check){
                return true;
            }
            return false;
        }
    </script>

<?php $__env->stopSection(); ?>;

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabriel\Desktop\Master Flutter\ecom-api\resources\views/product/index.blade.php ENDPATH**/ ?>