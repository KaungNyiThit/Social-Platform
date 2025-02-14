# Social Platform

## Introduction
Welcome to the Social Platform project! This README will guide you through the setup process to get the project up and running on your local machine.

## Prerequisites
Before you begin, ensure you have the following installed:
- [Node.js](https://nodejs.org/) (version 14.x or later)
- [npm](https://www.npmjs.com/) (version 6.x or later)
- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/) (version 2.x or later)
- [PHP](https://www.php.net/) (version 7.4 or later)

## Installation

1. **Clone the repository:**
    ```sh
    git clone https://github.com/your-username/social-platform.git
    cd social-platform
    ```

2. **Install Node.js dependencies:**
    ```sh
    npm install
    ```

3. **Install PHP dependencies:**
    ```sh
    composer install
    composer require laravel/ui
    php artisan ui bootstrap
    ```

4. **Set up environment variables:**
    Create a `.env` file in the root directory and add the necessary environment variables. Refer to `.env.example` for the required variables.

5. **Run database migrations:**
    ```sh
    php artisan migrate
    ```

6. **Start the development server:**
    ```sh
    php artisan serve
    ```

## Running Tests
To run tests, use the following command:
```sh
php artisan test
```

## Using Ai Tool
Used Github Copilot and chatgpt 

