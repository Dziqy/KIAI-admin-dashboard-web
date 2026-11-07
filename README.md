<div align="center">

# 🕌 KIAI Admin Dashboard Website

### *The control center behind KIAI — manage kajian, ustadz, and community data from one powerful web dashboard.*

![Laravel](https://img.shields.io/badge/Laravel-8.x-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.3%20|%208.x-777BB4?logo=php&logoColor=white)
![Sanctum](https://img.shields.io/badge/Auth-Laravel%20Sanctum-FF2D20)
![Laravel Mix](https://img.shields.io/badge/Assets-Laravel%20Mix%206-F9645D)
![License](https://img.shields.io/badge/License-MIT-green)

</div>

---

## 📖 About

**KIAI Admin Dashboard** is the web-based back office for the **KIAI** platform, which helps Muslims discover Islamic study sessions (*kajian*). Built on **Laravel**, it lets administrators manage the content and data that power the [KIAI Android app](https://github.com/Dziqy/KIAI-android-app).
<!-- TODO: Confirm that this project also serves the REST API used by the Android app. -->

---

## 📸 Features

<div align="center">
    
**KIAI Administrator Dashboard**
    
<img width="641" height="660" alt="image" src="https://github.com/user-attachments/assets/be627532-5019-42c8-a34c-ab401fc0c9b2" />

**Registration Page**

<img width="726" height="362" alt="image" src="https://github.com/user-attachments/assets/fc198876-afc9-4154-a6b0-2a8012ebb54a" />

**Managing Page**

<img width="638" height="479" alt="image" src="https://github.com/user-attachments/assets/5ff25113-9d2a-49d2-9729-dc26958c8d46" />

**Display of asatidz submission by takmir**

<img width="636" height="465" alt="image" src="https://github.com/user-attachments/assets/f0545b3b-aee4-4755-91b3-233026afd6cc" />

**Content list page view**

<img width="686" height="1027" alt="image" src="https://github.com/user-attachments/assets/25484500-87f3-4c08-8550-8a5ea0edeac4" />

</div>


**KIAI Admin Dashboard** provides several administrative modules to support the management of the KIAI platform.

### 📊 Dashboard Overview

| Feature | Description |
|---|---|
| 📈 **Platform Statistics** | Key figures for users, majelis, jamaah, and asatidz |
| 🕌 **Kajian Monitoring** | Track kajian activity counts and spot sessions marked inactive or on holiday |
| ⏳ **Registration Monitoring** | Keep an eye on pending user registrations |
| 🧭 **Centralized Information** | All important platform information in a single dashboard |

### 👥 User Management

| Feature | Description |
|---|---|
| 📋 **User Directory** | View and manage registered platform users |
| ✅ **Account Activation** | Activate user accounts |
| ⛔ **Account Deactivation** | Deactivate user accounts |
| 🛡️ **Role Management** | Assign administrator and majelis manager roles |
| 🗂️ **User Administration** | Manage user information through dedicated pages |

### 🏛️ Majelis Management

| Feature | Description |
|---|---|
| 📋 **Majelis Directory** | View registered Islamic study centers |
| 📝 **Registration Management** | Manage majelis registration information |
| 🔄 **Account Status Management** | Activate or deactivate majelis accounts |
| 🗂️ **Majelis Administration** | Maintain information associated with registered majelis |

### 📚 Kajian Management

| Feature | Description |
|---|---|
| ✏️ **Kajian Management** | Create, view, edit, and manage kajian records |
| 🔖 **Kajian Status Management** | Update the attendance or activity status of kajian sessions |
| 🌴 **Holiday Management** | Mark kajian activities as being on holiday |
| 🗂️ **Kajian Administration** | Manage information about Islamic study activities |

### 🎓 Asatidz Management

| Feature | Description |
|---|---|
| 📋 **Asatidz Directory** | Manage Islamic teacher information |
| 🗂️ **Asatidz Administration** | Dedicated management tools for registered teachers |
| 🔁 **Application Workflow** | Support the handling of submitted asatidz-related information |

### 📨 Registration & Application Management

| Feature | Description |
|---|---|
| 🔎 **Registration Review** | Review newly submitted user registrations |
| ✅ **Registration Approval** | Activate accounts for approved registrations |
| 📄 **Application Review** | Review applications submitted through the platform |
| ⚖️ **Application Decisions** | Accept or reject submitted applications |

### 🔐 Authentication & Profile Management

| Feature | Description |
|---|---|
| 🔑 **User Authentication** | Login and registration functionality |
| 🪪 **Session Management** | Authenticated access to dashboard features |
| 👤 **Profile Management** | View and update profile information |
| 🚧 **Access Control** | Selected dashboard routes protected by authentication middleware |

---

## 🛠️ Tech Stack / Built With

| Category | Technology |
|---|---|
| **Language** | PHP `^7.3 \| ^8.0`, JavaScript |
| **Framework** | [Laravel](https://laravel.com/) `^8.75` |
| **Authentication** | [Laravel Sanctum](https://laravel.com/docs/8.x/sanctum) `^2.11` |
| **HTTP Client** | [Guzzle](https://docs.guzzlephp.org/) `^7.0.1` |
| **CORS** | [fruitcake/laravel-cors](https://github.com/fruitcake/laravel-cors) `^2.0` |
| **Region Data** | [azishapidin/indoregion](https://github.com/azharidin/indoregion) `^3.0` |
| **Asset Bundling** | [Laravel Mix](https://laravel-mix.com/) `^6.0` (Webpack) |
| **Frontend Utilities** | Axios, Lodash, PostCSS |
| **Testing** | PHPUnit `^9.5`, Mockery, Faker |
| **Dev Tools** | Laravel Tinker, Laravel Sail, Ignition |
| **Package Managers** | Composer, npm |

---

## 🚀 Getting Started

### Prerequisites

- **PHP** 7.3+ (8.0 or 8.1 recommended) with extensions: `mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`
- **[Composer](https://getcomposer.org/)** 2.x
- **[Node.js](https://nodejs.org/)** 14–16 LTS and **npm** (Laravel Mix 6 is built for these versions)
- **A database**, e.g. MySQL 5.7+/MariaDB (check `.env.example` for the default driver)
- **Git**

### Installation

**1. Clone the repository**

```bash
git clone https://github.com/Dziqy/KIAI-admin-dashboard-web.git
cd KIAI-admin-dashboard-web
```

**2. Install PHP dependencies**

```bash
composer install
```

**3. Install JavaScript dependencies**

```bash
npm install
```

**4. Configure the environment**

```bash
cp .env.example .env
php artisan key:generate
```

Open `.env` and set your database credentials:

```env
APP_NAME=KIAI
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kiai
DB_USERNAME=root
DB_PASSWORD=
```

**5. Create the database and run migrations**

```bash
# Create an empty database named "kiai" first, then:
php artisan migrate

# Optional: seed sample data (if seeders exist)
php artisan db:seed
```

> 🇮🇩 The `indoregion` package ships its own migrations and seeders for Indonesian regions. See its documentation if you need to publish and seed them.

**6. Link the storage folder** *(for uploaded images/files)*

```bash
php artisan storage:link
```

**7. Build the frontend assets**

```bash
npm run dev
```

### Running Locally

Start the development server:

```bash
php artisan serve
```

Then open **http://localhost:8000** in your browser.

For live asset rebuilding while you work, run this in a second terminal:

```bash
npm run watch
```

<details>
<summary><b>🐳 Run with Laravel Sail (Docker)</b></summary>

```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
```

</details>

### Running Tests

```bash
php artisan test
# or
./vendor/bin/phpunit
```
