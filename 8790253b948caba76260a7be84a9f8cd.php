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
        <section class="summary-cards">
            <div class="card">
                <h2>Pesanan Baru</h2>
                <p class="number"><?php echo e($pemesananBaru); ?></p>
            </div>
            <div class="card">
                <h2>Proses</h2>
                <p class="number"><?php echo e($pemesananProcess); ?></p>
            </div>
            <div class="card">
                <h2>Selesai</h2>
                <p class="number"><?php echo e($pemesananFinished); ?></p>
            </div>
        </section>

        <section class="order-history">
            <h2>Member Laundry</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Kostumer</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Total Berat</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td class="text-center"><?php echo e($member->nama); ?></td>
                            <td class="text-center"><?php echo e($member->email); ?></td>
                            <td class="text-center"><?php echo e($member->member); ?> KG</td>
                            <td class="text-center">
                                <form action="<?php echo e(route('deleteMember', $member->id)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="icon-btn" title="Hapus">
                                    <img src="img/trash-icon.svg" alt="delete member">
                                </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" style="text-align:center; padding: 1rem; color: #888;">
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
<?php endif; ?><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/adminPage/index.blade.php ENDPATH**/ ?>