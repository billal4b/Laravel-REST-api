## How to build restful api in laravel 5.5 :

In this example i will create products table and create rest api of products with resource route. Here i also attach screen shot for all resource route response, so you can check response for GET, POST, PUT and DELETE for list, create, update and delete. So let's just follow bellow step and you will get best api platform.

## Route URL : 
```php
  1) action : GET, URL:http://localhost:8000/api/products 
  2) action : POST, URL:http://localhost:8000/api/products
  3) action : PUT, URL:http://localhost:8000/api/products/{id}
  5) action : DELETE, URL:http://localhost:8000/api/products/{id}
  ```
  

### Step 1 : Install Laravel Application
 
 ```sh
  terminal run bellow command : composer create-project --prefer-dist laravel/laravel REST-API
```
### Step 2 : Create Product Table
```sh
  Terminal run bellow command : php artisan make:migration create_products_table 
  ```
   add two field in this migration file  
   
   ```php
   1. $table->string('name');
   2. $table->string('description');
   ```
   
   ```sh
  Terminal run bellow command : php artisan migrate
  ```
  
### Step 3 : Create Product Model

```php
   Create Product.php file in this path app/Product.php
   ```
   
### Step 4 : Create API Route

```php
   Open your routes/api.php file and add following route.
   
   Route::resource('products', 'API\ProductController');
   ```
   
### Step 5 : Create Controller

Download above two controller file and add Controller
 ```php
  1. app/Http/Controllers/API/BaseController.php
  2. app/Http/Controllers/API/ProductController.php
  ```
Now simply you can run above listed url in the postman

