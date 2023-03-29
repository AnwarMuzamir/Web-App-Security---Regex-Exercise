# Web-App-Security---Regex-Exercise
Exercise on regex on client and server side.

Firstly, I designed the database for this exercise usin XAMPP (phpMyAdmin) by creating a table called StudentDetails consist of 7 columns.

Then, I designed a HTML5 form which consist of the required input fields that I needed for the database. After that, I included a client side validation attributes called pattern inside the input fields.

# Name - validation consists of 1 uppercase and 1 lowercase and no integers

# Matric Number - validation consists of 7 digits allowed in the field.

# Email - validation consist of a pattern to check for a valid email.

# Phone Numbers - validation consist of a pattern that checks only Malaysian format phone number.

I also created server side connection using mySQLi to connect the database.

Before the data is inserted to the database, server side validation is checked once more before allowing it to be inserted.