let email = document.getElementById("email");
let message = document.getElementById("message")

function sendEmail() {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "domi@mokosh.dev",
	Password : "M0k0shd0td3v",
	To : 'groaning.witch@gmail.com',
	From : "email",
	Subject : "form submission",
	Body : "message",
	}).then(
		message => alert("mail sent successfully")
	);
}