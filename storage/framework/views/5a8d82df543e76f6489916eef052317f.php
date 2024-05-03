<?php $__env->startSection('content'); ?>

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="card uper">

  <div class="card-header">

    Edit Music Data

  </div>

  <div class="card-body">

    <?php if($errors->any()): ?>

      <div class="alert alert-danger">

        <ul>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <li><?php echo e($error); ?></li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

      </div><br />

    <?php endif; ?>

      <form method="post" action="<?php echo e(route('musics.update', $music->id)); ?>">

          <div class="form-group">

              <?php echo csrf_field(); ?>

              <?php echo method_field('PATCH'); ?>

              <label for="image">Image:</label>

              <input type="file" class="form-control" name="image" value="<?php echo e($music->image); ?>"/>
</div>
<div>
              <label for="song">Song:</label>

              <input type="text" class="form-control" name="song" value="<?php echo e($music->song); ?>"/>

          </div>

          <div class="form-group">

              <label for="singer">Singer:</label>

              <input type="text" class="form-control" name="singer" value="<?php echo e($music->singer); ?>"/>

          </div>

          <div class="form-group">

          <div class="form-group">
            <label for="genre">Genre:</label>
            <select input type="text" class="form-control" name="genre" value="<?php echo e($music->genre); ?>">
                    <option value="pop">pop</option>
                    <option value="rock">rock</option>
                    <option value="jazz">jazz</option>
                    <option value="folk">folk</option>
            </select>
</div>





           <div class="form-group">

<label for="link">Music file:</label>

<input type="file" class="form-control" name="link" value="<?php echo e($music->link); ?>"/>

</div>
          <button type="submit" class="btn btn-primary">Update Data</button>

      </form>

  </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\music\resources\views/edit.blade.php ENDPATH**/ ?>