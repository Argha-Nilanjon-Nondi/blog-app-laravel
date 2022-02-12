
# Blog App

It is a blog app.



## Features
- Login
- Logout
- Admin
- Add Post
- Edit Post
- Delete Post
- List of post with pagination
- Single Post


## Built with
- Laravel(8.x)
- PHP
- Tailwind CSS
- ORM
- HTML5
- Javascript
## Database Setup
- Create a new phpmyadmin (username:root password:(empty))
- Create a database named "blog"
- Run these commands
```bash
php artisan migrate
php artisan db:seed
```
## Deployment

To strat the node server for tailwind css

```bash
npm run watch
```
To start the laravel server

```bash
php artisan serve
```

#### Remember
- default port is 8000 
- default hostname is localhost

## Screenshots
### Blog for all user (http://localhost:8000/blog)

![AppScreenshort](https://github.com/Argha-Nilanjon-Nondi/blog-app-laravel/blob/master/screenshot/public_blog.png?raw=true)

<br>

### Blog post

![AppScreenshort](https://github.com/Argha-Nilanjon-Nondi/blog-app-laravel/blob/master/screenshot/single_blog_post.png?raw=true)

<br>

## Admin
### Login (http://localhost:8000/login)

![AppScreenshort](https://github.com/Argha-Nilanjon-Nondi/blog-app-laravel/blob/master/screenshot/login.png?raw=true)

<br>

### Admin Blog

![AppScreenshort](https://github.com/Argha-Nilanjon-Nondi/blog-app-laravel/blob/master/screenshot/admin_blog.png?raw=true)

<br>

### Admin Add Post

![AppScreenshort](https://github.com/Argha-Nilanjon-Nondi/blog-app-laravel/blob/master/screenshot/admin_post_add.png?raw=true)

<br>

### Admin Update Post

![AppScreenshort](https://github.com/Argha-Nilanjon-Nondi/blog-app-laravel/blob/master/screenshot/admin_post_update.png?raw=true)

<br>

### Admin Delete Post

![AppScreenshort](https://github.com/Argha-Nilanjon-Nondi/blog-app-laravel/blob/master/screenshot/admin_post_delete.png?raw=true)

<br>

## Future Plan
- Add a home page for both user and admin
- Add a contact form
- Add a setting panel 

## License
- You can't use it for commercial usage
- You can use it just for eductional usage