# Besterio Grocery Store

Besterio Grocery Store is an online platform developed using the Laravel PHP framework, CSS, and JavaScript, providing a convenient way for customers to purchase groceries and household items. This project aims to offer a user-friendly and responsive interface for both customers and administrators.

## Features

- User authentication and registration
- Browse and search for products
- Add products to the cart
- Checkout and place orders
- Admin panel for managing products, orders, and users

## Installation

### Requirements

- PHP 10.0 or higher
- Composer
- Node.js
- npm

### Steps

1. Clone the repository:
```bash
  git clone https://github.com/adecom16/besterio-grocery-store.git
```
2. Install PHP dependencies:
```
    composer install
```
3. Install JavaScript dependencies:
```
  npm install
```
4. Create a copy of the `.env.example` file and rename it to `.env`. Update the necessary configuration parameters such as database credentials.

5. Generate an application key:
```
  php artisan key:generate
```
6. Run the database migrations:
  ```
    php artisan migrate
  ```
7. (Optional) Seed the database with sample data:
  ```
    php artisan db:seed
```
8. Compile assets:
  ```
    npm run dev
```
9. Start the development server:
  ```
    php artisan serve


```
## Contributing

We welcome contributions to the Besterio Grocery Store project. To contribute, please follow these steps:

1. Fork the repository.
2. Create your feature branch: `git checkout -b feature/YourFeature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push the branch to your fork: `git push origin feature/YourFeature`
5. Submit a pull request.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

## Authors

- Adefokun Israel


## Acknowledgements

We would like to express our gratitude to the Laravel community for providing a robust framework for developing web applications.








