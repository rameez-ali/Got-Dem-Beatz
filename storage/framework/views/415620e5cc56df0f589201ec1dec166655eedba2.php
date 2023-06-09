<?php $__env->startSection('page_title', 'Pages'); ?>

<?php $__env->startSection('head_style'); ?>
<!-- Datatables -->
<link rel="stylesheet" href="<?php echo e(asset('admin_dashboard/assets/css/dataTables.bootstrap4.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('admin_dashboard/assets/css/responsive.bootstrap4.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('admin_dashboard/assets/css/buttons.bootstrap4.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hi Admin Welcome Back</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Pages</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- Messages -->
          <?php echo $__env->make('dashboard.admin.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Pages</h3>
              <div class="card-tools">
                <a href="<?php echo e(secure_url('/admin/page/add')); ?>" class="btn btn-primary">
                  <i class="fa fa-user mr-2"></i> Add new page
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e(++$key); ?>. </td>
                    <td><?php echo e($page->page_name); ?></td>
                    <td>
                      <?php if($page->status == 1): ?>
                      <span class="badge bg-success"><?php echo e(__('Active')); ?></span>
                      <?php else: ?>
                      <span class="badge bg-danger"><?php echo e(__('Deactive')); ?></span>
                      <?php endif; ?>
                    </td>
                    <td style="width: 11rem">
                      <a href="<?php echo e(secure_url('/admin/page/edit/'.$page->id)); ?>" class="btn btn-info btn-sm"><i
                          class="fas fa-edit mr-2"></i> Edit</a>

                      <a href="<?php echo e(secure_url('/admin/page/delete/'.$page->id)); ?>" class="btn btn-danger btn-sm"><i
                          class="fa fa-trash mr-2"></i> Delete</a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom_script'); ?>
<script src="<?php echo e(asset('admin_dashboard/assets/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_dashboard/assets/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_dashboard/assets/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_dashboard/assets/js/responsive.bootstrap4.min.js')); ?>"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/backendhostingla/public_html/webapp/beatpro/resources/views/dashboard/admin/site_pages/index.blade.php ENDPATH**/ ?>