## Learn Laravel

This is the simple REST API using laravel. You can find restaurant including address and their open/close time.

## Install and run

For install instruction please visit https://laravel.com/docs/5.6

Create database "learn_laravel" and run:

    php artisan migrate


If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:

    php artisan serve


## API Reference

- GET /api/items

    To print all items.
- GET /api/items/{id}

    To print an item based on id.
- POST /items

    To add new item.
- DELETE /items/{id}

    To delete an item based on id.
- POST /items/{id}/update

    To update existing item based on id.


