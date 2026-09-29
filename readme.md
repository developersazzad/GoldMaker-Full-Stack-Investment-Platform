# 🌟 GoldMaker - Make Your Money Shine

![Version](https://img.shields.io/badge/Version-1.0-blue.svg)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4.svg?style=flat&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1.svg?style=flat&logo=mysql)
![HTML5](https://img.shields.io/badge/HTML5-Bootstrap5-E34F26.svg?style=flat&logo=html5)
![Status](https://img.shields.io/badge/Status-Production_Ready-brightgreen.svg)

**GoldMaker** is a robust, full-stack digital investment and financial management platform. Engineered for both uncompromising investor trust and total operational control, it serves as a complete MLM/ROI ecosystem featuring secure wallet management, automated tier-based investment packages, and multi-level referral tracking.

Built with a sleek, dark-themed Progressive Web App (PWA) frontend for investors and a comprehensive command-center console for administrators.

---

## 🚀 Key Features

### 👤 Investor Dashboard (PWA)
A seamless, installable mobile-first web app providing investors with 100% transparency and easy asset management.
- **Wallet & Earnings:** Real-time visibility of main balance, 7-day, 30-day, and total earnings.
- **Dynamic Packages:** Discover and activate various investment tiers (Golden, Diamond, Regular) with clearly stated risk levels, durations, and daily returns.
- **Deposit & Withdrawal System:** Easy-to-use forms for transferring funds, requesting payouts, and uploading payment proofs.
- **Multi-Level Referral:** Integrated referral links and downline tracking.
- **Gamified Progress:** An 8-tier badge ladder (from NewBee to Master) designed for investor retention.
- **Security & KYC:** First-class identity verification flows ensuring compliance.
- **Personalization:** Fully supports Dark Mode, Light Mode, and multiple custom accent colors.

### 🛡️ Admin Command Center
A powerful backend control panel designed for operators to manage every aspect of the platform without touching a line of code.
- **Real-Time KPIs:** Live monitoring cards displaying platform health, total users, pending requests, and financial metrics.
- **User Management:** Complete investor registry with balance overview, plan assignment, and one-click account suspension.
- **Financial Approvals:** Streamlined queues for approving or rejecting deposits and withdrawals.
- **Website & Panel Customizers:** Visually edit landing page content, terms & conditions, and platform themes instantly.
- **Package Configuration:** Create and modify investment plans (price, return rates, lifecycle) on the fly.
- **Global Settings:** Control maintenance mode, deposit/withdrawal limits, referral bonuses, and system response times.
- **Dynamic Banners:** Advanced targeting to display custom promotional banners on specific user pages.

---

## 🛠️ Technology Stack

- **Frontend:** HTML5, CSS3, JavaScript (ES6), jQuery, Bootstrap 5, Swiper JS.
- **Backend:** PHP (8.1+ Compatible, Native/Procedural architecture).
- **Database:** MySQL (optimized relational schema).
- **Architecture:** Progressive Web App (PWA) compliant, AJAX-driven interactions.
- **Data Visualization:** Chart.js / ApexCharts (Admin data representation).

---

## ⚙️ Installation & Setup

1. **Clone or Upload:**
   Upload the project files to your server's public_html or htdocs directory.
2. **Database Configuration:**
   - Create a new MySQL database on your hosting panel.
   - Import the provided DB.sql file into your database.
3. **Connect the App:**
   - Open connection.php and update the database credentials (Host, Username, Password, Database Name).
4. **Admin Access:**
   - Navigate to /admin/index.
   - Use your configured admin credentials to log in.
5. **Permissions:**
   - Ensure your server has the correct read/write permissions for directories handling uploads (e.g., ssets/images/).

---

## 📂 Directory Structure

`	ext
├── admin/                  # Secure administrator dashboard & logic
├── user/                   # Investor PWA interface & account tools
├── create/                 # Authentication (Login, Register, Password Reset)
├── function/               # Core PHP utilities, SMTP config, and helper functions
├── assets/                 # Global CSS, JS, Fonts, and Image resources
├── dapendency/             # External libraries and Canva visual templates
├── DB.sql                  # Complete database schema and initial data
└── index.php               # Public landing page (Conversion surface)
`

---

## 🔗 Developer & Design Resources

*All developer credits, design templates, and operational hooks have been preserved in the system.*

- **Visual Assets (Canva Templates):**
  - [Logo Design](https://www.canva.com/design/DAFa1N9TfGU/MLBt9FqV36tvV0FgafWG6w/edit)
  - [GoldMaker Certificates](https://www.canva.com/design/DAFbssargXo/H-J7lWnrSIdMW2XY6YO7Tg/edit)
  - [Icon Set](https://www.canva.com/design/DAFahuY9WDQ/dyUtU6OIPZuJpjd2UdCBuA/edit)
  - [Customization Assets](https://www.canva.com/design/DAFazMvZ21E/BJ40KaZGspmxs7ruXvvpFQ/edit)

---

> **Note on Compatibility:** This platform has been heavily optimized for modern PHP 8.1+ environments. It employs safe null coalescing, explicit type casting, and structured data handling to ensure zero-warning execution on modern servers.
