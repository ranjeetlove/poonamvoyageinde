
<?php $__env->startSection('content'); ?>
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <?php if(session()->has('status')): ?>
            <div class="alert alert-success">
              <?php echo e(session()->get('status')); ?>

            </div>
          <?php endif; ?>
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Videos</h3>
                <a href="<?php echo e(url('admin/video/create')); ?>" class="btn btn-primary float-right">Create</a>
              </div>
              <?php if(Session::has('flash_success')): ?>
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo e(Session::get('flash_success')); ?>

                  </div>
              <?php endif; ?>
             <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Video Name</th>
                      <th>URL</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($row->name); ?></td>
                      <td><?php echo e($row->video); ?></td>
                      <td><?php echo e($row->status); ?></td>
                      <td>
                        <a href="<?php echo e(route('video-edit', ['id'=>$row->id])); ?>" class="btn"><i class="fas fa-edit" style="color: blue;"></i></a>
                        <button form="resource-delete-<?php echo e($row->id); ?>"><i style="color: red;" class="fas fa-trash-alt"></i></button>
                        <form id="resource-delete-<?php echo e($row->id); ?>" action="<?php echo e(route('video-destroy', ['id'=>$row->id])); ?>" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('POST'); ?>
                        </form>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                <br>
                <?php echo e($data->links('pagination::bootstrap-4')); ?>

              </div>
              <!-- /.card-body -->

        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/video/index.blade.php ENDPATH**/ ?>