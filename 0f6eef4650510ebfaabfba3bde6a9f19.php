<?php if (isset($component)) { $__componentOriginal17c1215210e83e67d204dec124cc7e67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17c1215210e83e67d204dec124cc7e67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.adminLayouts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('adminLayouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if($errors->any()): ?>
    <div id="error-popup" class="popup-error">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <main class="container">
        <div class="form-container">
            <h1 class="page-title">Laundry Packages</h1>
            <form action="<?php echo e(isset($pesanan) ? route('store',$pesanan->id) : '#'); ?>" method="<?php echo e(isset($pesanan) ? 'post' : 'get'); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="nama-pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama-pelanggan" name="nama" value="<?php echo e(isset($pesanan) ?  $pesanan->nama : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="jenis-pesanan">Jenis Pesanan</label>
                    <input type="text" id="jenis-pesanan" name="jenis_pemesanan" value="<?php echo e(isset($pesanan) ?  $pesanan->jenis_pemesanan : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="no-hp">No. Hp</label>
                    <input type="tel" id="no-hp" name="telp" value="<?php echo e(isset($pesanan) ?  $pesanan->telp : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="layanan">Layanan</label>
                    <input type="text" id="layanan" name="jenis_layanan" value="<?php echo e(isset($pesanan) ?  $pesanan->jenis_layanan : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="berat">Berat /Kg</label>
                    <input type="number" id="berat" name="berat" placeholder="Isi" step="0.01">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" id="harga" name="harga" placeholder="Isi">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-submit">
                        Konfirmasi<br>Pesanan
                    </button>
                </div>
            </form>
        </div>
    </main>

     <?php $__env->slot('javascript', null, []); ?> 
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const popup = document.getElementById('error-popup');
                if (popup) {
                    setTimeout(() => {
                        popup.style.transition = 'opacity 0.5s, transform 0.5s';
                        popup.style.opacity = 0;
                        popup.style.transform = 'translate(-50%, -20px)';
                        setTimeout(() => popup.remove(), 500);
                    }, 4000); // visible for 4 seconds
                }
            });
        </script>
     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17c1215210e83e67d204dec124cc7e67)): ?>
<?php $attributes = $__attributesOriginal17c1215210e83e67d204dec124cc7e67; ?>
<?php unset($__attributesOriginal17c1215210e83e67d204dec124cc7e67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17c1215210e83e67d204dec124cc7e67)): ?>
<?php $component = $__componentOriginal17c1215210e83e67d204dec124cc7e67; ?>
<?php unset($__componentOriginal17c1215210e83e67d204dec124cc7e67); ?>
<?php endif; ?><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/adminPage/pesananBaru.blade.php ENDPATH**/ ?>