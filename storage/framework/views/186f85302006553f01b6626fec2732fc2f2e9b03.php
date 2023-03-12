


<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New  Withdarw:</h2>

</div>

        </div>

    </div>
    <?php if($message = Session::get('success')): ?>

<div class="alert alert-success">

    <p><?php echo e($message); ?></p>

</div>

<?php endif; ?>


    <?php if($errors->any()): ?>

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><?php echo e($error); ?></li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>


    <form action="<?php echo e(route('transfer.store')); ?>" method="POST">

    	<?php echo csrf_field(); ?>

        <div class="row">

         <div class="col-xs-6 col-sm-6 col-md-6">

         <div class="form-group">

        <strong>Email Address:</strong>

        <input type = "hidden" name = "user_id" value = "<?php echo e(Auth::user()->id); ?>">

        <input type="email" name="transfer_id" class="form-control" placeholder="example@gmail.com">

        <input type = "hidden" name = "details" value = "Transfer">

        </div>

     </div>

     <div class="col-xs-6 col-sm-6 col-md-6">

      <div class="form-group">
      <strong>Type:</strong>
     <select name="type">  
      <option value="debit">Debit</option>
      <option value="credit">Credit</option> 
      </select>
     </div>
     </div>

		    <div class="col-xs-6 col-sm-6 col-md-6">

		        <div class="form-group">

		            <strong>Transfer Amount:</strong>

		            <input type="text" name="amount" class="form-control" placeholder="Transfer Money">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-6 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">Transfer</button>

		    </div>

		</div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\banking-example\resources\views/transfer/index.blade.php ENDPATH**/ ?>