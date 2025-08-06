<?php echo $__env->make('admin.template.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<style>
    td{
        width: 200px;
    }
</style>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                <a href="<?php echo e(route('admin.card.create')); ?>" class="btn btn-success mt-3"> <i class="bi bi-plus-circle"></i> New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center; width: 10px;"><?php echo e($index + 1); ?></th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th><?php echo e($item->label1); ?></th>
                                <th><?php echo e($item->label2); ?></th>
                                <th><?php echo e($item->label3); ?></th>
                                <th><?php echo e($item->label4); ?></th>
                                <th><?php echo e($item->label5); ?></th>
                                <th><?php echo e($item->label6); ?></th>
                                <th><?php echo e($item->label7); ?></th>
                                <th><?php echo e($item->label8); ?></th>
                                <th><?php echo e($item->label9); ?></th>
                                <th><?php echo e($item->label10); ?></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td>
                                        <?php if($item->image1): ?>
                                                <img src="<?php echo e(asset('storage/' . $item->image1)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                        <?php endif; ?>
                                        <?php if($item->image2): ?>
                                                <img src="<?php echo e(asset('storage/' . $item->image2)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                        <?php endif; ?>
                                        <?php if($item->image3): ?>
                                                <img src="<?php echo e(asset('storage/' . $item->image3)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                        <?php endif; ?>
                                        <?php if($item->image4): ?>
                                                <img src="<?php echo e(asset('storage/' . $item->image4)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                        <?php endif; ?>
                                        <?php if($item->image5): ?>
                                                <img src="<?php echo e(asset('storage/' . $item->image5)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($item->desc1); ?></td>
                                    <td><?php echo e($item->desc2); ?></td>
                                    <td><?php echo e($item->desc3); ?></td>
                                    <td><?php echo e($item->desc4); ?></td>
                                    <td><?php echo e($item->desc5); ?></td>
                                    <td><?php echo e($item->desc6); ?></td>
                                    <td><?php echo e($item->desc7); ?></td>
                                    <td><?php echo e($item->desc8); ?></td>
                                    <td><?php echo e($item->desc9); ?></td>
                                    <td><?php echo e($item->desc10); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.card.edit', $item->id)); ?>" class="btn btn-warning"><i class="bi bi-pencil-square inline"></i></a>
                                        <form action="<?php echo e(route('admin.card.destroy', $item->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger mt-1"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            
                        </tbody>
                    </table>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php echo $__env->make('admin.template.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\imd_dev\resources\views\admin\card\list.blade.php ENDPATH**/ ?>