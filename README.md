# Task Manager API Documentation

Welcome to the Task Manager API, a RESTful service developed with Laravel to manage tasks and projects efficiently. This API leverages Laravel Sanctum for authentication, ensuring secure access to your data. Below you will find a comprehensive guide to help you get started with integrating and using the Task Manager API.

## Getting Started

### Prerequisites

- PHP >= 8
- Composer
- Laravel 10.x
- A database system (MySQL)

### Installation

1. Clone the repository to your local machine:
   ```sh
   git clone https://github.com/angatiabenson/task-manager-api
   ```

2. Navigate into the project directory:
   ```sh
   cd task-manager-api
   ```

3. Install dependencies with Composer:
   ```sh
   composer install
   ```

4. Copy `.env.example` to `.env` and configure your environment variables, including your database connection:
   ```sh
   cp .env.example .env
   ```
   
5. Run migrations to create the database schema:
   ```sh
   php artisan migrate
   ```

6. Start the Laravel development server:
   ```sh
   php artisan serve
   ```
   Your Task Manager API is now up and running!

## API Endpoints

### Authentication

#### Login

- **URL**: `/login`
- **Method**: `POST`
- **Description**: Authenticates the user and returns an API token.

#### Register

- **URL**: `/register`
- **Method**: `POST`
- **Description**: Registers a new user and returns an API token.

### Users

#### Get Current User

- **URL**: `/user`
- **Method**: `GET`
- **Auth Required**: Yes
- **Description**: Returns the authenticated user's details.

### Tasks

- **Base URL**: `/tasks`
- **Auth Required**: Yes
- **Methods**: `GET`, `POST`, `PUT`, `DELETE`
- **Description**: Manage tasks with full CRUD operations.

### Projects

- **Base URL**: `/projects`
- **Auth Required**: Yes
- **Methods**: `GET`, `POST`, `PUT`, `DELETE`
- **Description**: Manage projects with full CRUD operations.

## Usage

### Making Requests

To interact with the API, use the provided endpoints. Ensure you include the `Authorization: Bearer <token>` header in requests requiring authentication.

### Handling Responses

The API responds with standard HTTP status codes. Successful operations will return `200 OK` or `201 Created`, while client errors return `4XX` codes, and server errors return `5XX` codes.

## Security

This API uses Laravel Sanctum for authentication. Protect your API tokens and ensure secure HTTPS connections.

## License

The Task Manager API is open-sourced software licensed under the MIT license.
