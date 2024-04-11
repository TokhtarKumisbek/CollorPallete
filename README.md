my email account: kumisbek_tokhtar@bk.ru


ColorsPallete - Color Palette Generator

It is a static web application designed for generating color palettes. It allows users to create custom color schemes, pick colors from images, and manage their favorite colors. The application offers a user-friendly interface with intuitive features for color selection and manipulation.
(I had some problems while uploading PHP files for database, therefore i hosted this file as a static web application. But you can see the database working after downloading XSAMPP. It has features as registration and authorization in terms of database(it is only what i thrived to do in these days)

Features:

  1. Color Picker
The Color Picker feature enables users to generate random color palettes with the click of a button.
Users can customize the color palette by selecting individual colors and adjusting their values.

  3. Image Picker
With the Image Picker functionality, users can upload images and extract colors from them.
The application identifies dominant colors in the uploaded images and presents them as part of the color palette.
  
  4. User Authentication
Coolors provides user authentication functionalities, allowing users to register and log in to their accounts securely.
Registered users can save their favorite color palettes, manage their profiles, and access additional features.
  
  5. Responsive Design
The application is built with a responsive design, ensuring optimal user experience across various devices and screen sizes.

Technologies Used:
  HTML5
  CSS3
  JavaScript
  PHP
  MySQL
  Pickr (Color Picker library)
  EyeDropper API (for color extraction from images)
  
Setup Instructions
  Clone the repository to your local machine.
  Set up a MySQL database and import the provided SQL schema to create the necessary tables.
  Configure the database connection settings in the PHP files (index1.php and EmailRegistration.php) to match your database credentials.
  Host the application on a web server with PHP support.
  Access the application through a web browser.
  
Usage
  Color Picker: Click the "Refresh Palette" button to generate a new random color palette. Customize the colors using the color picker.
  Image Picker: Upload an image using the "Open A Photo" button. The application will display the dominant colors extracted from the image.
  User Authentication: Register for an account using a valid email address and password. Log in to access additional features such as saving favorite color palettes.

Contributing
  Contributions to Coolors are welcome! If you have any suggestions, enhancements, or bug fixes, feel free to submit a pull request or open an issue.
