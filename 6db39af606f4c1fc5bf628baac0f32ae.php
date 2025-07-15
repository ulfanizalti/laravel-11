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
            <h2>ORDER<br>DISINI</h2>

            
            <?php if(session('error')): ?>
            <div class="popup-error" id="error-popup" >
                <?php echo e(session('error')); ?>

            </div>
            <?php endif; ?>

            <form action="<?php echo e(route('order.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="text" placeholder="Masukkan Nama Anda" name="nama">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Masukkan No. Telp Anda" name="telp">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Masukkan Email Anda" name="email">
                </div>

                
                <div class="form-group">
                    <input type="text" placeholder="Masukkan Alamat Penjemputan" name="alamat_penjemputan">
                </div>

                <div class="form-group">
                    <select name="jenis_layanan" id="jenis_layanan" required>
                        <option disabled selected>Jenis Layanan</option>
                        <option value="Biasa">Biasa</option>
                        <option value="Express">Express</option>
                        <option value="Member">Member</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="jenis_pemesanan" id="jenis_pemesanan" required disabled>
                        <option value="" disabled selected>Pilih Jenis Pesanan</option>
                        <option value="Cuci Setrika">Cuci Setrika</option>
                        <option value="Cuci Kering">Cuci Kering</option>
                        <option value="Setrika Saja">Setrika Saja</option>
                        <option value="Layanan Sepatu">Layanan Sepatu</option>
                        <option value="Layanan Tas">Layanan Tas</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" name="tanggal_penjemputan" placeholder="Tanggal Penjemputan" onfocus="(this.type='date')">
                </div>
                <div class="form-group">
                    <input type="text" name="jam_penjemputan" placeholder="Jam Penjemputan" onfocus="(this.type='time')">
                </div>
                <div class="form-group">
                    <label>Jenis Pengiriman</label>
                    <div class="inline-radio-group">
                        <div class="radio-option">
                            <input type="radio" id="antar" name="pengiriman" value="antar" checked>
                            <label for="antar">Antar</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="ambil" name="pengiriman" value="ambil">
                            <label for="ambil">Ambil di Laundry</label>
                        </div>
                    </div>
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-finish">Pesan</button>
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

            // script menyesuaikan jenis layanan dan pemesanan
            document.addEventListener('DOMContentLoaded', function() {
                const layananSelect = document.getElementById('jenis_layanan');
                const pemesananSelect = document.getElementById('jenis_pemesanan');
                const allPemesananOptions = Array.from(pemesananSelect.options).map(option => option.cloneNode(true));

                function updatePemesananOptions(selectedValue) {

                    pemesananSelect.innerHTML = '';

                    let filteredOptions;


                    switch (selectedValue) {
                        case 'Express':
                            filteredOptions = allPemesananOptions.filter(option =>
                                option.disabled || ['Layanan Sepatu', 'Layanan Tas'].includes(option.value)
                            );
                            break;

                        case 'Member':
                            filteredOptions = allPemesananOptions.filter(option =>
                                option.disabled || ['Cuci Setrika', 'Cuci Kering', 'Setrika Saja'].includes(option.value)
                            );
                            break;

                        case 'Biasa':
                        default:
                            filteredOptions = allPemesananOptions;
                            break;
                    }

                    filteredOptions.forEach(option => {
                        pemesananSelect.appendChild(option);
                    });

                    pemesananSelect.selectedIndex = 0;
                }



                layananSelect.addEventListener('change', function() {

                    // aktivasi pemesanan select setelah pilih jenis layanan
                    pemesananSelect.disabled = false;

                    updatePemesananOptions(this.value);
                });

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
<?php endif; ?><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/laundry/kontak_pemesanan.blade.php ENDPATH**/ ?>