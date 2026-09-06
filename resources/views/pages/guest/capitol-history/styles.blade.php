<style>
    :root{
        --ink:#0b1a3f; --ink-2:#1e3a8a; --gold:#f59e0b; --gold-2:#fbbf24;
        --line:#e6ebf3; --muted:#5b6b85;
        --radius-lg:1.5rem; --radius-xl:2rem;
        --shadow-sm:0 6px 18px rgba(11,26,63,.06);
        --shadow-md:0 14px 38px rgba(11,26,63,.10);
        --shadow-lg:0 28px 60px rgba(11,26,63,.18);
        --ease:cubic-bezier(.22,1,.36,1);
    }
    html{scroll-behavior:smooth}
    :where(a,button,[tabindex]):focus-visible{outline:3px solid var(--gold);outline-offset:3px;border-radius:.85rem}

    /* RHYTHM */
    .section{scroll-margin-top:6rem}
    .surface{background:#fff;border:1px solid var(--line);border-radius:var(--radius-xl);box-shadow:var(--shadow-sm)}
    .surface-pad{padding:1.5rem}
    @media(min-width:640px){.surface-pad{padding:2.5rem}}
    .eyebrow{display:inline-flex;align-items:center;gap:.5rem;font-size:.7rem;font-weight:800;letter-spacing:.14em;text-transform:uppercase;color:#b45309}
    .eyebrow::before{content:"";height:.4rem;width:1.5rem;border-radius:99px;background:var(--gold)}
    .h-sec{margin-top:.65rem;font-weight:900;color:var(--ink);line-height:1.15;font-size:clamp(1.5rem,1.1rem + 1.6vw,2.15rem)}
    .lede{margin-top:1rem;max-width:56ch;color:var(--muted);font-size:.925rem;line-height:1.75}

    /* MOTION */
    @keyframes floatOrb{0%,100%{transform:translate3d(0,0,0) scale(1)}50%{transform:translate3d(18px,-22px,0) scale(1.06)}}
    @keyframes nodePulse{0%,100%{box-shadow:0 0 0 0 rgba(245,158,11,.5),0 12px 30px rgba(11,26,63,.25)}50%{box-shadow:0 0 0 12px rgba(245,158,11,0),0 12px 30px rgba(11,26,63,.25)}}
    @keyframes modalIn{from{opacity:0;transform:translateY(18px) scale(.97)}to{opacity:1;transform:none}}
    .hero-orb{animation:floatOrb 9s ease-in-out infinite}
    .hero-orb:nth-child(2){animation-delay:-3s}
    .hero-orb:nth-child(3){animation-delay:-6s}

    .reveal{opacity:0;transform:translateY(28px);transition:opacity .8s var(--ease),transform .8s var(--ease);transition-delay:var(--d,0ms)}
    .reveal.in{opacity:1;transform:none}

    /* MEDIA + FALLBACK */
    .media{
        position:relative;overflow:hidden;isolation:isolate;background-color:#132a5c;
        background:radial-gradient(circle at 22% 22%,rgba(245,158,11,.3),transparent 40%),linear-gradient(135deg,#0b1a3f,#1e3a8a 55%,#f59e0b);
    }
    .media img{position:relative;z-index:2;height:100%;width:100%;object-fit:cover;transition:transform .7s var(--ease),filter .4s ease}
    .media-fallback{position:absolute;inset:0;z-index:1;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.5rem;padding:1.25rem;text-align:center;color:#fff}
    .media.is-empty img{display:none}
    .media-fallback-icon{display:flex;height:3rem;width:3rem;align-items:center;justify-content:center;border-radius:99px;background:rgba(255,255,255,.14);box-shadow:inset 0 0 0 1px rgba(255,255,255,.25);font-size:1.35rem}
    .media-fallback-alt{font-size:.8rem;font-weight:800;line-height:1.35;max-width:22ch}
    .media-fallback-note{font-size:.65rem;letter-spacing:.08em;text-transform:uppercase;color:#bfdbfe}

    /* TIMELINE */
    .tl-shell-wrap{
        position:relative;overflow:hidden;border-radius:var(--radius-xl);border:1px solid var(--line);box-shadow:var(--shadow-sm);
        background:radial-gradient(circle at 8% 6%,rgba(245,158,11,.12),transparent 32%),radial-gradient(circle at 92% 12%,rgba(30,64,175,.12),transparent 34%),linear-gradient(135deg,#fff,#f7f9fc);
    }
    .tl-shell-wrap::before{
        content:"";position:absolute;inset:0;pointer-events:none;
        background-image:linear-gradient(rgba(11,26,63,.035) 1px,transparent 1px),linear-gradient(90deg,rgba(11,26,63,.035) 1px,transparent 1px);
        background-size:44px 44px;
        -webkit-mask-image:linear-gradient(to bottom,rgba(0,0,0,.75),transparent 80%);mask-image:linear-gradient(to bottom,rgba(0,0,0,.75),transparent 80%);
    }
    .tl-head{position:relative;z-index:5;padding:1.5rem 1.5rem 0;display:grid;gap:1.5rem}
    @media(min-width:768px){.tl-head{padding:2.25rem 2.25rem 0;grid-template-columns:1fr auto;align-items:end}}

    .tl-filters{display:flex;flex-wrap:wrap;gap:.5rem;padding:1.25rem 1.5rem 0;position:relative;z-index:5}
    @media(min-width:768px){.tl-filters{padding:1.5rem 2.25rem 0}}
    .tl-chip{border:1px solid var(--line);background:#fff;color:var(--ink);border-radius:99px;padding:.5rem .95rem;font-size:.74rem;font-weight:800;transition:all .22s ease;box-shadow:var(--shadow-sm);display:inline-flex;align-items:center;gap:.5rem;cursor:pointer}
    .tl-chip small{font-weight:700;opacity:.55;font-size:.66rem}
    .tl-chip:hover{border-color:rgba(245,158,11,.6);transform:translateY(-1px)}
    .tl-chip[aria-pressed="true"]{background:var(--ink);color:#fff;border-color:var(--ink)}
    .tl-chip[aria-pressed="true"] small{opacity:.7;color:var(--gold-2)}

    .tl-nav{display:flex;align-items:center;gap:.6rem}
    .tl-btn{height:2.75rem;width:2.75rem;border-radius:99px;display:inline-flex;align-items:center;justify-content:center;background:var(--ink);color:var(--gold-2);border:3px solid #fff;box-shadow:var(--shadow-md);transition:background .2s,transform .2s,opacity .2s;cursor:pointer}
    .tl-btn:hover:not(:disabled){background:var(--ink-2);transform:translateY(-2px)}
    .tl-btn:disabled{opacity:.35;cursor:not-allowed}
    .tl-counter{font-variant-numeric:tabular-nums;font-weight:900;color:var(--ink);font-size:.8rem;min-width:4.5rem;text-align:center}

    .tl-shell{
        position:relative;z-index:2;overflow-x:auto;overflow-y:hidden;scrollbar-width:none;cursor:grab;
        overscroll-behavior-x:contain;-webkit-overflow-scrolling:touch;scroll-snap-type:x proximity;
        -webkit-mask-image:linear-gradient(to right,transparent,#000 3rem,#000 calc(100% - 3rem),transparent);
        mask-image:linear-gradient(to right,transparent,#000 3rem,#000 calc(100% - 3rem),transparent);
    }
    .tl-shell::-webkit-scrollbar{display:none}
    .tl-shell.dragging{cursor:grabbing;scroll-snap-type:none}

    .tl-track{position:relative;display:flex;align-items:stretch;gap:1.5rem;min-width:max-content;height:44rem;padding:2rem 2.5rem 2.5rem}
    .tl-rail{position:absolute;left:2.5rem;right:2.5rem;top:50%;height:5px;border-radius:99px;transform:translateY(-50%);z-index:0;pointer-events:none;background:linear-gradient(90deg,rgba(245,158,11,.95),rgba(30,64,175,.85),rgba(245,158,11,.95));box-shadow:0 8px 22px rgba(30,64,175,.18)}
    .tl-rail::before,.tl-rail::after{content:"";position:absolute;top:50%;height:1rem;width:1rem;border-radius:99px;transform:translateY(-50%);background:var(--gold);border:3px solid #fff;box-shadow:0 8px 20px rgba(11,26,63,.18)}
    .tl-rail::before{left:0}.tl-rail::after{right:0}

    .tl-item{position:relative;flex:0 0 21rem;width:21rem;height:100%;scroll-snap-align:center;opacity:0;transform:translateY(26px) scale(.97);transition:opacity .7s var(--ease),transform .7s var(--ease);transition-delay:var(--d,0ms)}
    .tl-item.in{opacity:1;transform:none}
    .tl-item[hidden]{display:none}

    .tl-node{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:8;height:3.35rem;width:3.35rem;border-radius:99px;display:flex;align-items:center;justify-content:center;font-size:1.15rem;color:var(--gold-2);border:4px solid #fff;background:radial-gradient(circle at 35% 25%,#1e40af,#0b1a3f 70%);box-shadow:0 12px 30px rgba(11,26,63,.25);transition:background .3s ease}
    .tl-item.in .tl-node{animation:nodePulse 3s ease-in-out infinite}
    .tl-item:hover .tl-node{background:radial-gradient(circle at 35% 25%,#f59e0b,#0b1a3f 72%)}

    .tl-stem{position:absolute;left:50%;transform:translateX(-50%);width:4px;height:4rem;border-radius:99px;z-index:3;pointer-events:none;background:linear-gradient(to bottom,rgba(245,158,11,.95),rgba(30,64,175,.5))}
    .tl-item.is-top .tl-stem{bottom:50%}
    .tl-item.is-bottom .tl-stem{top:50%}

    .tl-card{position:absolute;left:0;width:100%;height:18rem;z-index:4;display:flex;flex-direction:column;text-align:left;overflow:hidden;border-radius:var(--radius-lg);border:1px solid var(--line);background:#fff;box-shadow:var(--shadow-sm);cursor:pointer;font-family:inherit;padding:0;transition:transform .3s var(--ease),box-shadow .3s ease,border-color .3s ease}
    .tl-item.is-top .tl-card{top:0}
    .tl-item.is-bottom .tl-card{bottom:0}
    .tl-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);border-color:rgba(245,158,11,.55)}
    .tl-card:hover .media img{transform:scale(1.07)}

    .tl-card-media{display:block;position:relative;height:8.25rem;flex:0 0 8.25rem}
    .tl-card-era{position:absolute;top:.7rem;left:.7rem;z-index:6;border-radius:99px;padding:.3rem .6rem;font-size:.6rem;font-weight:900;letter-spacing:.1em;text-transform:uppercase;background:rgba(245,158,11,.95);color:#0b1a3f}
    .tl-card-no{position:absolute;top:.7rem;right:.7rem;z-index:6;height:1.7rem;min-width:1.7rem;display:inline-flex;align-items:center;justify-content:center;border-radius:99px;background:rgba(11,26,63,.78);color:#fff;font-size:.65rem;font-weight:900;backdrop-filter:blur(6px)}
    .tl-card-body{display:flex;flex-direction:column;gap:.4rem;padding:.95rem 1.05rem 1.05rem;flex:1 1 auto;min-height:0}
    .tl-card-date{font-size:.68rem;font-weight:900;letter-spacing:.1em;text-transform:uppercase;color:#b45309}
    .tl-card-title{font-size:.95rem;font-weight:900;line-height:1.3;color:var(--ink);display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
    .tl-card-sum{font-size:.78rem;line-height:1.55;color:var(--muted);display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}
    .tl-card-cta{margin-top:auto;display:inline-flex;align-items:center;gap:.35rem;font-size:.68rem;font-weight:900;letter-spacing:.09em;text-transform:uppercase;color:var(--ink-2);transition:gap .2s ease}
    .tl-card:hover .tl-card-cta{gap:.7rem}

    .tl-foot{position:relative;z-index:5;padding:0 1.5rem 1.75rem}
    @media(min-width:768px){.tl-foot{padding:0 2.25rem 2.25rem}}
    .tl-progress{height:6px;border-radius:99px;background:#e6ebf3;overflow:hidden}
    .tl-progress span{display:block;height:100%;width:0;border-radius:inherit;background:linear-gradient(90deg,var(--ink),var(--gold));transition:width .2s ease}
    .tl-hint{display:flex;align-items:center;justify-content:center;gap:.4rem;padding-top:.85rem;color:#7c8aa3;font-size:.72rem;font-weight:700}

    @media(max-width:640px){
        .tl-shell{-webkit-mask-image:linear-gradient(to right,transparent,#000 1.25rem,#000 calc(100% - 1.25rem),transparent);mask-image:linear-gradient(to right,transparent,#000 1.25rem,#000 calc(100% - 1.25rem),transparent)}
        .tl-track{height:42rem;gap:1rem;padding:1.5rem 1.25rem 2rem}
        .tl-rail{left:1.25rem;right:1.25rem}
        .tl-item{flex-basis:17.5rem;width:17.5rem}
        .tl-card{height:17rem}
    }

    /* GENERIC CARDS */
    .card{border:1px solid var(--line);border-radius:var(--radius-lg);background:#fff;box-shadow:var(--shadow-sm);transition:transform .3s var(--ease),box-shadow .3s,border-color .3s}
    .card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md);border-color:rgba(245,158,11,.45)}
    .stat-card{border-radius:var(--radius-lg);padding:1.25rem 1.35rem;transition:transform .3s var(--ease)}
    .stat-card:hover{transform:translateY(-4px)}

    /* CAROUSEL */
    .carousel-container{position:relative;width:100%;height:100%;overflow:hidden;background:#030816}
    .carousel-slide{position:absolute;inset:0;opacity:0;transition:opacity .5s ease-in-out;z-index:1;display:none}
    .carousel-slide.active{opacity:1;z-index:2;display:block}
    .carousel-video-frame{width:100%;height:100%;border:0}
    .carousel-control{position:absolute;top:50%;transform:translateY(-50%);z-index:10;height:2.5rem;width:2.5rem;border-radius:99px;background:rgba(11,26,63,.85);color:#fff;display:inline-flex;align-items:center;justify-content:center;transition:background .2s;cursor:pointer;border:1px solid rgba(255,255,255,.15)}
    .carousel-control:hover{background:var(--gold);color:var(--ink)}
    .carousel-prev{left:1rem}
    .carousel-next{right:1rem}
    .carousel-indicators{position:absolute;bottom:1.25rem;left:50%;transform:translateX(-50%);z-index:10;display:flex;gap:.5rem}
    .carousel-dot{height:.5rem;width:.5rem;border-radius:99px;background:rgba(255,255,255,.45);transition:all .2s;border:0;padding:0;cursor:pointer}
    .carousel-dot.active{background:#fff;width:1.5rem}

    /* MODALS */
    .modal{position:fixed;inset:0;z-index:120;display:none;align-items:center;justify-content:center;padding:1rem;background:rgba(3,8,22,.74);backdrop-filter:blur(6px)}
    .modal.open{display:flex}
    .modal-panel{width:100%;max-width:46rem;max-height:min(88vh,52rem);display:flex;flex-direction:column;overflow:hidden;border-radius:var(--radius-xl);background:#fff;box-shadow:0 40px 90px rgba(3,8,22,.45);animation:modalIn .35s var(--ease)}
    .modal-close{position:absolute;top:.9rem;right:.9rem;z-index:20;height:2.4rem;width:2.4rem;display:inline-flex;align-items:center;justify-content:center;border-radius:99px;background:rgba(255,255,255,.92);color:#0b1a3f;box-shadow:0 8px 20px rgba(3,8,22,.25);transition:background .2s,transform .2s;cursor:pointer;border:0}
    .modal-close:hover{background:#fff;transform:rotate(90deg)}
    .modal-scroll{overflow-y:auto;flex:1 1 auto}
    .modal-scroll::-webkit-scrollbar{width:8px}
    .modal-scroll::-webkit-scrollbar-thumb{background:#cbd5e1;border-radius:99px}
    .modal-media{position:relative;height:15rem;flex:0 0 auto}
    @media(min-width:640px){.modal-media{height:19rem}}
    .modal-media img{width:100%;height:100%;object-fit:contain;background:#030816}
    .modal-foot{display:flex;align-items:center;justify-content:space-between;gap:.75rem;padding:.9rem 1.25rem;border-top:1px solid var(--line);background:#f8fafc;flex:0 0 auto}
    .modal-navbtn{display:inline-flex;align-items:center;gap:.4rem;border-radius:.85rem;padding:.55rem .9rem;font-size:.74rem;font-weight:900;letter-spacing:.05em;background:#fff;color:var(--ink);border:1px solid var(--line);box-shadow:var(--shadow-sm);transition:all .2s;cursor:pointer}
    .modal-navbtn:hover:not(:disabled){background:var(--ink);color:#fff;border-color:var(--ink)}
    .modal-navbtn:disabled{opacity:.35;cursor:not-allowed}

    .fact-grid{display:grid;gap:.6rem}
    @media(min-width:540px){.fact-grid{grid-template-columns:1fr 1fr}}
    .fact{border:1px solid var(--line);border-radius:1rem;background:#f8fafc;padding:.8rem .95rem}
    .fact dt{font-size:.62rem;font-weight:900;letter-spacing:.11em;text-transform:uppercase;color:#b45309}
    .fact dd{margin-top:.3rem;font-size:.82rem;line-height:1.55;color:#1f2937;font-weight:600}

    .src-chip{display:inline-flex;align-items:center;gap:.4rem;border-radius:99px;border:1px solid #dbeafe;background:#eff6ff;color:#1e3a8a;padding:.35rem .7rem;font-size:.7rem;font-weight:800;transition:all .2s;text-decoration:none}
    .src-chip:hover{background:#dbeafe;border-color:#93c5fd}

    .cite-item{display:flex;gap:.85rem;border:1px solid var(--line);border-radius:1rem;padding:.9rem 1rem;background:#fff;transition:border-color .2s,box-shadow .2s}
    .cite-item:hover{border-color:rgba(245,158,11,.5);box-shadow:var(--shadow-sm)}
    .cite-index{flex:0 0 auto;height:1.75rem;width:1.75rem;border-radius:.6rem;background:var(--ink);color:var(--gold-2);display:inline-flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:900}
    .cite-type{display:inline-block;border-radius:99px;background:#f1f5f9;color:#475569;padding:.15rem .5rem;font-size:.6rem;font-weight:900;letter-spacing:.09em;text-transform:uppercase}
    .cite-actions{display:flex;gap:.4rem;flex-wrap:wrap;margin-top:.55rem}
    .cite-btn{display:inline-flex;align-items:center;gap:.3rem;border-radius:.6rem;border:1px solid var(--line);background:#f8fafc;padding:.3rem .6rem;font-size:.66rem;font-weight:800;color:#334155;transition:all .2s;cursor:pointer;text-decoration:none}
    .cite-btn:hover{background:var(--ink);color:#fff;border-color:var(--ink)}

    body.modal-open{overflow:hidden}

    @media(prefers-reduced-motion:reduce){
        *,*::before,*::after{animation:none!important;transition:none!important;scroll-behavior:auto!important}
        .reveal,.tl-item{opacity:1!important;transform:none!important}
    }
</style>
