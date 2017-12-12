## How to build restful api in laravel 5.5 :

In this example i will create posts table and create rest api of posts with resource route. Here i also attach screen shot for all resource route response, so you can check response for GET, POST, PUT and DELETE for list, create, update and delete. So let's just follow bellow step and you will get best api platform.

## Route URL : 

  1) action : GET, URL:http://localhost:8000/api/posts 
  2) action : POST, URL:http://localhost:8000/api/posts
  3) action : PUT, URL:http://localhost:8000/api/posts/{id}
  5) action : DELETE, URL:http://localhost:8000/api/posts/{id}

### Step 1 : Install Laravel 5.5 App
 
  terminal run bellow command : composer create-project --prefer-dist laravel/laravel REST-API

### Step 2 : Create Post Table

  Terminal run bellow command : php artisan make:migration create_posts_table 
  
   add two field in this migration file  
   1. $table->string('name');
   2. $table->string('description');
   
  Terminal run bellow command : php artisan migrate
  
### Step 3 : Create Post Model
   Create Post.phpfile in this path app/Post.php
   
### Step 4 : Create API Route
   Open your routes/api.php file and add following route.
   
   Route::resource('posts', 'API\PostAPIController');
   
### Step 5 : Create Controller
Download above two file and add Controller
 
  1. app/Http/Controllers/API/APIBaseController.php
  2. app/Http/Controllers/API/PostAPIController.php
  
Now simply you can run above listed url in the postman

