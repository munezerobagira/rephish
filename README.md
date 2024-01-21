# Rephish

## About
We strive to empower organisations and individuals to protect themselves from the escalating threat of phishing attacks.
Our platform provides a comprehensive set of tools and resources to simulate phishing attacks, educate users about these threats,
and raise awareness about cybersecurity best practices.
With Rephish, you can create customized phishing campaigns, track user engagement, and analyze the effectiveness of your security measures.
We believe that by working together, we can create a more secure and resilient digital environment for all people.

## Inspirations

This project was heavely inspired by gophish
## How to test the application

- The project was developed using php 8.2,The backward compatibility was not tested.  Start by Installing Php 
- Install composer https://github.com/munezerobagira/rephish.git
- Clone the repository from https://github.com/munezerobagira/rephish.git
- Install php packages for running the project `composer install`
- Create file .env Copy .env.example to .env 
- Add the database configuration for faster testing you can use sqlite.
- Generate key by running `php artisan key:generate`
- Run the migration and seeders `php artisan migrate:fresh –seed`
- Start the server by running `php artisan serve 
- You can use these credentials to the test the user
- Demo user one  with email   demo@rephish.com and  password: `password`
- Demo user two  with email   demo2@rephish.com and  password: `password`
- Admin with all privelage  with email   admin@rephish.com and  password: `password`
