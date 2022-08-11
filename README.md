git push -u -f origin master
php artisan make:controller MailController
php artisan make:mail TestMail
parametre .env
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT= 465
MAIL_USERNAME=alertes@cisix.sn
MAIL_PASSWORD=passer2009
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=alertes@cisix.sn
