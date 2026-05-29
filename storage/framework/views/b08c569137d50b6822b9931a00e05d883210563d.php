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
                <h3 class="card-title">Testimonial</h3>
                <a href="<?php echo e(url('admin/testimonial/create')); ?>" class="btn btn-primary float-right">Create</a>
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
                      <th>Country Name</th>
                      <th>Name</th>
                      <th>image</th>
                      <th>Designation</th>
                      <th>Comment heading</th>
                      <!-- <th>Comment content</th> -->
                      <th>Rating</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                     <td><?php echo e($row->country); ?></td>
                     <td><?php echo e($row->name); ?></td>
                     <td><img src="<?php echo e(URL::to('/')); ?>/uploads/testimonials/<?php echo e($row->image); ?>" alt="" class="img-responsive" width="80px" /></td>
                     <td><?php echo e($row->designation); ?></td>
                     <td><?php echo e($row->comment_head); ?></td>
                     <!-- <td><?php echo $row->comment_content; ?></td> -->
                     <td><?php echo e($row->rating); ?></td>
                     <td><?php echo e($row->status); ?></td>
                     <td style="min-width:100px">
                        <a href="<?php echo e(route('testimonial-edit', ['id'=>$row->id])); ?>" class="btn bg-gradient-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <button form="resource-delete-<?php echo e($row->id); ?>" class="btn bg-gradient-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        <form id="resource-delete-<?php echo e($row->id); ?>" action="<?php echo e(route('testimonial-destroy', ['id'=>$row->id])); ?>" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/testimonial/index.blade.php ENDPATH**/ ?>