Para hacer funcionar el proyecto asegurate de tener tu variable .env con los datos necesarios para la base de datos
Corre "php artisan passport:install" para agregar las dependecias de autentificacion, metodos, tablas de la base de datos, etc
y ejecuta "composer dump-autoload", tambien se necesita npm run dev para actualizar las partes de vue y ademas sass --watch public/sass/main.scss:public/css/main.min.css --style compressed para los estilos de sas, se ha agregado el modulo de paypal junto con klikandpay y un modulo para el carrito

prueba

ya tiene agregado el gateway secureonpay https://github.com/securionpay/securionpay-php