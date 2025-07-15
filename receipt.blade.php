<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laundry Invoice</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            /* soft pink */
            font-family: 'Comic Sans MS', 'Fredoka', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .print-wrapper {
            position: absolute;
            width: 500px;
            height: 500px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        .invoice-card {
            background: #fff0f3;
            /* light pink inner */
            border-radius: 20px;
            padding: 2rem;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: auto;
        }

        .invoice-card h1 {
            font-size: 2rem;
            color: #e91e63;
            margin-bottom: 0.5rem;
        }

        .invoice-card h2 {
            font-size: 1rem;
            color: #444;
            margin-bottom: 1rem;
        }

        .invoice-details {
            text-align: left;
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 1rem;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }

        .invoice-table th,
        .invoice-table td {
            border: 1px solid #f8bbd0;
            padding: 0.5rem;
            font-size: 0.9rem;
        }

        .invoice-table th {
            background-color: #fce4ec;
            color: #d81b60;
        }

        .total {
            font-weight: bold;
            color: #d81b60;
            text-align: right;
            padding-right: 0.5rem;
        }

        .footer {
            font-size: 0.8rem;
            color: #777;
            margin-top: 0.5rem;
        }

        .btn-print {
            background-color: #d81b60;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .btn-print:hover {
            background-color: #c2185b;
        }

        @page {
            size: A4;
            margin: 0;
            /* Remove default print margins */
        }

        @media print {

            html,
            body {
                height: 100%;
                background: #ffe4e6 !important;
                /* soft pink background on print */
            }

            .btn-print {
                display: none;
            }

            body,
            .print-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .invoice-card {
                margin: auto;
                box-shadow: none;
                border: none;
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
    <div class="print-wrapper">
        <div class="invoice-card">
            <h1>Invoice</h1>
            <h2>Laundry Service</h2>
            <div class="invoice-details">
                <p><strong>Invoice To: </strong> {{ $pesanan->nama }}</p>
                <p><strong>No. Telp: </strong> {{ $pesanan->telp  }}</p>
                <p><strong>Date: </strong>{{ \Carbon\Carbon::parse($pesanan->created_at)->translatedFormat('j-M-Y') }}</p>
            </div>
            <table class="invoice-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Items</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $pesanan->jenis_pemesanan }}</td>
                        <td>Rp. {{ number_format($pesanan->total_harga, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="total">Total</td>
                        <td>Rp. {{ number_format($pesanan->total_harga, 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="footer">
                Terimakasih Sudah Membuat Pesan di IQ-LO Laundry.<br><br><br>
                <em>THANK YOU</em>
            </div>
        </div>
    </div>
</body>

</html>