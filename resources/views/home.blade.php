<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan Tiket — Remember Fest 2026 | iniKonser</title>
    <meta name="description" content="Pesan tiket Remember Fest 2026 x Concert di iniKonser. One Day Pass, Two Day Pass, dan Standing VIP.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500;1,9..144,600&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --paper: #f3efe6;
            --paper-deep: #ebe4d6;
            --card: #faf7f0;
            --ink: #1c2b26;
            --ink-soft: #4a5c55;
            --ink-mute: #8a958f;
            --line: #d9d0be;
            --line-soft: #e6dfd0;
            --forest: #1e4d3b;
            --forest-deep: #143528;
            --gold: #b8923a;
            --gold-soft: rgba(184, 146, 58, 0.16);
            --ok: #1e4d3b;
            --ok-bg: #e4efe8;
            --sold: #8a7e6e;
            --sold-bg: #efe9dc;
            --font-display: "Fraunces", Georgia, serif;
            --font-body: "Outfit", system-ui, sans-serif;
            --max: 1080px;
            --radius: 1.1rem;
        }

        * { -webkit-tap-highlight-color: transparent; }
        html { scroll-behavior: smooth; }

        body {
            font-family: var(--font-body);
            background: var(--paper);
            color: var(--ink);
            letter-spacing: -0.01em;
            min-height: 100vh;
            background-image:
                radial-gradient(ellipse 80% 50% at 50% -5%, rgba(184, 146, 58, 0.08), transparent 55%),
                radial-gradient(circle at 100% 0%, rgba(30, 77, 59, 0.05), transparent 40%);
            background-attachment: fixed;
        }

        button, a { font-family: inherit; }

        /* Header */
        .ik-header {
            position: sticky;
            top: 0;
            z-index: 1030;
            background: rgba(243, 239, 230, 0.9);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--line);
        }

        .ik-header-inner {
            max-width: var(--max);
            margin: 0 auto;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .ik-logo {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            text-decoration: none;
            color: var(--ink);
        }

        .ik-logo-mark {
            width: 2.15rem;
            height: 2.15rem;
            flex-shrink: 0;
        }

        .ik-logo-text {
            font-family: var(--font-display);
            font-weight: 600;
            font-size: 1.35rem;
            letter-spacing: -0.03em;
            line-height: 1;
            font-optical-sizing: auto;
        }

        .ik-logo-text em {
            font-style: italic;
            color: var(--forest);
        }

        .ik-nav {
            display: flex;
            align-items: center;
            gap: 0.15rem;
        }

        .ik-nav-link {
            color: var(--ink-soft);
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 500;
            padding: 0.45rem 0.9rem;
            border-radius: 999px;
            transition: color .15s ease, background .15s ease;
        }

        .ik-nav-link:hover {
            color: var(--forest);
            background: var(--gold-soft);
        }

        .ik-lang {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.45rem 0.85rem;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: var(--card);
            font-weight: 600;
            font-size: 0.8rem;
            color: var(--ink-soft);
            text-decoration: none;
            letter-spacing: 0.08em;
            transition: border-color .15s ease, color .15s ease;
        }

        .ik-lang:hover {
            border-color: var(--forest);
            color: var(--forest);
        }

        .ik-flag {
            width: 0.95rem;
            height: 0.95rem;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
        }

        @media (max-width: 767.98px) {
            .ik-nav-link { display: none; }
        }

        /* Stepper */
        .ik-stepper {
            border-bottom: 1px solid var(--line);
            background: rgba(235, 228, 214, 0.55);
        }

        .ik-stepper-inner {
            max-width: var(--max);
            margin: 0 auto;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.2rem;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .ik-stepper-inner::-webkit-scrollbar { display: none; }

        .ik-step {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            white-space: nowrap;
            font-size: 0.86rem;
            font-weight: 500;
            color: var(--ink-mute);
        }

        .ik-step.is-active {
            color: var(--ink);
            font-weight: 600;
        }

        .ik-step-num {
            width: 1.65rem;
            height: 1.65rem;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-size: 0.78rem;
            font-weight: 600;
            border: 1.5px solid var(--line);
            color: var(--ink-mute);
            background: var(--card);
            flex-shrink: 0;
        }

        .ik-step.is-active .ik-step-num {
            background: var(--forest);
            border-color: var(--forest);
            color: var(--paper);
            box-shadow: 0 0 0 4px rgba(30, 77, 59, 0.12);
        }

        .ik-step.is-done .ik-step-num {
            border-color: var(--gold);
            color: var(--gold);
        }

        .ik-step-sep {
            margin: 0 0.5rem;
            color: var(--line);
            font-size: 0.72rem;
            flex-shrink: 0;
        }

        /* Main */
        .ik-main {
            max-width: var(--max);
            margin: 0 auto;
            padding: 2.5rem 1.5rem 4rem;
        }

        /* Hero */
        .ik-hero {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 300px;
            gap: 1.25rem;
            align-items: stretch;
            margin-bottom: 3.5rem;
        }

        @media (max-width: 991.98px) {
            .ik-hero { grid-template-columns: 1fr; }
        }

        .ik-banner {
            position: relative;
            overflow: hidden;
            border-radius: calc(var(--radius) + 0.2rem);
            border: 1px solid var(--line);
            background:
                linear-gradient(160deg, var(--card) 0%, var(--paper-deep) 100%);
            padding: 2rem 1.9rem 1.75rem;
            display: flex;
            flex-direction: column;
            min-height: 350px;
        }

        .ik-banner::before {
            content: "";
            position: absolute;
            top: -30%;
            right: -8%;
            width: 50%;
            height: 100%;
            background: radial-gradient(ellipse, rgba(184, 146, 58, 0.22) 0%, transparent 65%);
            pointer-events: none;
        }

        .ik-banner-frame {
            position: absolute;
            inset: 0.75rem;
            border: 1px solid rgba(184, 146, 58, 0.35);
            border-radius: calc(var(--radius) - 0.15rem);
            pointer-events: none;
        }

        .ik-banner-frame::before,
        .ik-banner-frame::after {
            content: "";
            position: absolute;
            width: 12px;
            height: 12px;
            border: 1.5px solid var(--gold);
        }

        .ik-banner-frame::before {
            top: -1px;
            left: -1px;
            border-right: 0;
            border-bottom: 0;
        }

        .ik-banner-frame::after {
            bottom: -1px;
            right: -1px;
            border-left: 0;
            border-top: 0;
        }

        .ik-banner-top {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 1rem;
        }

        .ik-live {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--gold);
        }

        .ik-live-dot {
            width: 0.45rem;
            height: 0.45rem;
            border-radius: 50%;
            background: var(--gold);
            animation: ik-pulse 2s ease-out infinite;
        }

        @keyframes ik-pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.35; }
        }

        .ik-date-chip {
            font-family: var(--font-display);
            font-weight: 600;
            font-style: italic;
            font-size: 0.95rem;
            color: var(--forest);
            border-bottom: 1px solid var(--gold);
            padding-bottom: 0.15rem;
        }

        .ik-banner-title {
            position: relative;
            z-index: 1;
            margin: 1.6rem 0 0;
            font-family: var(--font-display);
            font-weight: 600;
            line-height: 0.95;
            letter-spacing: -0.035em;
        }

        .ik-banner-title .l1 {
            display: block;
            font-size: clamp(2.5rem, 6vw, 4.1rem);
            color: var(--ink);
        }

        .ik-banner-title .l1 em {
            font-style: italic;
            font-weight: 500;
            color: var(--forest);
        }

        .ik-banner-title .l2 {
            display: flex;
            align-items: center;
            gap: 0.65rem;
            margin-top: 0.75rem;
            font-size: clamp(1.2rem, 2.5vw, 1.55rem);
            font-weight: 600;
            letter-spacing: -0.025em;
            color: var(--ink-soft);
        }

        .ik-x {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 1.9rem;
            height: 1.9rem;
            border-radius: 50%;
            border: 1px solid var(--gold);
            color: var(--gold);
            font-family: var(--font-display);
            font-size: 1.05rem;
            font-weight: 600;
            flex-shrink: 0;
        }

        .ik-banner-sub {
            display: block;
            margin-top: 0.35rem;
            font-family: var(--font-body);
            font-size: 0.88rem;
            font-weight: 500;
            letter-spacing: 0.02em;
            color: var(--ink-mute);
        }

        .ik-price-row {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.85rem;
            margin-top: auto;
            padding-top: 2.15rem;
        }

        @media (max-width: 575.98px) {
            .ik-price-row { grid-template-columns: 1fr; }
        }

        .ik-price-block {
            background: rgba(250, 247, 240, 0.7);
            border: 1px solid var(--line);
            border-radius: 0.95rem;
            padding: 1.05rem 1rem;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        .ik-price-block:hover {
            border-color: var(--gold);
            box-shadow: 0 8px 24px -16px rgba(184, 146, 58, 0.55);
        }

        .ik-price-block .tag {
            display: block;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--ink-mute);
            margin-bottom: 0.45rem;
        }

        .ik-price-block .amount {
            font-family: var(--font-display);
            font-size: clamp(1.65rem, 2.8vw, 2rem);
            font-weight: 600;
            letter-spacing: -0.03em;
            line-height: 1;
            color: var(--ink);
        }

        .ik-price-block .unit {
            font-family: var(--font-body);
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--gold);
            letter-spacing: 0.02em;
        }

        .ik-banner-meta {
            position: relative;
            z-index: 1;
            margin-top: 1.35rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.45rem 1.25rem;
        }

        .ik-meta {
            display: inline-flex;
            align-items: center;
            gap: 0.42rem;
            font-size: 0.86rem;
            font-weight: 500;
            color: var(--ink-soft);
        }

        .ik-meta svg {
            width: 0.95rem;
            height: 0.95rem;
            color: var(--gold);
            flex-shrink: 0;
        }

        /* CTA */
        .ik-cta-card {
            background: var(--forest);
            border: 1px solid var(--forest-deep);
            border-radius: calc(var(--radius) + 0.2rem);
            padding: 1.65rem 1.45rem;
            display: flex;
            flex-direction: column;
            color: var(--paper);
            position: sticky;
            top: 5.5rem;
            box-shadow: 0 20px 40px -24px rgba(20, 53, 40, 0.55);
        }

        .ik-cta-label {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
            margin-bottom: 1.25rem;
            padding-bottom: 1.25rem;
            border-bottom: 1px dashed rgba(243, 239, 230, 0.2);
        }

        .ik-cta-label span {
            color: rgba(243, 239, 230, 0.65);
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .ik-cta-label strong {
            font-family: var(--font-display);
            font-size: 1.9rem;
            font-weight: 600;
            letter-spacing: -0.03em;
            color: var(--paper);
            line-height: 1;
        }

        .ik-btn-cta {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.55rem;
            width: 100%;
            border: 1px solid var(--gold);
            border-radius: 999px;
            background: var(--gold);
            color: var(--forest-deep);
            font-weight: 700;
            font-size: 0.95rem;
            padding: 0.95rem 1rem;
            letter-spacing: 0.02em;
            transition: background .15s ease, border-color .15s ease, transform .15s ease, box-shadow .2s ease;
            box-shadow: 0 10px 28px -14px rgba(184, 146, 58, 0.7);
        }

        .ik-btn-cta:hover, .ik-btn-cta:focus {
            background: #c9a44a;
            border-color: #c9a44a;
            color: var(--forest-deep);
            transform: translateY(-1px);
            box-shadow: 0 14px 32px -14px rgba(184, 146, 58, 0.85);
        }

        .ik-cta-note {
            margin: 1.05rem 0 0;
            font-size: 0.78rem;
            color: rgba(243, 239, 230, 0.55);
            text-align: center;
            line-height: 1.5;
        }

        /* Section */
        .ik-section-head {
            margin-bottom: 1.4rem;
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .ik-section-head h2 {
            margin: 0;
            font-family: var(--font-display);
            font-size: clamp(1.55rem, 3vw, 2rem);
            font-weight: 600;
            letter-spacing: -0.03em;
        }

        .ik-section-head h2 em {
            font-style: italic;
            font-weight: 500;
            color: var(--forest);
        }

        .ik-section-count {
            font-size: 0.82rem;
            font-weight: 500;
            color: var(--ink-mute);
            letter-spacing: 0.04em;
        }

        /* Tickets */
        .ik-ticket {
            position: relative;
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 1.4rem 1.5rem;
            margin-bottom: 0.85rem;
            transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
        }

        .ik-ticket::before {
            content: "";
            position: absolute;
            left: 0;
            top: 1.25rem;
            bottom: 1.25rem;
            width: 3px;
            border-radius: 0 2px 2px 0;
            background: var(--gold);
            opacity: 0;
            transition: opacity .2s ease;
        }

        .ik-ticket:hover {
            border-color: var(--gold);
            box-shadow: 0 16px 36px -24px rgba(28, 43, 38, 0.35);
            transform: translateY(-2px);
        }

        .ik-ticket:hover::before { opacity: 1; }

        .ik-ticket.is-sold {
            background: var(--paper-deep);
        }

        .ik-ticket.is-sold:hover {
            border-color: var(--line);
            box-shadow: none;
            transform: none;
        }

        .ik-ticket.is-sold::before { display: none; }

        .ik-ticket-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 0.2rem;
        }

        .ik-badge {
            display: inline-flex;
            align-items: center;
            font-weight: 700;
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.32rem 0.75rem;
            border-radius: 999px;
            flex-shrink: 0;
        }

        .ik-badge.is-sale {
            background: var(--ok-bg);
            color: var(--ok);
            border: 1px solid rgba(30, 77, 59, 0.18);
        }

        .ik-badge.is-sold {
            background: var(--sold-bg);
            color: var(--sold);
            border: 1px solid var(--line);
        }

        .ik-ticket-name {
            font-family: var(--font-display);
            font-weight: 600;
            font-size: 1.2rem;
            letter-spacing: -0.025em;
            color: var(--ink);
            line-height: 1.3;
            margin: 0.55rem 0 0;
        }

        .ik-ticket.is-sold .ik-ticket-name {
            color: var(--ink-soft);
        }

        .ik-dash {
            border-top: 1px solid var(--line-soft);
            margin: 1.05rem 0;
        }

        .ik-price-row-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .ik-price-card {
            font-family: var(--font-display);
            font-size: 1.55rem;
            font-weight: 600;
            letter-spacing: -0.03em;
            color: var(--ink);
        }

        .ik-btn-pilih {
            border: 1px solid var(--forest);
            background: var(--forest);
            color: var(--paper);
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0.65rem 1.5rem;
            border-radius: 999px;
            min-width: 6.75rem;
            letter-spacing: 0.03em;
            transition: background .15s ease, color .15s ease, border-color .15s ease;
        }

        .ik-btn-pilih:hover, .ik-btn-pilih:focus {
            background: transparent;
            color: var(--forest);
        }

        .ik-sold-tag {
            display: inline-flex;
            align-items: center;
            font-weight: 600;
            font-size: 0.88rem;
            color: var(--sold);
            border: 1px dashed var(--line);
            padding: 0.55rem 1.1rem;
            border-radius: 999px;
        }

        /* Accordion */
        .ik-acc {
            background: transparent;
            border: 0;
        }

        .ik-acc .accordion-item {
            background: transparent;
            border: 0;
        }

        .ik-acc .accordion-button {
            background: transparent;
            box-shadow: none !important;
            padding: 0.95rem 0.1rem 0.35rem;
            font-family: var(--font-display);
            font-weight: 600;
            font-style: italic;
            font-size: 0.95rem;
            letter-spacing: 0.01em;
            color: var(--ink-mute);
        }

        .ik-acc .accordion-button:not(.collapsed) {
            background: transparent;
            color: var(--forest);
        }

        .ik-acc .accordion-button::after {
            background-size: 0.75rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%238a958f'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .ik-acc .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%231e4d3b'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .ik-acc .accordion-body {
            padding: 0.2rem 0.1rem 0.3rem;
            color: var(--ink-soft);
            font-size: 0.92rem;
            line-height: 1.7;
        }

        .ik-acc .accordion-body ul {
            margin: 0;
            padding-left: 1.1rem;
        }

        .ik-acc .accordion-body li + li { margin-top: 0.3rem; }

        .ik-acc .accordion-body li::marker {
            color: var(--gold);
        }

        .ik-acc .accordion-body .lead-line {
            color: var(--ink-soft);
            margin-bottom: 0.4rem;
        }

        /* Footer */
        .ik-footer {
            border-top: 1px solid var(--line);
            background: var(--paper-deep);
            padding: 2.85rem 1.5rem 2rem;
            text-align: center;
        }

        .ik-footer-logo {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            color: var(--ink);
            text-decoration: none;
            margin-bottom: 1.35rem;
        }

        .ik-footer-logo .ik-logo-text { font-size: 1.45rem; }

        .ik-footer-contacts {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.55rem 1.6rem;
            margin-bottom: 1.85rem;
        }

        .ik-footer-contacts a {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            color: var(--ink-soft);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.92rem;
            transition: color .15s ease;
        }

        .ik-footer-contacts a:hover { color: var(--forest); }

        .ik-footer-contacts svg {
            width: 1rem;
            height: 1rem;
            flex-shrink: 0;
        }

        .ik-copy {
            color: var(--ink-mute);
            font-size: 0.82rem;
            padding-top: 1.3rem;
            border-top: 1px solid var(--line);
            margin: 0 auto;
            max-width: 36rem;
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* Alert */
        .ik-alert {
            max-width: var(--max);
            margin: 1.25rem auto 0;
            padding: 0.95rem 1.15rem;
            border-radius: 0.85rem;
            border: 1px solid rgba(30, 77, 59, 0.25);
            background: var(--ok-bg);
            color: var(--ok);
            font-weight: 600;
            font-size: 0.92rem;
        }

        .ik-alert.is-error {
            border-color: rgba(160, 50, 40, 0.3);
            background: #f8ebe8;
            color: #8b2e22;
        }

        /* Modal */
        .modal-backdrop.show { opacity: 0.55; }

        .ik-modal .modal-content {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 1.15rem;
            color: var(--ink);
            overflow: hidden;
            box-shadow: 0 30px 60px -30px rgba(28, 43, 38, 0.45);
        }

        .ik-modal .modal-header {
            border-bottom: 1px solid var(--line-soft);
            padding: 1.25rem 1.4rem 1rem;
        }

        .ik-modal .modal-title {
            font-family: var(--font-display);
            font-weight: 600;
            letter-spacing: -0.03em;
            font-size: 1.45rem;
        }

        .ik-modal .modal-title em {
            font-style: italic;
            color: var(--forest);
        }

        .ik-modal .btn-close {
            filter: none;
            opacity: 0.55;
        }

        .ik-modal .btn-close:focus { box-shadow: none; }

        .ik-modal .modal-body {
            padding: 1.25rem 1.4rem 0.35rem;
        }

        .ik-modal .modal-footer {
            border-top: 1px solid var(--line-soft);
            padding: 1.1rem 1.4rem 1.35rem;
            gap: 0.65rem;
        }

        .ik-form-label {
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--ink-mute);
            margin-bottom: 0.4rem;
        }

        .ik-form-control,
        .ik-form-select {
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: 0.75rem;
            color: var(--ink);
            font-family: var(--font-body);
            font-weight: 500;
            padding: 0.72rem 0.95rem;
        }

        .ik-form-control:focus,
        .ik-form-select:focus {
            background: var(--card);
            border-color: var(--forest);
            color: var(--ink);
            box-shadow: 0 0 0 3px rgba(30, 77, 59, 0.12);
        }

        .ik-form-control::placeholder { color: var(--ink-mute); }

        .ik-form-control.is-invalid,
        .ik-form-select.is-invalid {
            border-color: #a03228;
        }

        .ik-invalid-feedback {
            font-size: 0.8rem;
            color: #8b2e22;
            font-weight: 500;
        }

        .ik-form-hint {
            font-size: 0.8rem;
            color: var(--ink-mute);
        }

        .ik-total-box {
            margin-top: 1rem;
            padding: 1rem 1.05rem;
            border-radius: 0.85rem;
            border: 1px dashed var(--gold);
            background: var(--gold-soft);
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 1rem;
        }

        .ik-total-box span {
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--ink-soft);
        }

        .ik-total-box strong {
            font-family: var(--font-display);
            font-size: 1.45rem;
            font-weight: 600;
            letter-spacing: -0.03em;
            color: var(--ink);
        }

        .ik-btn-cancel {
            border: 1px solid var(--line);
            background: var(--paper);
            color: var(--ink-soft);
            font-weight: 600;
            font-size: 0.92rem;
            padding: 0.7rem 1.35rem;
            border-radius: 999px;
            transition: border-color .15s ease, color .15s ease;
        }

        .ik-btn-cancel:hover {
            border-color: var(--ink-soft);
            color: var(--ink);
        }

        .ik-btn-submit {
            border: 1px solid var(--forest);
            background: var(--forest);
            color: var(--paper);
            font-weight: 700;
            font-size: 0.92rem;
            padding: 0.7rem 1.5rem;
            border-radius: 999px;
            letter-spacing: 0.02em;
            transition: background .15s ease, color .15s ease;
        }

        .ik-btn-submit:hover,
        .ik-btn-submit:focus {
            background: transparent;
            color: var(--forest);
        }
    </style>
</head>
<body>

<header class="ik-header">
    <div class="ik-header-inner">
        <a class="ik-logo" href="#" aria-label="iniKonser">
            <svg class="ik-logo-mark" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                <rect width="40" height="40" rx="12" fill="#1E4D3B"/>
                <path d="M12 28V12h4.2l3.4 9.2L23 12H27v16h-3.4V18.4L20.4 28h-2.6l-3.2-9.6V28H12z" fill="#F3EFE6"/>
                <circle cx="29.5" cy="13.5" r="2.2" fill="#B8923A"/>
            </svg>
            <span class="ik-logo-text">ini<em>Konser</em></span>
        </a>

        <nav class="ik-nav" aria-label="Navigasi utama">
            <a class="ik-nav-link" href="{{ route('home') }}">Beranda</a>
            <a class="ik-nav-link" href="{{ route('pembeli.daftar') }}">Pembeli</a>
            <a class="ik-nav-link" href="#kategori">Tiket</a>
        </nav>

        <a class="ik-lang" href="#" aria-label="Bahasa: Indonesia">
            <span class="ik-flag" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="100%" height="100%">
                    <rect width="24" height="12" fill="#CE1126"/>
                    <rect y="12" width="24" height="12" fill="#fff"/>
                </svg>
            </span>
            ID
        </a>
    </div>
</header>

<nav class="ik-stepper" aria-label="Alur pemesanan">
    <div class="ik-stepper-inner">
        <div class="ik-step is-active" aria-current="step">
            <span class="ik-step-num">1</span>
            <span>Pilih Kategori</span>
        </div>
        <span class="ik-step-sep" aria-hidden="true">→</span>
        <div class="ik-step">
            <span class="ik-step-num">2</span>
            <span>Detail Pesanan</span>
        </div>
        <span class="ik-step-sep" aria-hidden="true">→</span>
        <div class="ik-step">
            <span class="ik-step-num">3</span>
            <span>Metode Pembayaran</span>
        </div>
        <span class="ik-step-sep" aria-hidden="true">→</span>
        <div class="ik-step">
            <span class="ik-step-num">4</span>
            <span>Pembayaran</span>
        </div>
    </div>
</nav>

<main class="ik-main">
    @if (session('success'))
        <div class="ik-alert" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="ik-alert is-error" role="alert">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="ik-hero" aria-label="Ringkasan acara">
        <div class="ik-banner">
            <div class="ik-banner-frame" aria-hidden="true"></div>

            <div class="ik-banner-top">
                <span class="ik-live">
                    <span class="ik-live-dot" aria-hidden="true"></span>
                    On Sale
                </span>
                <span class="ik-date-chip">7–8 November 2026</span>
            </div>

            <h1 class="ik-banner-title">
                <span class="l1">Remember<br><em>Fest</em> 2026</span>
                <span class="l2">
                    <span class="ik-x" aria-hidden="true">×</span>
                    <span>
                        Concert
                        <span class="ik-banner-sub">The Future of Media</span>
                    </span>
                </span>
            </h1>

            <div class="ik-price-row">
                <div class="ik-price-block">
                    <span class="tag">One Day Pass</span>
                    <div class="amount">135 <span class="unit">ribu</span></div>
                </div>
                <div class="ik-price-block">
                    <span class="tag">Two Day Pass</span>
                    <div class="amount">225 <span class="unit">ribu</span></div>
                </div>
                <div class="ik-price-block">
                    <span class="tag">Standing VIP</span>
                    <div class="amount">250 <span class="unit">ribu</span></div>
                </div>
            </div>

            <div class="ik-banner-meta">
                <span class="ik-meta">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                    Open Space &amp; Gambir Expo Kemayoran
                </span>
                <span class="ik-meta">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                    Gate buka 15.00 WIB
                </span>
            </div>
        </div>

        <aside class="ik-cta-card" aria-label="Harga tiket">
            <div class="ik-cta-label">
                <span>Harga mulai dari</span>
                <strong>Rp135.000</strong>
            </div>
            <button type="button" class="ik-btn-cta" data-bs-toggle="modal" data-bs-target="#modalBeli"
                data-event="Remember Fest 2026 x Concert"
                data-harga="135000"
                data-kategori="One Day Pass (mulai)">
                Beli Sekarang
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </button>
            <p class="ik-cta-note">Pilih kategori tiket di bawah, lanjut ke detail pesanan.</p>
        </aside>
    </section>

    <div class="ik-section-head" id="kategori">
        <h2>Kategori <em>Tiket</em></h2>
        <span class="ik-section-count">6 kategori tersedia</span>
    </div>

    <section aria-label="Daftar kategori tiket">
        {{-- ONE DAY PASS DAY 1 --}}
        <article class="ik-ticket">
            <div class="ik-ticket-top">
                <span class="ik-badge is-sale">On Sale</span>
            </div>
            <h3 class="ik-ticket-name">ONE DAY PASS (DAY 1)</h3>
            <div class="ik-dash" aria-hidden="true"></div>
            <div class="ik-price-row-card">
                <div class="ik-price-card">Rp135.000</div>
                <button type="button" class="ik-btn-pilih" data-bs-toggle="modal" data-bs-target="#modalBeli"
                    data-event="Remember Fest 2026 – One Day Pass (Day 1)"
                    data-harga="135000"
                    data-kategori="ONE DAY PASS (DAY 1)">Pilih</button>
            </div>
            <div class="accordion ik-acc" id="desc-1">
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button class="accordion-button py-2" type="button" data-bs-toggle="collapse" data-bs-target="#desc-1-body" aria-expanded="true" aria-controls="desc-1-body">
                            Deskripsi
                        </button>
                    </h4>
                    <div id="desc-1-body" class="accordion-collapse collapse show" data-bs-parent="#desc-1">
                        <div class="accordion-body">
                            <ul>
                                <li>Tiket berlaku untuk hari pertama</li>
                                <li>Tiket berlaku untuk satu orang</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- ONE DAY PASS DAY 2 --}}
        <article class="ik-ticket">
            <div class="ik-ticket-top">
                <span class="ik-badge is-sale">On Sale</span>
            </div>
            <h3 class="ik-ticket-name">ONE DAY PASS (DAY 2)</h3>
            <div class="ik-dash" aria-hidden="true"></div>
            <div class="ik-price-row-card">
                <div class="ik-price-card">Rp135.000</div>
                <button type="button" class="ik-btn-pilih" data-bs-toggle="modal" data-bs-target="#modalBeli"
                    data-event="Remember Fest 2026 – One Day Pass (Day 2)"
                    data-harga="135000"
                    data-kategori="ONE DAY PASS (DAY 2)">Pilih</button>
            </div>
            <div class="accordion ik-acc" id="desc-2">
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button class="accordion-button py-2" type="button" data-bs-toggle="collapse" data-bs-target="#desc-2-body" aria-expanded="true" aria-controls="desc-2-body">
                            Deskripsi
                        </button>
                    </h4>
                    <div id="desc-2-body" class="accordion-collapse collapse show" data-bs-parent="#desc-2">
                        <div class="accordion-body">
                            <ul>
                                <li>Tiket berlaku untuk hari kedua</li>
                                <li>Tiket berlaku untuk satu orang</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- TWO DAY PASS --}}
        <article class="ik-ticket">
            <div class="ik-ticket-top">
                <span class="ik-badge is-sale">On Sale</span>
            </div>
            <h3 class="ik-ticket-name">TWO DAY PASS – 2 Day Pass</h3>
            <div class="ik-dash" aria-hidden="true"></div>
            <div class="ik-price-row-card">
                <div class="ik-price-card">Rp225.000</div>
                <button type="button" class="ik-btn-pilih" data-bs-toggle="modal" data-bs-target="#modalBeli"
                    data-event="Remember Fest 2026 – Two Day Pass"
                    data-harga="225000"
                    data-kategori="TWO DAY PASS – 2 Day Pass">Pilih</button>
            </div>
            <div class="accordion ik-acc" id="desc-3">
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button class="accordion-button py-2" type="button" data-bs-toggle="collapse" data-bs-target="#desc-3-body" aria-expanded="true" aria-controls="desc-3-body">
                            Deskripsi
                        </button>
                    </h4>
                    <div id="desc-3-body" class="accordion-collapse collapse show" data-bs-parent="#desc-3">
                        <div class="accordion-body">
                            <p class="lead-line">Tiket berlaku untuk dua hari selama Remember Fest berlangsung :</p>
                            <ul>
                                <li>Day 1 : 7 Nov 2026</li>
                                <li>Day 2 : 8 Nov 2026</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- EARLY BIRD --}}
        <article class="ik-ticket is-sold">
            <div class="ik-ticket-top">
                <span class="ik-badge is-sold">Sold Out</span>
            </div>
            <h3 class="ik-ticket-name">Early Bird – 2 Day Pass</h3>
            <div class="ik-dash" aria-hidden="true"></div>
            <div class="ik-price-row-card">
                <div class="ik-price-card">Rp195.000</div>
                <span class="ik-sold-tag">Habis</span>
            </div>
            <div class="accordion ik-acc" id="desc-4">
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button class="accordion-button py-2" type="button" data-bs-toggle="collapse" data-bs-target="#desc-4-body" aria-expanded="true" aria-controls="desc-4-body">
                            Deskripsi
                        </button>
                    </h4>
                    <div id="desc-4-body" class="accordion-collapse collapse show" data-bs-parent="#desc-4">
                        <div class="accordion-body">
                            <p class="lead-line">Tiket berlaku untuk dua hari selama Remember Fest berlangsung :</p>
                            <ul>
                                <li>Day 1 : 7 Nov 2026</li>
                                <li>Day 2 : 8 Nov 2026</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- VIP DAY 1 --}}
        <article class="ik-ticket is-sold">
            <div class="ik-ticket-top">
                <span class="ik-badge is-sold">Sold Out</span>
            </div>
            <h3 class="ik-ticket-name">ONE DAY PASS (DAY 1) – STANDING VIP</h3>
            <div class="ik-dash" aria-hidden="true"></div>
            <div class="ik-price-row-card">
                <div class="ik-price-card">Rp250.000</div>
                <span class="ik-sold-tag">Habis</span>
            </div>
            <div class="accordion ik-acc" id="desc-5">
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button class="accordion-button py-2" type="button" data-bs-toggle="collapse" data-bs-target="#desc-5-body" aria-expanded="true" aria-controls="desc-5-body">
                            Deskripsi
                        </button>
                    </h4>
                    <div id="desc-5-body" class="accordion-collapse collapse show" data-bs-parent="#desc-5">
                        <div class="accordion-body">
                            <ul>
                                <li>Tiket berlaku untuk hari pertama (7 Nov 2026)</li>
                                <li>Tiket berlaku untuk satu orang</li>
                                <li>Fasilitas Standing VIP berlaku untuk di panggung utama (main stage only)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- VIP DAY 2 --}}
        <article class="ik-ticket is-sold">
            <div class="ik-ticket-top">
                <span class="ik-badge is-sold">Sold Out</span>
            </div>
            <h3 class="ik-ticket-name">ONE DAY PASS (DAY 2) – STANDING VIP</h3>
            <div class="ik-dash" aria-hidden="true"></div>
            <div class="ik-price-row-card">
                <div class="ik-price-card">Rp250.000</div>
                <span class="ik-sold-tag">Habis</span>
            </div>
            <div class="accordion ik-acc" id="desc-6">
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button class="accordion-button py-2" type="button" data-bs-toggle="collapse" data-bs-target="#desc-6-body" aria-expanded="true" aria-controls="desc-6-body">
                            Deskripsi
                        </button>
                    </h4>
                    <div id="desc-6-body" class="accordion-collapse collapse show" data-bs-parent="#desc-6">
                        <div class="accordion-body">
                            <ul>
                                <li>Tiket berlaku untuk hari kedua (8 Nov 2026)</li>
                                <li>Tiket berlaku untuk satu orang</li>
                                <li>Fasilitas Standing VIP berlaku untuk di panggung utama (main stage only)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>

