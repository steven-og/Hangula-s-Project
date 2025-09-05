
## Overview

This project is a small WordPress demo site built for businesses and individuals to help them with their tech problems. It demonstrates theme customization via a child theme, content modeling with a Custom Post Type (CPT), clean structure, basic security/performance optimizations, and responsive design.

---

## ⚙️ Setup Instructions

### Requirements

* **PHP:** 7.4+
* **XAMPP:** v3.3.0
* **WordPress:** 6.6+
* **Theme:** Astra (parent) + Hangula Child Theme

Installation (Fresh Setup)

Install XAMPP locally (https://www.apachefriends.org/
) and start Apache + MySQL.

Install WordPress in your XAMPP htdocs folder.

Log in to the WordPress dashboard.

Install and activate the Astra theme.

Upload and activate the Hangula Child Theme (included in this repo/ZIP).

Install required plugins (see list below).

Import the demo site (see instructions below).

---

## Importing the Demo Site

To restore the full demo site using **All-in-One WP Migration**:

1. Install WordPress locally (using LocalWP, MAMP, XAMPP, etc.).
2. Log in to the WordPress dashboard.
3. Go to **Plugins → Add New → Upload Plugin**.
4. Upload and activate the plugin: **All-in-One WP Migration**.
5. In the left menu, go to **All-in-One WP Migration → Import**.
6. Click **Import From → File**.
7. **Download the export file** from Google Drive (or your preferred cloud service):
   [Download site-export.wpress](https://drive.google.com/drive/folders/1i1pf3_q6JGJlI-cB434b9YaQWt0AGGa1?usp=sharing)
8. Select the downloaded `.wpress` file to start the import.
9. Wait for the upload to finish, then click **Proceed** when prompted.
10. Once import is complete, log in with the demo credentials:

    * **Username:** root
    * **Password:** root
11. Visit the site — you now have the exact version I built, including pages, blog posts, CPT, plugins, and settings.

---

## Plugins Used

* **All-in-One WP Migration** – for exporting/importing the site.
* **Child Theme Configurator** – for generating the Astra child theme.
* **Elementor** – drag-and-drop builder for customizing layouts.
* **Ultimate Addons for Elementor Lite** – extended widgets for Elementor.
* **Starter Templates** – quick starter blocks and layouts.
* **WPForms Lite** – contact form with field validation.
* **WP Fastest Cache** – caching for performance optimization.
* **Seraphinite Accelerator (limited)** – basic performance acceleration.
* **SureRank SEO** – lightweight SEO toolkit.
* **Limit Login Attempts Reloaded** – brute force protection (limits login attempts).
* **Stop User Enumeration** – disables author ID exposure.

---

## Site Structure

### Pages

1. **Home** – intro text, service highlights, and a “Let’s Talk” call-to-action.
2. **Services We Provide** – Lists 3 services: IT Consulting, Web Development, and Optimization. Includes a “Why Choose Us” section.
3. **About Us** – Contains “Our Mission”, “Our Story”, and a highlighted quote.
4. **Contact Us** – WPForms contact form with validation (required fields + email format). Includes a short prompt to reach out.
5. **IT Blog** – Blog listing page with 3 posts.

### Custom Post Type (CPT)

* **Services** CPT created to model offerings.
* Includes archive (`archive-service.php`) and single templates (`single-service.php`) in the child theme.

---

## Security

* **Pretty permalinks enabled** (`/post-name/`).
* **Login attempt limiting** via *Limit Login Attempts Reloaded*.
* **User enumeration blocked** via *Stop User Enumeration*.

---

## Performance & Accessibility

* **Caching:** WP Fastest Cache.
* **Image compression:** Optimized images via Starter Templates + Elementor.
* **Performance Lighthouse score:** 82 on Home Page.
* **Accessibility Lighthouse score:** 92 on Home Page.
* Fully responsive across **desktop, tablet, and mobile**.

---

## Architecture Notes & Trade-Offs

* **Astra** was chosen as the base theme due to its lightweight nature and compatibility with Elementor.
* A **child theme (Hangula Child Theme)** was used to safely override styles and add CPT templates.
* **Elementor + Starter Templates** were used for rapid layout design, trading some performance for speed of development.
* Performance was boosted with **WP Fastest Cache** and **Seraphinite Accelerator**, but more tuning (e.g., image lazy-loading, CDN) could raise the score further.
* Security tasks were kept minimal but essential: blocking user enumeration and limiting brute force attacks.

---

## Lighthouse Scores

Home Page (Desktop):

* **Performance:** 82
* **Accessibility:** 92

Screenshot provided separately.

---

## "There's always room for improvement👍"
