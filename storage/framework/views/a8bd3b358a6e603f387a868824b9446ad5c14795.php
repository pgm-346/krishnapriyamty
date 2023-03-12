


<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Statement Deatils:</h2>

            </div>

        </div>

    </div><br>
    



    <table class="table table-bordered">

        <tr>

            <th>#</th>

            <th>DATETIME</th>

            <th>AMOUNT</th>

            <th>TYPE</th>

            <th>DETAILS</th>

            <th>BALANCE</th>

        </tr>

	    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	    <tr>

            <td><?php echo e($loop->iteration); ?></td>

	        <td><?php echo e($details->updated_at); ?></td>

	        <td><?php echo e($details->amount); ?></td>

            <td><?php echo e($details->type); ?></td>

            <td><?php echo e($details->details); ?></td>

            <td><?php echo e($details->balance); ?></td>
            

	    </tr>

	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>


   
                <?php echo $data->links(); ?>

          

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\banking-example\resources\views/statement/index.blade.php ENDPATH**/ ?>