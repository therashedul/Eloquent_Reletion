<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>one to many</title>
  </head>
  <body>
    <div class="continer">
        <div class="row"> 
            <div class="col-md-12">
            <a href="<?php echo e(route('reletion')); ?>">Home</a>
                <h1>One to Many</h1>
                    <table class="table">
                        <thead>
                            <tr>
                            
                            <th scope="col">Post</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php

                        ?>

                        <tbody>
                     <?php $__currentLoopData = $postComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($post->title); ?></td>
                                <td>
                                    <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php echo e($comment->id .','. $comment->comment.','); ?>

                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                <td>Action</td>
                            </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
            </div>
        </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\laravel8\resources\views/reletion/onetomany.blade.php ENDPATH**/ ?>