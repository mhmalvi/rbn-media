# RBN Media

A comprehensive media and education consultancy platform built with Laravel. RBN Media serves as an information hub for students seeking international study opportunities, scholarship guidance, and visa assistance services.

## Features

- **Content Management** — Admin panel for managing blog posts, articles, and events with tagging support
- **Scholarship Directory** — Listings and guidance for renowned scholarships, language scholarships, and PhD admission services
- **Study Abroad Pages** — Dedicated pages for studying in the USA, UK, Canada, Australia, Germany, Dubai, Malaysia, and Switzerland
- **Student Registration** — Online registration form with eligibility checks
- **Visa Services** — Visa assistance and express visa processing information
- **Contact & Enquiry** — Email-based contact system with PDF generation (DomPDF)
- **Office Locations** — Information pages for Dhaka and Sylhet offices

## Tech Stack

- **Framework:** Laravel 8
- **PHP:** 7.3+ / 8.0+
- **Authentication:** Laravel Sanctum
- **PDF Generation:** barryvdh/laravel-dompdf
- **Frontend:** Blade templates with admin dashboard
- **Database:** MySQL

## Getting Started

```bash
# Clone the repository
git clone https://github.com/mhmalvi/rbn-media.git
cd rbn-media

# Install dependencies
composer install

# Configure environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Start the development server
php artisan serve
```

## Project Structure

```
app/
├── Http/Controllers/
│   ├── Admin/          # Articles, Blog, Event, Tag management
│   ├── HomeController  # Public-facing pages
│   ├── PageController  # Static content pages
│   └── SendEmailController
├── Models/Admin/       # Blog, Articles, Event, Tag
└── Models/             # User, StudentRegistration
resources/views/
├── admin/              # Admin dashboard views
└── user/pages/         # Public pages (study abroad, scholarships, etc.)
```

## License

MIT
