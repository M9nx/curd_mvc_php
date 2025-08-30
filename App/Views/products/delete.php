<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">


            <?php if(isset($success)): ?>
            <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
            <?php endif; ?>
            <?php if(isset($error)): ?>
            <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
            <?php endif; ?>
            
            <?php if(!isset($success) && !isset($error) && isset($product)): ?>
            <div class="card mt-5">
                <div class="card-header bg-danger text-white">
                    <h4 class="text-center">تأكيد الحذف</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">هل أنت متأكد من حذف المنتج: <?php echo $product['name']; ?>؟</h5>
                    <p class="card-text text-center">هذا الإجراء لا يمكن التراجع عنه.</p>
                    <div class="text-center mt-4">
                        <a href="<?php echo url('/products/confirmDelete/'.$product['id']); ?>" class="btn btn-danger">نعم، احذف المنتج</a>
                        <a href="<?php echo url('/products'); ?>" class="btn btn-secondary">إلغاء</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>