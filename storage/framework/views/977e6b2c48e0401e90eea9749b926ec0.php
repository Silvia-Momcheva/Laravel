<?php $__env->startSection('content'); ?>

<style>

  .uper {

    margin-top: 40px;

  }
  datalist {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  writing-mode: vertical-lr;
  width: 200px;
}
option {
  padding: 0;
}

input[type="range"] {
  width: 200px;
  margin: 0;
}
</style>

<div class="card uper">

  <div class="card-header">

    Add Music Data

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

      <form method="post" action="<?php echo e(route('musics.store')); ?>" enctype="multipart/form-data">
      <div class="form-group">



              <?php echo csrf_field(); ?>



              <label for="picture">Image:</label>

              <input type="file" class="form-control" name="picture"/>


          </div>
          <div class="form-group">
              <label for="song">Song:</label>

              <input type="text" class="form-control" name="song"/>

          </div>

          <div class="form-group">

              <label for="singer">Singer:</label>

              <input type="text" class="form-control" name="singer"/>

          </div>

          <div class="form-group">
            <label for="genre">Genre:</label>
            <select input type="text" class="form-control" name="genre">
                    <option value="pop">pop</option>
                    <option value="rock">rock</option>
                    <option value="jazz">jazz</option>
                    <option value="folk">folk</option>
            </select>
</div>




          </div>

          <div class="form-group">


              <label for="mp3">Music file:</label>

              <input type="file" class="form-control" name="mp3"/>

          </div>
          <br>
          <button type="submit" class="btn btn-primary">Add Song</button>

      </form>

  </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\music\resources\views/create.blade.php ENDPATH**/ ?>