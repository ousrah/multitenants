# Laravel Saas 
--------------
  
## Laravel 12 Multi-Tenant, Multi-Module & Multi-Theme SaaS Boilerplate

This project is an advanced, open-source boilerplate demonstrating a comprehensive architecture for building scalable SaaS (Software as a Service) applications with Laravel 12.

Beyond standard multi-tenancy, this application is built on **three core pillars**:

1.  **🏢 Multi-Tenant Foundation**: Each client (tenant) operates with a completely isolated database, ensuring data privacy and security, all managed from a central application. (*Powered by `stancl/tenancy`*)

2.  **📦 Multi-Module Architecture**: The backend is organized into independent modules (e.g., `School`, `Billing`). This approach ensures superior maintainability and scalability, allowing development teams to work on features in isolation and keeping the core application lean. (*Implemented with `nwidart/laravel-modules`*)

3.  **🎨 Multi-Theme System**: Offer true customization to your clients. Each tenant can have a unique visual identity with a dynamic theming system that loads tenant-specific Blade views, components, and assets (CSS/JS) compiled with Vite.

This powerful combination provides a solid foundation for any ambitious SaaS project.

This repository serves as a practical companion to the full course available here:
**[▶️ Follow the detailed course on https://ousrah.portal-edu.com/multitenants](https://ousrah.portal-edu.com/multitenants?lang=en)**



---

## ✨ Key Features

*   **Multi-Tenant Architecture**: Complete data isolation for each client using the `stancl/tenancy` package.
*   **Central Database**: Manages tenants, their domains, and global application settings.
*   **Automated Tenant Setup**: On-the-fly creation, migration, and seeding of tenant databases.
*   **Modular Architecture**: The codebase is organized into modules (e.g., `School`, `Billing`) using `nwidart/laravel-modules` for better maintainability.
*   **Dynamic Theming System**: Each tenant can be assigned a unique visual theme, with assets (CSS/JS) compiled via Vite.js.
*   **Performance**: Uses Redis for handling cache, sessions, and queues.
*   **Admin Panel**: A complete CRUD interface in the central application to manage tenants and their domains.

---

## 🛠️ Tech Stack

*   **Framework**: Laravel 12
*   **Multi-Tenancy**: `stancl/tenancy`
*   **Modularity**: `nwidart/laravel-modules`
*   **Database**: MySQL
*   **Cache & Sessions**: Redis (`predis/predis`)
*   **Frontend**: Blade, Tailwind CSS, Alpine.js
*   **Asset Compilation**: Vite.js

---

## 🚀 Quick Start

1.  **Clone the project**
    ```bash
    git clone https://github.com/ousrah/multitenants.git
    cd multitenants
    ```

2.  **Install dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Setup**
    *   Copy the `.env.example` file to `.env`.
    *   Configure your central database credentials (`DB_*`).
    *   Configure your Redis server connection details (`REDIS_*`).
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Run central migrations**
    This command will create the `tenants`, `domains`, and other central tables in your main database.
    ```bash
    php artisan migrate
    ```

5.  **Compile assets**
    ```bash
    npm run build
    ```

6.  **Configure your `hosts` file (for local testing)**
    Add your test domains to your `hosts` file to point them to your local machine.
    *   **Windows**: `C:\Windows\System32\drivers\etc\hosts`
    *   **macOS/Linux**: `/etc/hosts`

    ```
    127.0.0.1 central.manar.com # Central domain
    127.0.0.1 school1.manar.com # Example tenant domain
    ```

7.  **Start the server**
    ```bash
    php artisan serve
    ```
    You can now access the central application at `http://central.manar.com:8000`.

---

## 🎓 Author & Contact

This project was developed and is maintained by:

*   **Name**: Rahmouni Oussama
*   **Title**: Trainer in Software Development & Data Science, ISMO
*   **Email**: [ousrah@gmail.com](mailto:ousrah@gmail.com)
*   **Phone**: +212 6 12 96 24 66

Feel free to reach out with any questions or for collaboration opportunities.