<footer class="ik-footer">
    <a class="ik-footer-logo" href="#" aria-label="iniKonser">
        <svg class="ik-logo-mark" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <rect width="40" height="40" rx="12" fill="#1E4D3B"/>
            <path d="M12 28V12h4.2l3.4 9.2L23 12H27v16h-3.4V18.4L20.4 28h-2.6l-3.2-9.6V28H12z" fill="#F3EFE6"/>
            <circle cx="29.5" cy="13.5" r="2.2" fill="#B8923A"/>
        </svg>
        <span class="ik-logo-text">ini<em>Konser</em></span>
    </a>

    <div class="ik-footer-contacts">
        <a href="https://wa.me/6282137676220" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.5 0 .1 5.4.1 12c0 2.1.6 4.2 1.6 6L0 24l6.2-1.6a11.9 11.9 0 0 0 5.9 1.5h.1c6.6 0 12-5.4 12-12 0-3.2-1.2-6.2-3.7-8.4z"/>
            </svg>
            +62 821-3767-6220
        </a>
        <a href="mailto:cs@inikonser.id">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <rect x="3" y="5" width="18" height="14" rx="2"/>
                <path d="M4 7l8 6 8-6"/>
            </svg>
            cs@inikonser.id
        </a>
    </div>

    <p class="ik-copy">© 2026 iniKonser. Hak Cipta Dilindungi.</p>
