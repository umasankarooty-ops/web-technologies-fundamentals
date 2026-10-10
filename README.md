# web-technologies-fundamentals
cd ~/web-technologies-fundamentals

cat > README.md <<'EOF'
# Web Technologies Fundamentals

## Project Overview
Beginner assignment covering HTML, PHP, MySQL and HTTP request analysis,
hosted on an AWS EC2 Linux instance.

## Topics Covered
- Five HTML pages with forms, tables and lists
- GET and POST request handling
- Ten PHP practice scripts
- PHP and MySQL login demonstration
- HTTP headers, cookies and sessions
- Browser developer tools and Burp Suite
- Website source inspection and Wappalyzer

## Environment
- AWS EC2 Linux
- Apache HTTP Server
- PHP
- MariaDB / MySQL
- Git and GitHub

## Run
Deploy the HTML and PHP files to a PHP-enabled web server.
Configure database credentials outside the source repository.
See database/schema.sql for the database structure.

## Security
This is an educational lab. Do not use real passwords or production data.
EOF

cat > .gitignore <<'EOF'
.env
*.env
config.local.php
*.sql.bak
.DS_Store
EOF
