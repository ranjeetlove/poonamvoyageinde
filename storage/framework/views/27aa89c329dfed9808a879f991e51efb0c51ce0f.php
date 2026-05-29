<?php $__env->startSection('title',
    'thankyou voyage inde découvrez nos lieux populaires
    '); ?>
<?php $__env->startSection('description',
    'Obtenez des informations détaillées sur les voyages en Inde avec un guide, ses attractions touristiques telles que la
    faune, les stations de montagne, les plages, l aventure, les pèlerins et les circuits inde ,
    '); ?>
<?php $__env->startSection('keywords',
    'touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage'); ?>
<?php $__env->startSection('content'); ?>

    <div class="thank-you-container" style="text-align: center; margin-top: 50px;">
        <h1>Merci!</h1>
        <p>Votre demande a été soumise avec succès.</p>
        <p>Nous apprécions votre intérêt et vous répondrons sous peu.</p>
        <a href="<?php echo e(url('/')); ?>" class="btn btn-primary"
            style="display: inline-block; margin-top: 20px;margin-bottom: 130px;">
            Retour à l'accueil
        </a>
    </div>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/frontend/thankyou.blade.php ENDPATH**/ ?>