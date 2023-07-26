# App_api
В этом проекте мы используем Laravel для создания API товаров с различными свойствами.

## Используемые технологии
1. Laravel: это популярный фреймворк для разработки веб-приложений на PHP.
2. MySQL: это открытая система управления реляционными базами данных (СУБД).
## Установка
1. Клонировать репозиторий: git clone https://github.com/rustemib/rocket_app_api.git.
2. Перейти в директорию проекта: cd your-repo.
3. Запустить: composer install.
4. Заменить файл .env.example на .env и прописать там подключение к БД DB_CONNECTION=mysql итд.
5. Выполнить миграции базы данных: php artisan migrate.
6. Заполнить базу данных: php artisan db:seed --class=ProductSeeder.
7. Заполнить базу данных: php artisan db:seed --class=ProductPropertySeeder.
8. Запустить сервер: php artisan serve.
## Использование
1. Регистрация пользователя, Postman - POST запрос http://127.0.0.1:8000/api/register с данными (положить в body) - { "name": "John Wick", "email": "john@example.com", "phone": "+71234567890", "password": "Password1$", "password_confirmation": "Password1$" }
2. После получения токена, пример - "token": "1|ELlKRpNiLYx36WeNanL9ou0rZc1b3hRHylg9cTGU" можно выполнять запросы
3. Получение списка всех товаров: GET /products (заполнить Authorization - Authorization и токен (1|ELlKRpNiLYx36WeNanL9ou0rZc1b3hRHylg9cTGU)).
4. Получение списка товаров с фильтрацией: http://127.0.0.1:8000/api/products?properties[color1][]=lime&properties[color2][]=green&properties[brand][]=Gusikowski, Mayert and Schuppe.
