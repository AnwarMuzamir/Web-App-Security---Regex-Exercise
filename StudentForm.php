<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Student Details</h1>
	<form method=post action= addStudentForm.php autocomplete=off>

		<label for="name">Name:</label>
		<input type="text" id="name" pattern="^(?=.*[a-z])(?=.*[A-Z]).{3,}" title="Please enter at least 3 characters. 1 uppercase and 1 lowercase." name="name" required>

		<label for="name">Matric Number:</label>
		<input type="text" id="matricNo" pattern="[0-9]{7}" title="Please enter 7 digits." name="matricNo" required>

		<label for="currAdd">Current Address:</label>
		<textarea cols="30" rows="5" id="currAdd" name="currAdd" required></textarea>

		<label for="homeAdd">Home Address:</label>
		<textarea cols="30" rows="5" id="homeAdd" name="homeAdd" required></textarea>

		<label for="email">Email:</label>
		<input type="email"  id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" required>

		<label for="mobilePhone">Mobile Phone:</label>
		<input type="tel" id="mobilePhone" name="mobilePhone" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" title="Please include hyphen(-) in between." required>

		<label for="homePhone">Home Phone:</label>
		<input type="tel" id="homePhone" name="homePhone" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" title="Please include hyphen(-) in between." required>

		<button type="submit">Submit</button>
	</form>

	<script src="script.js"></script>
</body>
</html>s