<p align="center">
    <img src="public/favicon.png" width="8%" height="8%" alt="logo">
</p>

<h1 align="center">Учетно-сервисная платформа отдела ТОиСКТ</h1>
<p align="center">Проект предназанчен для электронного учета заявок, оборудования и решения прочих рабочих вопросов</p>

## Возможности
- REST API
- Миграция БД

## 🛠 Стек
- **Frontend:** Tailwind CSS
- **Backend:** Laravel
- **База данных:** PostgreSQL
- **Сборка:** Vite

## Установка и запуск
### Требования
- Node.js >= 18
- npm >= 9

### Клонировать репозиторий
```
git clone https://github.com/KAMINFSOL/toskt-web.git
cd toskt-web
```
### Установить зависимости (при необходимости)
```
npm install tailwindcss @tailwindcss/vite
```
### Скопировать переменные окружения
```
cp .env.example .env
```
### Собрать проект и запустить сервер
```
npm run build
php artisan serve
```
## Доступные скрипты

- `npm run dev` Запуск dev-сервера
- `npm run build` Сборка продакшн-версии
- `npm test` Запуск тестов
- `npm run lint` Проверка кода
- `php artisan serve` Запуск сервера
- `php artisan migrate` Запустить миграцию
- `php artisan migrate:fresh` Обновить миграцию

## Лицензия

GNU — подробнее в файле [LICENSE](./LICENSE.md)

## Автор

**Илья Фесянов**
- GitHub: [@q2l3ntk](https://github.com/q2l3ntk)
- Email: [zurskij@gmail.com](mailto:zurskij@gmail.com)