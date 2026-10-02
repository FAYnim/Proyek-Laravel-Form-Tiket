<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pembeli | iniKonser</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --bg: #fafafa;
            --surface: #ffffff;
            --ink: #0a0a0a;
            --ink-soft: #525252;
            --ink-mute: #a3a3a3;
            --line: #e5e5e5;
            --line-soft: #f0f0f0;
            --forest: #1e4d3b;
            --font: "Manrope", system-ui, sans-serif;
        }

        * { -webkit-tap-highlight-color: transparent; }

        body {
            font-family: var(--font);
            background: var(--bg);
            color: var(--ink);
            letter-spacing: -0.01em;
            min-height: 100vh;
        }

        button, a { font-family: inherit; }

        .dp-header {
            background: var(--surface);
            border-bottom: 1px solid var(--line);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .dp-header-inner {
            max-width: 920px;
            margin: 0 auto;
            padding: 1rem 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .dp-brand {
            font-weight: 800;
            font-size: 1.05rem;
            letter-spacing: -0.03em;
            color: var(--ink);
            text-decoration: none;
        }

        .dp-brand span { color: var(--forest); }

        .dp-back {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--ink-soft);
            text-decoration: none;
            padding: 0.4rem 0.85rem;
            border-radius: 999px;
            border: 1px solid var(--line);
            transition: color .15s ease, border-color .15s ease;
        }

        .dp-back:hover {
            color: var(--ink);
            border-color: var(--ink-mute);
        }

        .dp-main {
            max-width: 920px;
            margin: 0 auto;
            padding: 2.25rem 1.25rem 3.5rem;
        }

        .dp-title {
            font-size: 1.55rem;
            font-weight: 800;
            letter-spacing: -0.04em;
            margin: 0 0 0.35rem;
        }

        .dp-sub {
            color: var(--ink-mute);
            font-size: 0.9rem;
            font-weight: 500;
            margin: 0 0 1.5rem;
        }

        .dp-count {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--ink-soft);
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 0.35rem 0.8rem;
            margin-bottom: 1.25rem;
        }

        .dp-count i {
            width: 0.45rem;
            height: 0.45rem;
            border-radius: 50%;
            background: var(--forest);
        }

        .dp-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 0.9rem;
            overflow: hidden;
        }

        .dp-empty {
            padding: 3.5rem 1.5rem;
            text-align: center;
        }

        .dp-empty h3 {
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin: 0 0 0.4rem;
        }

        .dp-empty p {
            color: var(--ink-mute);
            font-size: 0.9rem;
            margin: 0 0 1.25rem;
        }

        .dp-table {
            margin: 0;
            width: 100%;
            border-collapse: collapse;
        }

        .dp-table thead th {
            background: var(--bg);
            border-bottom: 1px solid var(--line);
            color: var(--ink-mute);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.85rem 1.15rem;
            white-space: nowrap;
        }

        .dp-table tbody td {
            border-bottom: 1px solid var(--line-soft);
            padding: 1rem 1.15rem;
            font-size: 0.92rem;
            color: var(--ink-soft);
            vertical-align: middle;
        }

        .dp-table tbody tr:last-child td { border-bottom: 0; }

        .dp-table tbody tr:hover td { background: #fcfcfc; }

        .dp-name {
            font-weight: 700;
            color: var(--ink);
            letter-spacing: -0.02em;
        }

        .dp-event {
            font-size: 0.84rem;
            color: var(--ink-mute);
            margin-top: 0.15rem;
        }

        .dp-num {
            font-variant-numeric: tabular-nums;
            font-weight: 600;
            color: var(--ink);
            white-space: nowrap;
        }

        .dp-qty {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 1.85rem;
            height: 1.85rem;
            padding: 0 0.45rem;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: var(--bg);
            font-weight: 700;
            font-size: 0.82rem;
            color: var(--ink);
        }

        .dp-total {
            font-weight: 800;
            color: var(--ink);
            letter-spacing: -0.02em;
        }

        .dp-date {
            font-size: 0.8rem;
            color: var(--ink-mute);
            white-space: nowrap;
        }

        @media (max-width: 767.98px) {
            .dp-table thead { display: none; }

            .dp-table,
            .dp-table tbody,
            .dp-table tr,
            .dp-table td {
                display: block;
                width: 100%;
            }

            .dp-table tbody tr {
                border-bottom: 1px solid var(--line);
                padding: 0.85rem 0;
            }

            .dp-table tbody tr:last-child { border-bottom: 0; }

            .dp-table tbody td {
                border-bottom: 0;
                padding: 0.35rem 1.15rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 1rem;
            }

            .dp-table tbody td::before {
                content: attr(data-label);
                font-size: 0.7rem;
                font-weight: 700;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                color: var(--ink-mute);
                flex-shrink: 0;
            }

            .dp-table tbody td.dp-cell-main {
                display: block;
                padding-top: 0.5rem;
                padding-bottom: 0.65rem;
            }

            .dp-table tbody td.dp-cell-main::before { display: none; }
        }
    </style>
</head>
<body>

<header class="dp-header">
    <div class="dp-header-inner">
        <a class="dp-brand" href="{{ route('home') }}">ini<span>Konser</span></a>
        <a class="dp-back" href="{{ route('home') }}">← Kembali</a>
    </div>
</header>

<main class="dp-main">
    <h1 class="dp-title">Daftar Pembeli</h1>
    <p class="dp-sub">Riwayat pemesanan tiket yang tersimpan.</p>

    @if (session('success'))
        <div class="alert alert-success rounded-3 border-0 fw-semibold mb-3" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="dp-count">
        <i aria-hidden="true"></i>
        {{ $pembelian->count() }} pembelian
    </div>

    <div class="dp-card">
        @if ($pembelian->isEmpty())
            <div class="dp-empty">
                <h3>Belum ada pembelian</h3>
                <p>Data pembeli akan muncul di sini setelah ada pemesanan.</p>
                <a class="dp-back" href="{{ route('home') }}">Pesan tiket sekarang</a>
            </div>
        @else
            <div class="table-responsive">
                <table class="dp-table">
                    <thead>
                        <tr>
                            <th>Pembeli</th>
                            <th>Event</th>
                            <th>Jumlah</th>
                            <th>Harga / pcs</th>
                            <th>Total</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembelian as $item)
                            <tr>
                                <td class="dp-cell-main" data-label="Pembeli">
                                    <div class="dp-name">{{ $item->nama_pembeli }}</div>
                                </td>
                                <td data-label="Event">
                                    <div class="dp-event">{{ $item->nama_event }}</div>
                                </td>
                                <td data-label="Jumlah">
                                    <span class="dp-qty">{{ $item->jumlah_tiket }}</span>
                                </td>
                                <td data-label="Harga / pcs">
                                    <span class="dp-num">Rp{{ number_format($item->harga_tiket, 0, ',', '.') }}</span>
                                </td>
                                <td data-label="Total">
                                    <span class="dp-total">Rp{{ number_format($item->total_harga, 0, ',', '.') }}</span>
                                </td>
                                <td data-label="Waktu">
                                    <span class="dp-date">{{ $item->created_at?->format('d M Y, H:i') ?? '-' }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</main>

</body>
</html>
