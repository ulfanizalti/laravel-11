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
    <main>
        <div class="laundry">
            <img src="img/hero.jpg" alt="hero image" class="hero-img">
        </div>
        <section class="section-title">
            <h2>IQ-LO Laundry Menyelesaikan Segala Kebutuhan Cucianmu</h2>
            <p>Kami adalah layanan laundry profesional yang siap memenuhi kebutuhan kebersihan pakaian anda dengan cepat, mudah, dan terpercaya.</p>
        </section>

        <section class="services">
            <div class="service-card">
                <img src="img/1.png" alt="Laundry Express" class="services-img">
                <h3>Laundry Express</h3>
                <p>Layanan cepat dengan hasil bersih dalam waktu singkat, cocok untuk kebutuhan mendesak.</p>
            </div>
            <div class="service-card">
                <img src="img/2.png" alt="Laundry Biasa" class="services-img">
                <h3>Laundry Biasa</h3>
                <p>Layanan dengan waktu standar, menjaga kualitas cucian Anda dengan proses yang teliti.</p>
            </div>
        </section>

        <section class="services">
            <div class="service-card">
                <img src="img/3.png" alt="Laundry Member" class="services-img">
                <h3>Laundry Member</h3>
                <p>Layanan khusus bagi anggota dengan penawaran harga lebih hemat dan praktis.</p>
            </div>
        </section>

        <?php if(Auth::user()): ?>
        <a class="cta-button" href="<?php echo e(route('daftar_memberPage')); ?>">Daftar Sekarang</a>
        <?php else: ?>
        <a class="cta-button" href="<?php echo e(route('login')); ?>">Daftar Sekarang</a>
        <?php endif; ?>
    </main>

     <?php $__env->slot('footer', null, []); ?> 
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-section layanan-kami">
                    <h4>Pelayanan Kami:</h4>
                    <ul>
                        <li>> Laundry Express</li>
                        <li>> Laundry Member</li>
                        <li>> Laundry Kiloan</li>
                        <li>> Laundry Tas</li>
                        <li>> Laundry Sepatu</li>
                        <li>> Laundry Jas</li>
                        <li>> Laundry Bedcover dan sprey</li>
                        <li>> Laundry Handuk</li>
                    </ul>
                </div>

                <div class="footer-section kontak">
                    <div class="kontak-item">
                        <img src="img/map.png" alt="">
                        <p>Ruko Petak 3, Jl.Perkasa No 59 B, Kel, Jl. Bambu Kuning, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28151</p>
                    </div>
                    <div class="kontak-item">
                        <img src="img/phone.png" alt="">
                        <p>+62 812-3456-7890 (Contoh)</p>
                    </div>
                    <div class="kontak-item">
                        <img src="img/email.png" alt="">
                        <p>info@laundryanda.com (Contoh)</p>
                    </div>
                </div>
            </div>
        </footer>
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('javascript', null, []); ?> 
        <script>
            document.getElementById('signIn').addEventListener('click', function() {
                alert('Halaman Sign In masih dalam pengembangan.');
            });
            document.getElementById('register').addEventListener('click', function() {
                alert('Silakan daftar melalui admin IQ-LO Laundry.');
            });

            function myFunction() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
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
<?php endif; ?><?php /**PATH /Users/edysaputra/Documents/Data Ibad/The Net Ninja/PHP /LaundryProject/resources/views/welcome.blade.php ENDPATH**/ ?>