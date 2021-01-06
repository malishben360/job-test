# job-test
Program that update the tables as needed, show the user a preview of their data before updating.
					=====SETUP=====
# Install dependency
npm install

npm install axios@0.21.1

# Generate a new Application key
composer install

php artisan key:generate

# Migration and DB seeder (after changing your DB settings in .env)
php artisan migrate --seed

# Build for development
npm run dev # or npm run watch

# Start local development server
php artisan serve