</footer>

{{-- Modal Beli / Pilih --}}
<div class="modal fade ik-modal" id="modalBeli" tabindex="-1" aria-labelledby="modalBeliLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('tiket.store') }}" method="POST" id="formBeli">
                @csrf
                <div class="modal-header">
                    <div>
                        <h2 class="modal-title mb-1" id="modalBeliLabel">Pesan <em>Tiket</em></h2>
                        <p class="mb-0 ik-form-hint" id="modalKategori">Kategori tiket</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="nama_event" id="inputNamaEvent" value="">
                    <input type="hidden" name="harga_tiket" id="inputHargaTiket" value="">

                    <div class="mb-3">
                        <label class="ik-form-label" for="inputNamaPembeli">Nama Pembeli</label>
                        <input
                            type="text"
                            class="ik-form-control @error('nama_pembeli') is-invalid @enderror"
                            id="inputNamaPembeli"
                            name="nama_pembeli"
                            value="{{ old('nama_pembeli') }}"
                            placeholder="Contoh: Budi Santoso"
                            required
                            maxlength="255"
                            autocomplete="name"
                        >
                        @error('nama_pembeli')
                            <div class="ik-invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="ik-form-label" for="inputJumlahTiket">Jumlah Tiket</label>
                        <input
                            type="number"
                            class="ik-form-control @error('jumlah_tiket') is-invalid @enderror"
                            id="inputJumlahTiket"
                            name="jumlah_tiket"
                            value="{{ old('jumlah_tiket', 1) }}"
                            min="1"
                            max="10"
                            step="1"
                            required
                        >
                        @error('jumlah_tiket')
                            <div class="ik-invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="ik-form-hint mt-1">Maksimal 10 tiket per transaksi.</div>
                    </div>

                    <div class="ik-total-box">
                        <span>Total Harga</span>
                        <strong id="outputTotal">Rp0</strong>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="ik-btn-cancel" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="ik-btn-submit">Simpan Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function () {
        var modalEl = document.getElementById('modalBeli');
        if (!modalEl) return;

        var form = document.getElementById('formBeli');
        var inputEvent = document.getElementById('inputNamaEvent');
        var inputHarga = document.getElementById('inputHargaTiket');
        var inputJumlah = document.getElementById('inputJumlahTiket');
        var outputTotal = document.getElementById('outputTotal');
        var labelKategori = document.getElementById('modalKategori');

        function formatRp(n) {
            return 'Rp' + Number(n || 0).toLocaleString('id-ID');
        }

        function hitungTotal() {
            var harga = parseInt(inputHarga.value, 10) || 0;
            var jumlah = parseInt(inputJumlah.value, 10) || 0;
            if (jumlah < 1) jumlah = 1;
            if (jumlah > 10) jumlah = 10;
            inputJumlah.value = jumlah;
            outputTotal.textContent = formatRp(harga * jumlah);
        }

        modalEl.addEventListener('show.bs.modal', function (event) {
            var trigger = event.relatedTarget;
            if (!trigger) return;

            var eventNama = trigger.getAttribute('data-event') || 'Remember Fest 2026';
            var harga = trigger.getAttribute('data-harga') || '135000';
            var kategori = trigger.getAttribute('data-kategori') || '';

            inputEvent.value = eventNama;
            inputHarga.value = harga;
            labelKategori.textContent = kategori || eventNama;

            if (!form.querySelector('.is-invalid')) {
                inputJumlah.value = 1;
            }
            hitungTotal();
        });

        inputJumlah.addEventListener('input', hitungTotal);

        modalEl.addEventListener('hidden.bs.modal', function () {
            var alertError = document.querySelector('.ik-alert.is-error');
            if (alertError) alertError.remove();
        });

        hitungTotal();
    })();
</script>
</body>
</html>
