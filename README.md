<!-- PROJECT LOGO -->
<div align="center">
  <h3 align="center">laravel-microservice-projectB</h3>

  <p align="center">
    Dockerized Laravel9 Project
    <br />
    <b>Docker Images</b>
    <br />
    php:8.1-fpm
    |
    mysql:8.0
    |
    phpmyadmin/phpmyadmin
    |
    nginx:latest
    |
    redis:3.0
  </p>
 
</div>

<!-- GETTING STARTED -->
## Getting Started
1. Clone the repo
   ```sh
   git clone https://github.com/gihandilanka-github/laravel-microservice-projectB.git
   ```
2. Go inside the cloned directory
    ```
   cd laravel-microservice-projectB
3. Configure the ```.env``` file
    ```
   cp .env.example .env
   ```
4. Run this command to up docker containers
    ```
   docker-compose up -d --build
   ```
5. Run composer install
    ```
   docker-compose exec app composer install
   ```
6. Generate APP_KEY in .```env```
    ```
   docker-compose exec app php artisan key:generate
   ```
7. Run the migrate command to create new tables in database
    ```
   docker-compose exec app php artisan migrate
   ```   
8. Run seeder to insert customer records to customers table
    ```
   docker-compose exec app php artisan db:seed --class=CustomerSeeder
   ```
9. Add these two records to ```/etc/hosts``` file
    ```
   127.0.0.1    api.microservice-b.test
   127.0.0.1    pma.microservice-b.test
   ```
10. Open the phpmyadmin in the browser. You can see the ```microserviceB``` database
    ```
    http://pma.microservice-b.test:8083
    ```
11. Give these laravel directory permissions
    ```
    sudo chmod -R 777 storage/logs/
    sudo chmod -R 777 storage/framework/
    ```    
12. You can check the following API url, it will return the customers as ```json``` response
    ```
    http://api.microservice-b.test:8084/api/v1/customer/list
    ```
         

