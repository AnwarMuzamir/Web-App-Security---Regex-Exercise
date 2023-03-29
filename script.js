const form = document.getElementById('reservation-form');
form.addEventListener('submit', (event) => {
	event.preventDefault();
	const name = document.getElementById('name').value;
	const email = document.getElementById('email').value;
	const date = document.getElementById('date').value;
	const time = document.getElementById('time').value;
	const guests = document.getElementById('guests').value;
	console.log(`Name: ${name}, Email: ${email}, Date: ${date}, Time: ${time}, Guests: ${guests}`);
	
});