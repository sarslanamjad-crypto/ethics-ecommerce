# Ethics Ecommerce - Minimalist E-Commerce Gateway

A foundational digital commerce platform that bridges basic business presence with online transaction capabilities. It includes essential content management tools alongside cart management and user registration workflows.

## Core Tech Stack
- **Framework:** Laravel 8, PHP 7.3/8.0
- **Database:** MySQL
- **Packages:** Laravel Sanctum, GuzzleHTTP

## Key Features
- **Core E-Commerce Module:** Functional shopping cart implementation utilizing cart_items data.
- **Billing Infrastructure:** Dedicated handling of customer billing information for streamlined checkouts.
- **User Authentication:** Secure registration and standard login workflows using modern authentication traits.
- **Content Management:** Manage team displays, professional projects, and FAQs via an integrated admin backend.

## Installation Guide

Follow these steps to run the application on your local machine:

1. **Install required PHP packages via Composer:**
   ```bash
   composer install
   ```

2. **Duplicate the sample `.env` configuration file:**
   ```bash
   cp .env.example .env
   ```

3. **Generate a secure application key:**
   ```bash
   php artisan key:generate
   ```

4. **Connect to your database via `.env` and migrate tables:**
   ```bash
   php artisan migrate
   ```

5. **Start the built-in PHP development server:**
   ```bash
   php artisan serve
   ```
