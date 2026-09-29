# GoldMaker — Full-Stack Platform Case Study

> **One platform. Three surfaces.** A public investment website, an installable investor
> Progressive Web App, and a full administrative control center — designed and built
> end-to-end by **Sazzad Hossain**.

[![Case Study](https://img.shields.io/badge/Case_Study-HTML_·_CSS_·_JS-ffc74a?style=for-the-badge&labelColor=05070d)](#-the-case-study-page)
[![Surfaces](https://img.shields.io/badge/Surfaces-3-2ee096?style=for-the-badge&labelColor=05070d)](#-the-three-surfaces)
[![Screens](https://img.shields.io/badge/Screens_Captured-35-a29bfe?style=for-the-badge&labelColor=05070d)](#-screenshot-inventory)
[![PWA](https://img.shields.io/badge/PWA-Verified-38d3ec?style=for-the-badge&labelColor=05070d)](#-pwa-verification)

---


## 🧩 Two builds — pick the right file

This repo ships the case study in **two forms** so it renders correctly everywhere:

| File | Size | Use it for |
|---|---|---|
| **`standalone.html`** ← **open this one** | ~2.2 MB | **Viewing anywhere.** Fully self-contained: the CSS, the JS and all 32 images are inlined as base64 data URIs. Renders correctly with **zero network access**, inside sandboxed iframes, from a USB stick, or offline. |
| `index.html` + `assets/` | ~44 KB + assets | **Editing / hosting on GitHub Pages.** Clean modular source — one stylesheet, one script, separate image files. Better for version control and diffs. |

> **Why two builds?** In-app / sandboxed previews render HTML in an iframe with
> **no network access**, so a modular page cannot fetch its own CSS, JS or images and
> appears as unstyled HTML. `standalone.html` removes that entire class of failure.
>
> Both files are generated from the same source — they never drift. Rebuild any time:
>
> ```bash
> python3 scripts/build_standalone.py     # writes standalone.html + dist/GoldMaker-Case-Study.html
> ```

### How the self-contained build avoids bloat

Inlining images naively doubles or triples the file size, because each gallery figure
references the same screenshot twice — once as a thumbnail (`src`) and once as the
lightbox target (`data-src`). This build encodes **every image exactly once**:

1. Each screenshot is encoded to a data URI and placed on its inline `<img src>`.
2. The same element also carries `data-img-key="assets/img/site/01_home.jpg"`.
3. At boot, `buildScreenMap()` harvests those already-inlined data URIs into
   `window.__SCREENS` — indexed by **both** the full path and the short key
   (`site/01_home`).
4. The lightbox and the marquee resolve their images **through that map**, so they add
   **zero extra bytes**.

Result: 5.99 MB → **2.23 MB** (a 63 % reduction), with the complete 32-image set intact.

The build also runs a **7-point validation gate** before writing the file — it refuses to
emit a broken artifact if any inline block, image path or script body is missing.

---

## 🧭 The product — why it exists

GoldMaker is a **digital-investment platform**. Products like this live or die on two things,
and both were treated as the design brief:

### Problem 1 — Investor trust
Investors abandon a money platform when the balance feels invisible, deposits stall without
feedback, or payout proof is missing. GoldMaker answers with **radical transparency**:

- A wallet dashboard that shows balance, today, 7-day and 30-day earnings on first paint
- Nine transparent packages — each with price, duration, risk level and *daily* return stated up front
- A live payout-proof wall plus a dedicated Payment Proof page
- An 8-tier badge ladder (NewBee → Master) making progress visible and rewards legible
- A complete activity and bonus ledger so every credit can be traced

### Problem 2 — Operator control
Administrators lose control when each request is handled by hand. GoldMaker answers with
**one operational console**:

- 12 live KPI cards covering money, members, verification and support
- Deposits, withdrawals and KYC documents landing in single-click approval queues
- A Website Customizer and Panel Customizer — landing-page content and app themes are
  editable with **zero deployments**
- Full investor registry with search, plan mapping and per-user drilling
- Global settings, terms management, user-activity audit and CSV export everywhere


## 🏗️ The three surfaces

### 01 · Public Website — the conversion surface Demo
`https://res.bzmail.uk`

The landing layer answers three questions in under ten seconds: **what is this, what does it
pay, and is anyone actually using it?**

- Animated hero slider with a persistent above-the-fold CTA
- Live platform counters (users, total invested, profit share, profit distributed)
- Package grid grouped into **Golden / Diamond / Regular** tiers
- Six-step investor roadmap with scroll-reveal progress storytelling
- Social-proof wall of verified investors + payment-proof archive page
- Auth entry points for sign-in and sign-up, with referral capture at registration

**Captured routes:** `/` · `/index` · `/create/signin` · `/create/signup` · `/contact`

---

### 02 · User Panel — the investor PWA
`https://res.bzmail.uk/user/index` → redirects to `/create/signin` when unauthenticated

A dark-mode, icon-driven **Progressive Web App** with bottom-tab navigation that installs to
the home screen. Everything an investor needs to check in thirty seconds a day is one tap from
the dashboard.

**Modules built (13):**

| Route | Module | Purpose |
|---|---|---|
| `index` | Dashboard | Wallet, earnings windows, badge ladder |
| `wallat` | Wallet | Balance transfer, add money, withdraw |
| `myplan` | My Plan | Active packages with countdown + collected amount |
| `profile` | Profile | Identity, KYC state, notification prefs |
| `notifications` | Notification | Event stream |
| `bonus_history` | Bonus History | Every bonus credit logged |
| `rafer` | Referral | Code, share link, downline |
| `all_statish` | Payment Proof | Public proof-of-payout wall |
| `activity_log` | Activity Log | Full auditable event timeline |
| `tutorial` | Tutorial | Investor onboarding help |
| `support` | Support | Ticketing with issue screenshots |
| `setting` | Settings | Light/dark, accent colours, RTL, layout style |
| `trams_condition` | Terms | Legal + program conditions |

**Key UX decisions**

- **Bottom-tab app shell** — Home, Payment, Rafer, Wallet, with a centred primary action, so the
  4 most-used destinations are always a thumb-tap away
- **Dark mode as the default**, with a light-mode switch and a full accent-colour palette
- **RTL-aware layout** and three selectable layout styles
- **KYC treated as first-class** — an unverified account shows one unmissable verification CTA
  rather than hiding the requirement in a settings sub-page
- **Badge progression** as a retention mechanic — visible status for continued activity

---

### 03 · Admin Panel — the operator surface
`https://res.bzmail.uk/admin/index` → redirects to `/admin_login` when unauthenticated

One console where money, members and content are governed.

**Modules built (13):**

| Route | Module | Purpose |
|---|---|---|
| `index` | Dashboard | 12 live KPI cards + live package-countdown table |
| `all_investor` | All Investor | Registry: balances, plans, deposits, status |
| `withdrow_payments` | Withdraw Request | Approval queue with payment details |
| `add_money_request` | Add Request | Deposit approvals: method, amount, proof |
| `all_plan` | Plan | Tier configuration behind the public grid |
| `all_pakage` | Packages | Price, daily return, duration, activation |
| `landing_page_cust` | Website Customizer | Edit the public site without deploying |
| `panel_cust` | Panel Customizer | Control PWA theme and branding |
| `investor_docs` | Investor Docs | KYC review with inline ID image viewer |
| `investor_support` | Support | Ticket inbox and replies |
| `user_activity` | User Activity | Platform-wide event audit |
| `trams_condition` | Terms | Legal content management |
| `setting` | Setting | Switcher styles, layout modes, theme variants |

**Dashboard KPIs (live at capture time)**

| KPI | Value | KPI | Value |
|---|---|---|---|
| Admin Balance | −9,475,546.61 USD | Total User | 7 |
| Verified User | 3 (4 active, 0 suspended) | Total Plan | 3 |
| Total Packages | 6 (0 active flag) | Profit Share | 173.72 USD |
| Withdraw Request | 9 (7 pending) | Verification Pending | 0 |
| Support Ticket | 1 (0 open) | Live User | 1 |

**Data-layer features**

- **jQuery DataTables** on every registry — instant search, sort, pagination, bulk CSV / Excel /
  PDF / print export
- **Chart.js + ApexCharts** wired for dashboard visualisations
- **Select2** and typeahead for relationship picking (assign plans to investors)
- Role-separated session auth — the admin panel and the investor PWA run on independent
  login flows and independent asset bundles

---

## 📱 PWA verification

The user panel is a **genuine Progressive Web App**, verified live from an authenticated
browser session rather than assumed:

| Check | Result | Evidence |
|---|---|---|
| Web App Manifest | ✅ Present | `<link rel="manifest">` → `https://res.bzmail.uk/user/manifest.json` |
| Service Worker | ✅ Registered | `navigator.serviceWorker.getRegistrations()` → active `…/user/serviceWorker.js` |
| iOS standalone | ✅ Enabled | `<meta name="apple-mobile-web-app-capable" content="yes">` |
| App-shell navigation | ✅ Implemented | Bottom-tab bar, per-tab icons, centred primary action |
| Auth-gated shell | ✅ Confirmed | Unauthenticated `/user/index` → `302 /create/signin` |

> **Note on offline behaviour:** the service worker is registered and active for the app shell.
> Full offline data caching is not enabled — wallet and plan data are deliberately fetched live,
> because serving a stale balance on a money platform is worse than showing an offline state.

---

## 🛠️ Technology stack

**Front-end** — HTML5 · CSS3 · JavaScript (ES6) · Bootstrap 5 grid · CSS custom properties ·
dark mode · RTL support · responsive layout · icon systems

**PWA** — Web App Manifest · Service Worker · app shell · bottom-tab navigation ·
mobile-first · micro-interactions

**Back-end** — PHP 8 · MySQL · session authentication · role separation · ledger logic ·
scheduled payout cron · SMTP mail (PHPMailer) · file/image upload handling

**Charts & data** — Chart.js · ApexCharts · jQuery DataTables · progressbar.js · SwiperJS ·
moment.js + daterangepicker · Select2 · jQuery Peity + Sparkline

**Infrastructure** — cPanel · LiteSpeed · HTTP/3 (h3 negotiated via `alt-svc`)

**This case-study repo** — Python 3 · Playwright (headless Chromium capture) · Pillow
(poster compositing) · NumPy (gradients & vignettes) · hand-written JS with zero runtime deps

---


## 🎨 The case-study page

https://sazzad.wedevespro.com//

### The five sections

| # | Section | Anchor | Covers |
|---|---|---|---|
| 1 | **Overview** | `#overview` | Why the product exists, who it serves, the problems solved (before → after) |
| 2 | **Public Website** | `#website` | The conversion surface, with full-page and responsive captures |
| 3 | **User Panel PWA** | `#userpanel` | The investor surface, with the installed-PWA mobile proof |
| 4 | **Admin Panel** | `#admin` | The operator surface, with the approval and KYC workflows |
| 5 | **Impact · Stack · Skills** | `#impact` | Measured outcomes, technology stack, role breakdown, posters, result |


### Robustness verified

- ✅ Zero console errors and zero uncaught page errors
- ✅ 66 images loaded, 0 broken
- ✅ All 100 reveal elements resolve to visible
- ✅ 35 lightbox items wired, keyboard navigation confirmed
- ✅ Marquee builds 32 tiles (16 screens × 2 passes) for a seamless loop
- ✅ No horizontal overflow on any tested viewport

---


## 📁 Repository structure

```
.
├── standalone.html                ← ★ SELF-CONTAINED build — open this to view anywhere
├── dist/
│   └── GoldMaker-Case-Study.html  ← identical copy with a shareable filename
├── index.html                     ← modular source (host this on GitHub Pages)
├── README.md                      ← this documentation
├── assets/
│   ├── css/style.css              ← full design system
│   ├── js/app.js                  ← all interactions (vanilla JS)
│   ├── fonts/                     ← Inter, Outfit, Space Grotesk, JetBrains Mono (poster tooling)
│   ├── poster_bg/                 ← 3D background art for the posters
│   └── img/
│       ├── site/                  ← 6 public-website captures
│       ├── user/                  ← 15 investor PWA captures
│       ├── admin/                 ← 15 admin-panel captures
│       └── manifest.json          ← image inventory (dimensions + file sizes)
├── posters/                       ← 5 × 1920×1080 case-study posters
├── screenshots/                   ← original unoptimised PNG captures
└── scripts/
    ├── capture_all.py             ← Playwright capture automation (login + every route)
    ├── make_posters.py            ← Pillow poster generator
    └── build_standalone.py        ← single-file inliner + validation gate
```

---

## 👤 Developer

**Sazzad Hossain** — Full-Stack Web Developer
`@developersazzad`

| Platform | Link |
|---|---|
| 🐙 GitHub | [github.com/developersazzad](https://github.com/developersazzad) |
| 💼 LinkedIn | [linkedin.com/in/developer-sazzad](https://linkedin.com/in/developer-sazzad) |
| 🌐 Portfolio | [sazzad.wedevspro.com](https://sazzad.wedevspro.com) |
| 📘 Facebook | [fb.com/developersazzad](https://fb.com/developersazzad) |
| 💬 WhatsApp | [wa.me/8801877856951](https://wa.me/8801877856951) |
| ▶️ YouTube | [youtube.com/@sazzadhossain01](https://youtube.com/@sazzadhossain01) |

---

## 📄 License & usage

This case study documents a **live commercial platform**. Screenshots, data and branding are
published here for portfolio and evaluation purposes with the owner's authorisation.

- ✅ You may reference the case-study page structure and poster design as portfolio inspiration.
- ❌ You may not reuse the GoldMaker brand, screenshots, platform data or the codebase itself.
- The case-study page's own HTML/CSS/JS (`index.html`, `assets/css`, `assets/js`) is portfolio
  material — please credit if you adapt it.

---

<p align="center">
  <sub><b>GoldMaker — Full-Stack Case Study</b> · Built, documented and captured by <b>Sazzad Hossain</b> · 2026</sub><br>
  <sub>35 screens · 3 surfaces · 1 codebase · <a href="https://github.com/developersazzad">github.com/developersazzad</a></sub>
</p>
