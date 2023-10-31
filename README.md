# Sample_Registration_With_PHP
Following project is the written sample for the PHP project for Registration. The candidate registered with only be able to view the video for 7 days from the registration date.
# Enrollment and Video Access Control System

This is a simple PHP-based web application that allows users to enroll in a training program and access a specific video for a limited time (7 days). The system is designed to restrict video access while still allowing users to access the rest of the website.

## Prerequisites

Before you can use this code, you should have the following set up:

1. A web server with PHP support.
2. A MySQL database for storing user information and access codes.
3. Integration with a payment gateway (e.g., Stripe) to handle payments.

## Setup

1. **Create a MySQL database**: Set up a table to store user information, access codes, and video access. Here's the SQL schema:

   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(50) NOT NULL,
       email VARCHAR(100) NOT NULL,
       access_code VARCHAR(100) NOT NULL,
       expiration_date DATETIME NOT NULL,
       video_access TINYINT(1) DEFAULT 0
   );

## Update the PHP code:

1. **Update the database connection details** in `process_enrollment.php` and video.php.
Replace "video.mp4" in `video.php` with the actual path to your video file.
Integrate a payment gateway:

2. **Integrate a payment gateway** (e.g., Stripe) to handle payments in `process_enrollment.php`.
## Usage
### Enrollment:
Users visit the enrollment page (enrollment.php) and provide their username, email, and credit card information.

3. **Enrollment Processing:**
Upon successful payment processing and enrollment, a random access code is generated, and the user's information is stored in the database.

4. **Video Access:**
Users can then visit the video page (video.php) using an access code provided in the enrollment process.

5. **Video Access Control:**
The system checks if the access code is valid and if the user's access is not expired. If conditions are met, the video is displayed.

6. **Access Record Update:**
After the user accesses the video, their record in the database is updated to mark video access, preventing them from accessing it again.

7. **Website Access:**
The rest of the website can be accessed without any restrictions.

8. **Security Considerations:**
Ensure the security of user data and payment information when integrating a payment gateway.
Use SSL to secure the communication between the user's browser and the web server.
Sanitize user input to prevent SQL injection and other security vulnerabilities.


**Author**<br>
*Keerthana Nakka*