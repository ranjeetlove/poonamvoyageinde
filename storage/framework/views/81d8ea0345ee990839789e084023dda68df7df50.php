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
                <h3 class="card-title">Contact Us List</h3>
                <!-- <a href="<?php echo e(url('admin/blog/create')); ?>" class="btn btn-primary float-right">Create</a> -->
              </div>
              <?php if(Session::has('flash_success')): ?>
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo e(Session::get('flash_success')); ?>

                  </div>
              <?php endif; ?>
             <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Whatsapp</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Date Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($index+1); ?>.</td>
                      <td><?php echo e($row->name); ?></td>
                      <td><?php echo e($row->email); ?></td>
                      <td><?php echo e($row->mobile); ?></td>
                      <td><?php echo e($row->whatsapp); ?></td>
                      <td><?php echo e(Str::limit($row->subject, 20)); ?></td>
                      <!-- <td><?php echo e($row->message); ?></td> -->
                      <td style="min-width:100px">
                        <span class="short-message"><?php echo e(Str::limit($row->message, 20)); ?></span>
                        <?php if(strlen($row->message) > 20): ?>
                            <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#messageModal" data-message="<?php echo e($row->message); ?>" class="read-more"><small>Read More</small></a>
                        <?php endif; ?>
                      </td>
                      <td style="min-width:160px"><?php echo e($row->created_at); ?></td>
                      <td style="min-width:100px">
                        <a href="<?php echo e(route('contact-details', $row->id)); ?>" class="btn bg-gradient-primary btn-sm" ><i style="color: white;" class="fas fa-eye"></i></a>
                        <button class="btn bg-gradient-danger btn-sm" form="resource-delete-<?php echo e($row->id); ?>"><i style="color: white;" class="fas fa-trash-alt"></i></button>
                        <form id="resource-delete-<?php echo e($row->id); ?>" action="<?php echo e(route('contact-delete', ['id'=>$row->id])); ?>" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/contact/index.blade.php ENDPATH**/ ?>