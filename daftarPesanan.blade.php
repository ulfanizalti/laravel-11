<x-adminLayouts>
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
                        @forelse($pemesanan as $pesan)
                        <tr>
                            <td class="text-center">{{ $pesan->id }}</td>
                            <td class="text-center">{{ $pesan->nama }}</td>
                            <td class="text-center">{{ $pesan->jenis_pemesanan}}</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($pesan->created_at)->translatedFormat('d-m-Y') }}</td>
                            <td class="text-center">{{ $pesan->status}}</td>
                            <td class="text-center"> {{ $pesan->total_harga ? 'Rp. ' . number_format($pesan->total_harga, 2, ',', '.') : '' }}</td>
                            @if($pesan->status == 'Pending')
                            <td class="text-center">
                                <a href="{{ route('edit', $pesan->id) }}" class="icon-btn" title="Lihat">
                                    <img src="img/detail-icon.svg" alt="detail order">
                                </a>
                                <form action="{{ route('delete', $pesan->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="icon-btn" title="Hapus">
                                        <img src="img/trash-icon.svg" alt="delete order">
                                    </button>
                                </form>
                            </td>
                            @else
                            <td class="text-center">
                                <form action="{{ route('approve', $pesan->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="icon-btn" title="approve">
                                        <img src="img/approve-icon.svg" alt="approve">
                                    </button>
                                </form>
                                <form action="{{ route('delete', $pesan->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="icon-btn" title="Hapus">
                                        <img src="img/trash-icon.svg" alt="delete order">
                                    </button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" style="text-align:center; padding: 1rem; color: #888;">
                                Tidak ada data pesanan yang tersedia.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</x-adminLayouts>