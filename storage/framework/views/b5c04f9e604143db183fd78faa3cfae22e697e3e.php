<?php $__env->startSection('page_title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Hi Admin Welcome Back</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'view.users')): ?>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Users</h3>

              <p>Manage Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo e(route('view.users')); ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'view.pages')): ?>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Site Pages</h3>

              <p>Manage Pages</p>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            <a href="<?php echo e(route('view.pages')); ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'view.blog.category')): ?>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Blogs</h3>

              <p>Manage Blogs</p>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            <a href="<?php echo e(route('blog.category.view')); ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'update.web.settings')): ?>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Web Settings</h3>

              <p>Manage Web Settings</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo e(route('edit.web-setting', 1)); ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php endif; ?>
      </div>
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottom_script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/backendhostingla/public_html/webapp/beatpro/resources/views/dashboard/admin/pages/index.blade.php ENDPATH**/ ?>