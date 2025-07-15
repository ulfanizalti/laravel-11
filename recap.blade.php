<x-adminLayouts>
    <main class="container">
        <nav class="month-tabs">
            <a href="{{ route('recap', 'all') }}" class="{{ request()->is('admin/recap/all') ? 'active' : '' }}">All</a>
            @foreach([
            '01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April',
            '05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus',
            '09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'
            ] as $num => $month)
            <a href="{{ route('recap', ['month' => $num]) }}" class="{{ request('month') == $num ? 'active' : '' }}">
                {{ $month }}
            </a>
            @endforeach
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
                    @forelse($pesanans as $pesanan)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $pesanan->id }}</td>
                        <td class="text-center">{{ $pesanan->nama}}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($pesanan->created_at)->translatedFormat('d-m-Y') }}</td>
                        <td class="text-center">{{ $pesanan->berat }} KG</td>
                        <td class="text-center">{{ $pesanan->jenis_pemesanan }}</td>
                        <td class="text-center">{{ $pesanan->jenis_layanan }}</td>
                        <td class="text-center">Rp. {{ number_format($pesanan->total_harga, 2, ',', '.') }}</td>
                        <td class="text-center">
                            <a href="{{ route('receipt', $pesanan->id) }}" class="icon-btn" title="Download" target="_blank">
                                <img src="{{ asset('img/download-icon.svg') }}" alt="Download Receipt">
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" style="text-align:center; padding: 1rem; color: #888;">
                            Tidak ada data pesanan yang tersedia.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <script>

    </script>

</x-adminLayouts>