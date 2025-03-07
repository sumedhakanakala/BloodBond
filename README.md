
# Blood-Bond
Blood Bond is a web-based platform designed to efficiently connect blood donors with patients in need. This system prioritizes simplicity, security, and accessibility, allowing patients to easily find compatible blood donors based on blood type and location while ensuring donor privacy and eligibility verification.

## Features 
User-Friendly Interface: Simple registration and search functionalities for both donors and patients.

Secure Donor Privacy: Donor contact information is protected, and only shared with verified matches.

Automated Matching System: Patients can find compatible donors based on blood type and location.

Admin Verification: Admins approve donor profiles to ensure medical eligibility and trustworthiness.

Donor Availability Status: Donors can update their availability, improving response time for patients.

## Project Structure
Frontend: HTML, CSS, and JavaScript provide a responsive and accessible UI.

Backend: PHP with MySQL handles data processing, user authentication, and database interactions.


Database: MySQL stores donor and patient data securely.

Environment: XAMPP is used to manage the local development server, database, and backend processing.


## Login Page

![Screenshot 2024-07-06 114344](https://github.com/user-attachments/assets/013938c2-e395-4c17-a6e0-2769d840c9ee)

This login form is designed to be user-friendly, with clear labels and navigation options, making it easy for users to either log in or recover their accounts.

## Registration Page

![Screenshot 2024-07-06 114243](https://github.com/user-attachments/assets/f4ada254-0c3a-4cb0-bd6f-033f4589b25b)

The Registration form is organized in a straightforward manner, with clear labels and a user-friendlyinterface, suitable for collecting information for a blood donation or healthcare-related platform.

## Home Page

![Screenshot 2024-07-06 114624](https://github.com/user-attachments/assets/4af5ac45-539c-4988-bd47-8344de1dc434)


## Donor Page

![Screenshot 2024-07-06 115129](https://github.com/user-attachments/assets/778bac6a-7aae-4f94-a684-e10ca5e2e15e)

At the bottom of the form, there's quite a large blue button with a label "DONATEBLOOD." Presumably, this would submit the form. All in all, the clean design makes it simpleand focuses on the user-friendly input fields in order to facilitate easy and quick registration.

## Patient Page

![Screenshot 2024-07-06 115951](https://github.com/user-attachments/assets/bf3b5a70-41de-4445-8caa-878677646664)

![Screenshot 2024-07-06 120326](https://github.com/user-attachments/assets/60b076e1-09ac-4e9c-8499-25c12acdb31f)

In this system, upon filling in his details in the "Request Blood" form, the web applicationwill filter the list of available donors concerning a patient's needs, such as matching blood groupand location. Immediately after the form has been submitted, a table showing the details of all matching donors is to be displayed to the patient. This table includes the essential details:username, name, age, email, phone number, blood group, location, and gender of the donor.

For example, if a patient with the O+ blood group from Hyderabad makes a request, thesystem will filter and display donors who have the same blood group and location similar to thedonor details table shown in the second image. This enables the patient to contact the donordirectly and arrange for the blood donation.
This approach quickens the process of finding a donor who meets a patient's specifications,hence very effective and efficient for blood donation.

## Admin Page

![Screenshot 2024-07-06 114854](https://github.com/user-attachments/assets/c362c1c4-3bd7-4bbc-a1ac-29f1728b7504)



![Screenshot 2024-07-06 115658](https://github.com/user-attachments/assets/a7f03041-50e4-4f15-a9fe-17d39f317d52)



![Screenshot 2024-07-06 120157](https://github.com/user-attachments/assets/8c9ab189-b19e-450a-b0b8-e0bb0ad72fda)

The first image depicts the "Admin Login" page, where the administrator can log in to thesystem with his username and password. The interface is quite simple and includes only twoinput fields for credentials, accompanied by a blue-colored "Login" button that sends theinformation when clicked.

The second picture describes the interface of the admin after logging in. The admin will seea table on this page, listing details of the donors. Columns would include Username, Name, Age,Email, Phone Number, Blood Group, Location, Gender, and an "Action" column with buttonsmarked "APPROVE" and "REJECT" beside the details of each donor.

The admin, when clicking the "APPROVE" button for the donor approval, receives aresponse message pop-up which shows that the "Donor approved and transferred successfully."This shows that the details of the donor have been successfully received and saved in the system.These approved donors have to be visible for patients while they are in search for a matchingblood donor so that the patients see the verified and authorized donors available to them forcontacting.

One of the important roles an administrator can uphold is the donative approval, ensuringthe database accuracy and reliability in placing donors' information to the patients.

## Logout Page

![Screenshot 2024-07-06 120411](https://github.com/user-attachments/assets/a6e04fa1-45c2-4793-990c-1ca87c80c25b)





