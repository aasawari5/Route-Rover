# Route-Rover

Route Rover is a fleet management system software that enables live tracking of vehicles over specific routes and facilitates communication between the vehicle and the owner. The system provides detailed information on distance covered, remaining fuel, acceleration, and speed.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [prerequistes]
- [Steps]
- [Configuration](#configuration)
- [Applications]

## Features

- **Live Tracking**: Real-time tracking of vehicles over specific routes.
- **Communication**: Enables communication between the vehicle and the owner using MQTT.
- **Analytics**: Provides data on distance covered, remaining fuel, acceleration, and speed.
- **User-friendly Interface**: Interactive and intuitive front-end built with HTML, CSS, and JavaScript.

## Technologies Used

- **Front-end**: HTML, CSS, JavaScript
- **Server-side**: PHP
- **Backend**: Python
- **Database**: MySQL
- **Communication**: MQTT

## Installation

-requires installation of XAMPP server and the Apache and MySql port runs smoothly.

### Prerequisites

Ensure you have the following installed on your local development machine:

- [PHP](https://www.php.net/)
- [Python](https://www.python.org/)
- [MySQL](https://www.mysql.com/)
- [MyMQTT](android application) 

### Steps

1. **Clone the repository**

    ```bash
    git clone https://github.com/aasawari5/route-rover.git
    cd route-rover
    ```

2. **Install Front-end Dependencies**

    Navigate to the `frontend` directory and install dependencies:

    ```bash
    cd frontend
    npm install
    ```

3. **Set Up the Server-side (PHP)**

    Ensure your PHP server is running and configured correctly.

4. **Set Up the Backend (Python)**

    Navigate to the `backend` directory and install required Python packages:

    ```bash
    cd ../backend
    pip install -r requirements.txt
    ```

5. **Set Up the Database**

    Import the database schema using MySQL:

    ```bash
    mysql -u username -p database_name < database/schema.sql
    ```

6. **Configure MQTT Broker**

    Ensure your MQTT broker is set up using correct topic and running.


## Configuration

- **Front-end Configuration**: Modify the front-end configuration in `index.php`.
- **Backend Configuration**: Update the backend settings in `truck_scania.py`, `truck_mack.py`, `truck_daf.py`.
- **Database Configuration**: Adjust database connection settings in `server-side/config.php`.

---

Thank you for using Route Rover! We hope it helps you manage your fleet effectively.
