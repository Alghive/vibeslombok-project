# Authentication System Setup

This document explains how to set up and use the authentication system for the Vibes Lombok project.

## Database Setup

### 1. Configure Database Connection

Make sure your `.env` file has the correct database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vibeslombok
DB_USERNAME=root
DB_PASSWORD=
```

### 2. Run Migrations

Create the database tables:

```bash
php artisan migrate
```

### 3. Seed the Database

Add test users to the database:

```bash
php artisan db:seed
```

## Test Users

After running the seeder, you can use these test accounts:

1. **Admin User**
   - Email: `admin@vibeslombok.com`
   - Password: `password123`

2. **Test User**
   - Email: `test@vibeslombok.com`
   - Password: `password123`

3. **Demo User**
   - Email: `demo@vibeslombok.com`
   - Password: `password123`

## Features

### Authentication Features

1. **User Registration**
   - Route: `/register`
   - Form validation for name, email, and password
   - Password confirmation required
   - Terms & conditions checkbox required

2. **User Login**
   - Route: `/login`
   - Email and password authentication
   - Remember me functionality
   - Form validation with error messages

3. **User Logout**
   - Route: `/logout` (POST)
   - Clears session and redirects to home

4. **Profile Management**
   - Route: `/profile` (requires authentication)
   - View and update profile information
   - Change password functionality

### Database Schema

The `users` table includes:
- `id` (Primary Key, Auto Increment)
- `name` (VARCHAR 255, Required)
- `email` (VARCHAR 255, Unique, Required)
- `email_verified_at` (TIMESTAMP, Nullable)
- `password` (VARCHAR 255, Required, Hashed)
- `remember_token` (VARCHAR 100, Nullable)
- `created_at` (TIMESTAMP, Nullable)
- `updated_at` (TIMESTAMP, Nullable)

## Usage

### Login Process

1. Navigate to `/login`
2. Enter email and password
3. Optionally check "Remember Me"
4. Click "Login" button
5. Upon successful login, you'll be redirected to the home page

### Registration Process

1. Navigate to `/register`
2. Fill in the required fields:
   - Full Name
   - Email Address
   - Password
   - Confirm Password
3. Check the "I agree to the terms & conditions" checkbox
4. Click "Register" button
5. Upon successful registration, you'll be automatically logged in

### Profile Management

1. Navigate to `/profile` (requires authentication)
2. Update your profile information
3. Change your password if needed
4. All changes are saved to the database

## Security Features

- Password hashing using Laravel's built-in Hash facade
- CSRF protection on all forms
- Session-based authentication
- Input validation and sanitization
- SQL injection protection through Eloquent ORM
- XSS protection through Blade templating

## Error Handling

The system includes comprehensive error handling:
- Form validation errors
- Authentication failure messages
- Database error handling
- User-friendly error messages in Indonesian

## Routes

| Method | Route | Controller Method | Description |
|--------|-------|-------------------|-------------|
| GET | `/login` | `showLoginForm()` | Show login form |
| POST | `/login` | `login()` | Process login |
| POST | `/logout` | `logout()` | Process logout |
| GET | `/register` | `showRegisterForm()` | Show registration form |
| POST | `/register` | `register()` | Process registration |
| GET | `/profile` | `profile()` | Show profile (auth required) |
| POST | `/profile/update` | `updateProfile()` | Update profile (auth required) |
| POST | `/profile/change-password` | `changePassword()` | Change password (auth required) |
| GET | `/check-auth` | `checkAuth()` | Check authentication status (API) |

## Troubleshooting

### Common Issues

1. **Database Connection Error**
   - Check your `.env` file configuration
   - Ensure MySQL/MariaDB is running
   - Verify database credentials

2. **Migration Errors**
   - Run `php artisan migrate:fresh` to reset database
   - Check for syntax errors in migration files

3. **Authentication Not Working**
   - Clear application cache: `php artisan cache:clear`
   - Clear config cache: `php artisan config:clear`
   - Ensure sessions are working properly

4. **Form Validation Errors**
   - Check that all required fields are filled
   - Ensure email format is valid
   - Verify password confirmation matches

## Development Notes

- The system uses Laravel's built-in authentication features
- All passwords are hashed using bcrypt
- Session configuration is handled by Laravel
- The User model extends Laravel's Authenticatable class
- Middleware protects routes that require authentication
