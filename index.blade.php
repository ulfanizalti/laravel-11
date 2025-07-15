<x-adminLayouts>
    <main class="container">
        <section class="summary-cards">
            <div class="card">
                <h2>Pesanan Baru</h2>
                <p class="number">{{ $pemesananBaru }}</p>
            </div>
            <div class="card">
                <h2>Proses</h2>
                <p class="number">{{ $pemesananProcess }}</p>
            </div>
            <div class="card">
                <h2>Selesai</h2>
                <p class="number">{{ $pemesananFinished }}</p>
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
                        @forelse($members as $member)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $member->nama }}</td>
                            <td class="text-center">{{ $member->email }}</td>
                            <td class="text-center">{{ $member->member}} KG</td>
                            <td class="text-center">
                                <form action="{{ route('deleteMember', $member->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="icon-btn" title="Hapus">
                                    <img src="img/trash-icon.svg" alt="delete member">
                                </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" style="text-align:center; padding: 1rem; color: #888;">
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