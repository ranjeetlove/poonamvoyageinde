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
                <h3 class="card-title">All Leads</h3>
                <!-- <a href="<?php echo e(url('admin/blog/create')); ?>" class="btn btn-primary float-right">Create</a> -->
              </div>
              <?php if(Session::has('flash_success')): ?>
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo e(Session::get('flash_success')); ?>

                  </div>
              <?php endif; ?>
             <!-- /.card-header -->
              <div class="table-responsive">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Region</th>
                      <th>Interest</th>
                      <th>Accommodation</th>
                      <th>Budget</th>
                      <th>Children</th>
                      <th>Departure Date</th>
                      <th>Return Date</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Date Time</th>
                      <!-- <th>Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($index+1); ?>.</td>
                      <td><?php echo e($row->region); ?></td>
                      <td><?php echo e($row->interest); ?></td>
                      <td><?php echo e($row->accommodation); ?></td>
                      <td style="min-width:120px"><?php echo e($row->budget); ?></td>
                      <td><?php echo e($row->children); ?></td>
                      <td style="min-width:140px"><?php echo e($row->departure_date); ?></td>
                      <td style="min-width:120px"><?php echo e($row->return_date); ?></td>
                      <td><?php echo e($row->email); ?></td>
                      <td><?php echo e($row->phone); ?></td>
                      <td style="min-width:160px"><?php echo e($row->created_at); ?></td>
                      <!-- <td style="min-width:100px">
                      
                      </td> -->
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                <br>
                <?php echo e($data->links('pagination::bootstrap-4')); ?>

              </div>
              </div>
              <!-- /.card-body -->

        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section> 
  
<?php $__env->stopSection(); ?>      

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/leads/index.blade.php ENDPATH**/ ?>