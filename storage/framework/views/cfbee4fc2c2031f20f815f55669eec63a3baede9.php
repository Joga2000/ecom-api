<?php $__env->startSection('dashboard-content'); ?>
    <h1> Update category form </h1>

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

    <form action="<?php echo e(URL::to('update-category')); ?>/<?php echo e($category->id); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Category name</label>
            <input type="text" class="form-control" value="<?php echo e($category->name); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name" name="categoryName">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Category Icon</label>
            <input type="file" class="form-control" name="categoryIcon" onchange="loadPhoto(event)">
        </div>

        <div>
            <img id="photo" height="100" width="100">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabriel\Desktop\Master Flutter\ecom-api\resources\views/category/edit.blade.php ENDPATH**/ ?>