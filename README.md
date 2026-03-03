# AKIFA Hair Oil Landing Page

Responsive conversion-focused landing page built with **PHP + TailwindCSS + JavaScript** and a **MySQL order capture backend**.

## Tech stack

- PHP (landing page + order endpoint)
- TailwindCSS (CDN)
- Vanilla JavaScript (mobile menu interactions)
- MySQL (order storage)

## Project files

- `index.php` – main landing page UI
- `submit_order.php` – receives order form, validates, inserts into MySQL
- `db.sql` – database/table setup

## Local run

```bash
php -S 0.0.0.0:8000
```

Then open: `http://localhost:8000`

## Database setup

1. Create DB/table:

```bash
mysql -u root -p < db.sql
```

2. Set environment variables (optional, defaults shown):

```bash
export DB_HOST=127.0.0.1
export DB_NAME=akifa_landing
export DB_USER=root
export DB_PASS=''
```

## Notes

- If DB is not connected, form redirects with a safe error message.
- Image has a fallback if primary URL is unavailable.
