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
        <section class="order-list-page">
            <h1 class="page-title">All Orders</h1>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center">Order Id</th>
                            <th class="text-center">Nama Kostumer</th>
                            <th class="text-center">Pesanan</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Total harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($pesan->id); ?></td>
                            <td class="text-center"><?php echo e($pesan->nama); ?></td>
                            <td class="text-center"><?php echo e($pesan->jenis_pemesanan); ?></td>
                            <td class="text-center"><?php echo e(\Carbon\Carbon::parse($pesan->created_at)->translatedFormat('d-m-Y')); ?></td>
                            <td class="text-center"><?php echo e($pesan->status); ?></td>
                            <td class="text-center"> <?php echo e($pesan->total_harga ? 'Rp. ' . number_format($pesan->total_harga, 2, ',', '.') : ''); ?></td>
                            <?php if($pesan->status == 'Pending'): ?>
                            <td class="text-center">
                                <a href="<?php echo e(route('edit', $pesan->id)); ?>" class="icon-btn" title="Lihat">
                                    <img src="img/detail-icon.svg" alt="detail order">
                                </a>
                                <form action="<?php echo e(route('delete', $pesan->id)); ?>" method="POST" style="display:inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="icon-btn" title="Hapus">
                                        <img src="img/trash-icon.svg" alt="delete order">
                                    </button>
                                </form>
                            </td>
                            <?php else: ?>
                            <td class="text-center">
                                <form action="<?php echo e(route('approve', $pesan->id)); ?>" method="POST" style="display:inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <button type="submit" class="icon-btn" title="approve">
                                        <img src="img/approve-icon.svg" alt="approve">
                                    </button>
                                </form>
                                <form action="<?php echo e(route('delete', $pesan->id)); ?>" method="POST" style="display:inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="icon-btn" title="Hapus">
                                        <img src="img/trash-icon.svg" alt="delete order">
                                    </button>
                                </form>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" style="text-align:center; padding: 1rem; color: #888;">
                                Tidak ada data pesanan yang tersedia.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17c1215210e83e67d204dec124cc7e67)): ?>
<?php $attributes = $__attributesOriginal17c1215210e83e67d204dec124cc7e67; ?>
<?php unset($__attributesOriginal17c1215210e83e67d204dec124cc7e67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17c1215210e83e67d204dec124cc7e67)): ?>
<?php $component = $__componentOriginal17c1215210e83e67d204dec124cc7e67; ?>
<?php unset($__componentOriginal17c1215210e83e67d204dec124cc7e67); ?>
<?php endif; ?><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/adminPage/daftarPesanan.blade.php ENDPATH**/ ?>