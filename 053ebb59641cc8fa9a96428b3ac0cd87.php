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
    <main class="container">
        <nav class="month-tabs">
            <a href="<?php echo e(route('recap', 'all')); ?>" class="<?php echo e(request()->is('admin/recap/all') ? 'active' : ''); ?>">All</a>
            <?php $__currentLoopData = [
            '01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April',
            '05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus',
            '09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num => $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('recap', ['month' => $num])); ?>" class="<?php echo e(request('month') == $num ? 'active' : ''); ?>">
                <?php echo e($month); ?>

            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>

        <div class="table-container recap-table">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Berat</th>
                        <th class="text-center">Pesanan</th>
                        <th class="text-center">Layanan</th>
                        <th class="text-center">Total Harga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $pesanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                        <td class="text-center"><?php echo e($pesanan->id); ?></td>
                        <td class="text-center"><?php echo e($pesanan->nama); ?></td>
                        <td class="text-center"><?php echo e(\Carbon\Carbon::parse($pesanan->created_at)->translatedFormat('d-m-Y')); ?></td>
                        <td class="text-center"><?php echo e($pesanan->berat); ?> KG</td>
                        <td class="text-center"><?php echo e($pesanan->jenis_pemesanan); ?></td>
                        <td class="text-center"><?php echo e($pesanan->jenis_layanan); ?></td>
                        <td class="text-center">Rp. <?php echo e(number_format($pesanan->total_harga, 2, ',', '.')); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(route('receipt', $pesanan->id)); ?>" class="icon-btn" title="Download" target="_blank">
                                <img src="<?php echo e(asset('img/download-icon.svg')); ?>" alt="Download Receipt">
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="8" style="text-align:center; padding: 1rem; color: #888;">
                            Tidak ada data pesanan yang tersedia.
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>

    <script>

    </script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17c1215210e83e67d204dec124cc7e67)): ?>
<?php $attributes = $__attributesOriginal17c1215210e83e67d204dec124cc7e67; ?>
<?php unset($__attributesOriginal17c1215210e83e67d204dec124cc7e67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17c1215210e83e67d204dec124cc7e67)): ?>
<?php $component = $__componentOriginal17c1215210e83e67d204dec124cc7e67; ?>
<?php unset($__componentOriginal17c1215210e83e67d204dec124cc7e67); ?>
<?php endif; ?><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/adminPage/recap.blade.php ENDPATH**/ ?>