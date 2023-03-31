<a name="readme-top"></a>

<!-- PROJECT SHIELDS -->

[![LinkedIn](https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555)](https://www.linkedin.com/in/daniel-pimenta-cc/)

<!-- PROJECT LOGO -->

<br />
<div align="center">
  <a href="http://danielpimenta.tech/">
    <img src="preview.png" alt="Logo" height="200">
  </a>

<a href="http://danielpimenta.tech/"><h3 align="center">Virtual Card Generator</h3></a>

<p align="center">
    Project created for Buzzvel’s admission test. The task was to create a website for virtual business cards where the user could register information and generate a QR code that leads to a page with the registered information when scanned..
    <br />
    <a href="https://github.com/daniel-pimenta-cc/virtual-card-generator"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="http://danielpimenta.tech/">View Demo</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

The project was created using the MVC pattern, where the models are located in the `app/Models` folder, the views are located in the `resources/views` folder and the controllers are located in the `app/Http/Controllers` folder. The project was deployed on a Google Cloud VM instance.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

* [![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
* [![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
* [![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com/)
* [![Docker](https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites

* Docker
* Docker Compose

Before starting the project, make sure you have Docker and Docker Compose installed on your machine.

### Installation


1. Clone the repo
   ```sh
   git clone https://github.com/daniel-pimenta-cc/virtual-card-generator
   ```
2. Enter the project folder 
   ```sh
   cd virtual-card-generator
   ```

3. Configure environment variables
   ```sh
   cp .env.example .env
   nano .env
   ```

* the `DB_HOST` variable should be set to `db` wich is the name of the database container

4. Run the containers
   ```sh
    docker-compose up -d
   ```

5. Install dependencies and setup application key
first, enter the php container
   ```sh
    docker-compose exec backend /bin/bash
   ```
then run the folowing comands on the container shell
    ```sh
    composer install
    php artisan key:generate
   ```


<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Daniel Pimenta - [Linkedin](https://www.linkedin.com/in/daniel-pimenta-cc/) - danipimentasousa@gmail.com

Project Link: [https://github.com/daniel-pimenta-cc/virtual-card-generator](https://github.com/daniel-pimenta-cc/virtual-card-generator)

<p align="right">(<a href="#readme-top">back to top</a>)</p>


