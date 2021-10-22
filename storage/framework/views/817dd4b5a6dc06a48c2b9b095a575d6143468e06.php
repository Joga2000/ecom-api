<?php $__env->startSection('dashboard-content'); ?>
    <h1> Update product form </h1>

    <?php if(Session::get('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">
            <strong> <?php echo e(Session::get('success')); ?> </strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if(Session::get('failed')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
            <strong> <?php echo e(Session::get('failed')); ?> </strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(URL::to('post-product-edit-form')); ?>/ <?php echo e($product->id); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Product name</label>
            <input type="text" class="form-control" value="<?php echo e($product->name); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product name" name="productName">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Product Price</label>
            <input type="number" class="form-control" value="<?php echo e($product->price); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0.0" name="productPrice">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Product discount</label>
            <input type="number" class="form-control" value="<?php echo e($product->discount); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0.0" name="productDiscount">
        </div>

        <div>
            <label for="exampleInputEmail1">Select product category</label>
            <select class="form-control" name="category">
                <option>Select</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php if($category->id == $product->category_id): ?> selected <?php endif; ?> ><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Product Photo</label>
            <input type="file" class="form-control" name="productPhoto" onchange="loadPhoto(event)">
        </div>

        <div>
            <img id="photo" height="100" width="100">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Is Hot Product</label>
            <input type="checkbox" name="isHotProduct" <?php if($product->is_hot_product > 0): ?> checked <?php endif; ?> />
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Is New Arrival</label>
            <input type="checkbox" name="isNewArrival" <?php if($product->is_new_arrival > 0): ?> checked <?php endif; ?> />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        function loadPhoto(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('photo');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabriel\Desktop\Master Flutter\ecom-api\resources\views/product/edit.blade.php ENDPATH**/ ?>