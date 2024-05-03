<?php $__env->startSection('content'); ?>

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="uper">

  <?php if(session()->get('success')): ?>

    <div class="alert alert-success">

      <?php echo e(session()->get('success')); ?>


    </div><br />

  <?php endif; ?>
  <?php if(session()->get('error')): ?>

<div class="alert alert-danger">

  <?php echo e(session()->get('error')); ?>


</div><br />

<?php endif; ?>

<a href="<?php echo e(route('musics.create')); ?>" class="btn btn-success">ADD</a>

<div class="float-end">

  <?php echo e(Auth::user()->name); ?>


  <a href="<?php echo e(route('logout')); ?>" class="btn btn-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

    <?php echo e(__('Logout')); ?>


  </a>

  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">

    <?php echo csrf_field(); ?>

  </form>

</div>

  <table class="table table-striped">

    <thead>

        <tr>

          <td>ID</td>
          <!-- <td>Image</td> -->

          <td>Song</td>

          <td>Singer</td>

          <td>Genre &nbsp;&nbsp;&nbsp;</td>
          <td>Download</td>

          <td colspan="2">Action</td>

        </tr>

    </thead>

    <tbody>

        <?php $__currentLoopData = $musics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $music): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
            <td><?php echo e($music->id); ?>

                <?php if($music->image): ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<img src="./pics/<?php echo e($music->image); ?>" width="50">
<?php else: ?>
    <img src="https://img.icons8.com/color/help" width="50">

<?php endif; ?>  </td>



            <!-- <td><?php echo e($music->image); ?></td> -->
            <td><?php echo e($music->song); ?></td>
            <td><?php echo e($music->singer); ?></td>
            <td><?php echo e($music->genre); ?></td>
            <td>
            <?php if($music->link): ?>
            &nbsp;&nbsp;&nbsp;
<a href="./pics/<?php echo e($music->link); ?>" download><img src="https://img.icons8.com/color/download" width="30" /></a>

<?php else: ?>

<img src="https://img.icons8.com/color/help" width="50">

<?php endif; ?>
            </td>
            <td>
            <?php if(Auth::user()->isAdmin==1 || Auth::user()->id==$music->user_id): ?>
            <a href="<?php echo e(route('musics.edit', $music->id)); ?>" class="btn btn-primary">Edit</a>
            <?php endif; ?>
            </td>

            <td>
            <?php if(Auth::user()->isAdmin==1 || Auth::user()->id==$music->user_id): ?>
                <form action="<?php echo e(route('musics.destroy', $music->id)); ?>" method="post" onsubmit="return confirm('The record will be deleted');">

                  <?php echo csrf_field(); ?>

                  <?php echo method_field('DELETE'); ?>

                  <button class="btn btn-danger" type="submit">Delete</button>

                </form>
            <?php endif; ?>
            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

  </table>
  <?php echo e($musics->links()); ?>

<div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\music\resources\views/index.blade.php ENDPATH**/ ?>