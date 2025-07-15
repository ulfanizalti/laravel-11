<?php if (isset($component)) { $__componentOriginald84c49e4b85d2243546f1787e7904117 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald84c49e4b85d2243546f1787e7904117 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts'); ?>
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

    <main class="contact-main">
        <div class="order-form-container">
            <h2>DAFTAR<br>MEMBER</h2>
            <form action="<?php echo e(route('member.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" id="nama-lengkap" placeholder="Masukkan Nama Anda" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" placeholder="Email@example.com" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" placeholder="Masukkan Kata Sandi Anda" name="password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Kata Sandi</label>
                    <input type="password" id="confirm-password" placeholder="Ulangi Kata Sandi" name="password_confirmation">
                </div>
                <div class="form-group">
                    <label>Pilih Paket Member</label>
                    <div class="radio-option">
                        <input type="radio" id="paket1" name="member" value="30" checked>
                        <label for="paket1">30 kg / Rp 150.000</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="paket2" name="member" value="50">
                        <label for="paket2">50 kg / Rp 250.000</label>
                    </div>
                </div>
                <div class="form-action">
                    <button type="submit" class="btn-finish">Selesai</button>
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
                    }, 6000); // visible for 4 seconds
                }
            });
        </script>
     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald84c49e4b85d2243546f1787e7904117)): ?>
<?php $attributes = $__attributesOriginald84c49e4b85d2243546f1787e7904117; ?>
<?php unset($__attributesOriginald84c49e4b85d2243546f1787e7904117); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald84c49e4b85d2243546f1787e7904117)): ?>
<?php $component = $__componentOriginald84c49e4b85d2243546f1787e7904117; ?>
<?php unset($__componentOriginald84c49e4b85d2243546f1787e7904117); ?>
<?php endif; ?><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/laundry/daftar_member.blade.php ENDPATH**/ ?>