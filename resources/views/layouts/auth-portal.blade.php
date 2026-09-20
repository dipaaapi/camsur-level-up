<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Camarines Sur Level-Up Portal | Secure Access' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/about/socio-economic/muns/camsur-logo.png') }}">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --portal-navy: #0a192f;
            --portal-blue: #0f4695;
            --portal-blue-dark: #092e66;
            --portal-gold: #c5a059;
            --portal-gold-light: #f59e0b;
        }

        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--portal-navy);
            color: #1e293b;
        }

        /* 100vh Landscape Canvas without vertical page scrolling */
        .auth-canvas {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 24px;
            position: relative;
            overflow: hidden;
            background-color: var(--portal-navy);
        }

        /* Ambient glowing gradient & Capitol architectural imagery */
        .auth-bg-layer {
            position: absolute;
            top: -6%;
            left: -6%;
            width: 112%;
            height: 112%;
            background-image: 
                radial-gradient(circle at 50% 20%, rgba(30, 90, 190, 0.45), transparent 60%),
                linear-gradient(180deg, rgba(10, 25, 47, 0.88) 0%, rgba(15, 70, 149, 0.85) 50%, rgba(10, 25, 47, 0.95) 100%),
                url('{{ asset("img/about/capitol-history/capitol-history-bg.png") }}');
            background-size: cover;
            background-position: center;
            z-index: 0;
            transform: translate(var(--bg-x, 0px), var(--bg-y, 0px));
            transition: transform 0.12s ease-out;
            filter: brightness(0.95);
        }

        /* Subtle animated grid lines */
        .auth-grid-overlay {
            position: absolute;
            inset: 0;
            background-size: 40px 40px;
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            z-index: 1;
            pointer-events: none;
        }

        /* 2-Column Wide Landscape Card */
        .auth-card-landscape {
            width: 100%;
            max-width: 960px;
            background: rgba(255, 255, 255, 0.985);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 80px -15px rgba(0, 0, 0, 0.65), 0 0 0 1px rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 10;
            animation: cardFadeIn 0.45s cubic-bezier(0.16, 1, 0.3, 1);
            backdrop-filter: blur(16px);
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 860px) {
            .auth-card-landscape {
                flex-direction: row;
                min-height: 520px;
            }
        }

        @keyframes cardFadeIn {
            from {
                opacity: 0;
                transform: translateY(18px) scale(0.985);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Left Side: Official Branding, Seal, Details & Security Notice */
        .auth-brand-pane {
            background: linear-gradient(145deg, #0d3b7d 0%, #08244e 100%);
            color: #ffffff;
            padding: 36px 32px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        @media (min-width: 860px) {
            .auth-brand-pane {
                width: 42%;
                flex-shrink: 0;
                border-right: 3px solid #f59e0b;
            }
        }

        /* Subtle background watermark seal inside left pane */
        .auth-brand-pane::before {
            content: '';
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 220px;
            height: 220px;
            background-image: url('{{ asset("img/shared/camsur-logo-outline.png") }}');
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.07;
            pointer-events: none;
        }

        .auth-seal {
            width: 68px;
            height: 68px;
            filter: drop-shadow(0 6px 14px rgba(0, 0, 0, 0.35));
            transition: transform 0.3s ease;
        }

        .auth-seal:hover {
            transform: scale(1.06) rotate(3deg);
        }

        /* Security notice inside left column */
        .portal-security-notice {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 14px;
            padding: 13px 15px;
            font-size: 0.74rem;
            color: #cbd5e1;
            line-height: 1.5;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            backdrop-filter: blur(4px);
        }

        .portal-security-icon {
            color: #fbbf24;
            font-size: 1.1rem;
            margin-top: 1px;
            flex-shrink: 0;
        }

        /* Right Side: Actual Form Pane */
        .auth-form-pane {
            flex: 1;
            padding: 34px 38px;
            background: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 859px) {
            .auth-form-pane {
                padding: 28px 24px;
            }
        }

        /* Form Inputs & Styling */
        .portal-input-group {
            display: flex;
            align-items: center;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            background-color: #ffffff;
            transition: all 0.2s ease-in-out;
            overflow: hidden;
        }

        .portal-input-group:focus-within {
            border-color: #0f4695;
            box-shadow: 0 0 0 3px rgba(15, 70, 149, 0.12);
        }

        .portal-input-icon {
            padding: 0 14px;
            color: #64748b;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8fafc;
            border-right: 1px solid #f1f5f9;
            height: 42px;
            min-width: 42px;
        }

        .portal-input {
            flex: 1;
            border: none !important;
            padding: 9px 14px;
            font-size: 0.9rem;
            color: #1e293b;
            outline: none !important;
            box-shadow: none !important;
            font-weight: 500;
        }

        .portal-input::placeholder {
            color: #94a3b8;
            font-weight: 400;
        }

        .portal-eye-btn {
            background: transparent;
            border: none;
            color: #94a3b8;
            padding: 0 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            height: 42px;
            transition: color 0.2s ease;
        }

        .portal-eye-btn:hover {
            color: #0f4695;
        }

        /* Primary Government Action Button */
        .portal-btn-primary {
            background: linear-gradient(135deg, #0f4695 0%, #0a3169 100%);
            color: #ffffff;
            border: none;
            border-radius: 12px;
            padding: 12px 18px;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            width: 100%;
            cursor: pointer;
            transition: all 0.22s ease;
            box-shadow: 0 4px 12px rgba(15, 70, 149, 0.25);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .portal-btn-primary:hover {
            background: linear-gradient(135deg, #1355b3 0%, #0c3b80 100%);
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(15, 70, 149, 0.35);
        }

        .portal-btn-primary:active {
            transform: translateY(0);
        }

        .portal-btn-primary:disabled {
            opacity: 0.75;
            cursor: not-allowed;
            transform: none;
        }

        /* Footer Links */
        .portal-left-footer-links {
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 0.76rem;
            margin-top: 18px;
            flex-wrap: wrap;
        }

        .portal-left-footer-link {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .portal-left-footer-link:hover {
            color: #fbbf24;
        }
    </style>
</head>
<body>
    <div class="auth-canvas">
        <!-- Parallax Background Layer -->
        <div class="auth-bg-layer" id="authBgLayer"></div>
        <div class="auth-grid-overlay"></div>

        <!-- Landscape 2-Column Auth Card -->
        <div class="auth-card-landscape">
            
            <!-- LEFT PANE: Branding, Seal, Description & Security Notice -->
            <div class="auth-brand-pane">
                <div>
                    <!-- Top Sub-Header -->
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <p class="text-[10px] uppercase tracking-[2.5px] font-bold text-blue-200 m-0">
                            Republic of the Philippines
                        </p>
                    </div>

                    <!-- Seal & Title -->
                    <div class="flex items-center gap-3.5 mb-5">
                        <a href="{{ route('home') }}" title="Return to CamSur Portal Home" class="shrink-0">
                            <img src="{{ asset('img/about/socio-economic/muns/camsur-logo.png') }}" 
                                 alt="Provincial Government of Camarines Sur" 
                                 class="auth-seal">
                        </a>
                        <div>
                            <h2 class="text-xs text-amber-400 font-bold uppercase tracking-wider mb-0.5">
                                Provincial Government
                            </h2>
                            <h1 class="text-lg sm:text-xl font-black uppercase text-white leading-tight m-0">
                                Camarines Sur
                            </h1>
                            <span class="text-[11px] text-blue-200 font-semibold tracking-wide">
                                Level-Up Digital Portal
                            </span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Official gateway for citizen employment services, scholarship applications, and provincial administrative transactions.
                    </p>
                </div>

                <!-- Bottom Left: Security Notice & Back Links -->
                <div>
                    <!-- Government Compliance Notice -->
                    <div class="portal-security-notice">
                        <i class="fa-solid fa-shield-halved portal-security-icon"></i>
                        <div>
                            <strong class="text-white font-semibold block text-[11px] mb-0.5">Government Security Notice</strong>
                            Protected under the Philippine Data Privacy Act (RA 10173) and Cybercrime Prevention Act (RA 10175). All transactions are logged.
                        </div>
                    </div>

                    <!-- Left Links: Back to Home & Technical Support -->
                    <div class="portal-left-footer-links">
                        <a href="{{ route('home') }}" class="portal-left-footer-link">
                            <i class="fa-solid fa-house text-[10px]"></i>
                            <span>Portal Home</span>
                        </a>
                        <span class="text-blue-300/40">•</span>
                        <a href="{{ route('faq') }}" class="portal-left-footer-link">
                            <i class="fa-solid fa-circle-question text-[10px]"></i>
                            <span>Help & FAQ</span>
                        </a>
                        <span class="text-blue-300/40">•</span>
                        <a href="mailto:support@camsur.gov.ph" class="portal-left-footer-link">
                            <i class="fa-solid fa-headset text-[10px]"></i>
                            <span>Support</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT PANE: Clean Dedicated Form Container -->
            <div class="auth-form-pane">
                <div class="mb-4">
                    <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight m-0 uppercase">
                        {{ $portalTitle ?? 'Account Access' }}
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        {{ $portalSubtitle ?? 'Please provide your account details below' }}
                    </p>
                </div>

                <!-- Actual Form Elements -->
                {{ $slot }}
            </div>

        </div>
    </div>

    <!-- Mouse Parallax & Password Toggle Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const bgLayer = document.getElementById('authBgLayer');
            
            // Subtle interactive mouse parallax effect
            window.addEventListener('mousemove', (e) => {
                if (!bgLayer) return;
                const x = (e.clientX - window.innerWidth / 2) / 50;
                const y = (e.clientY - window.innerHeight / 2) / 50;
                bgLayer.style.setProperty('--bg-x', `${-x}px`);
                bgLayer.style.setProperty('--bg-y', `${-y}px`);
            });

            // Password eye toggle helper
            document.querySelectorAll('[data-toggle="password"]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetId = btn.getAttribute('data-target');
                    const targetInput = document.getElementById(targetId);
                    const icon = btn.querySelector('i');
                    if (!targetInput) return;

                    if (targetInput.type === 'password') {
                        targetInput.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        targetInput.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });

            // Loading state on submit
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', (e) => {
                    const submitBtn = form.querySelector('[type="submit"]');
                    if (submitBtn && !submitBtn.disabled) {
                        const originalText = submitBtn.getAttribute('data-loading-text') || 'Processing...';
                        setTimeout(() => {
                            submitBtn.disabled = true;
                            submitBtn.innerHTML = `<i class="fa-solid fa-circle-notch fa-spin text-xs"></i> <span>${originalText}</span>`;
                        }, 40);
                    }
                });
            });
        });
    </script>
</body>
</html>
