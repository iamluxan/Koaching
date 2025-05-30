import {module} from "modujs";
import {$html,$header} from "../utils/dom.js";

export default class extends module {
	constructor(m) {
		super(m);
	}

	 init() {

		let $contactButtons = document.querySelectorAll('[data-button="contact"]');
		let $contactDoor = document.getElementById('contact-door');

		let lock = false;


		if ($contactButtons) {
			$contactButtons.forEach(function ($btn) {
				$btn.addEventListener('click', function(e) {
					e.preventDefault();

					if (lock) {
						return;
					} else {
						$html.classList.add('has-contact-door');
					}
				});
			});

			let $closeContactDoor = document.getElementById('close-contact-door')
			$closeContactDoor.addEventListener('click', function(e) {
				e.preventDefault();
				$html.classList.remove ('has-contact-door');
			})
		}

		this.form();
	 }

	 form() {
		 const form = document.querySelector("form[name='contact']") // Get the form

		 if (form) {
			 form.addEventListener("submit", function (event) {

				 event.preventDefault() // Prevent the default action of the form
				 let fields = document.querySelectorAll("form[name='contact'] .form-control") // Get all the fields
				 let valid = true
				 for (var i = 0; i < fields.length; i++) {
					 fields[i].classList.remove("no-error") // Remove the no-error class from all fields
					 if (fields[i].value === "") { // If the field is empty
						 fields[i].classList.add("has-error")
						 fields[i].nextElementSibling.style.display = "block"
						 valid = false
					 } else { // If the field is not empty
						 fields[i].classList.remove("has-error")
						 fields[i].classList.add("no-error")
						 fields[i].nextElementSibling.style.display = "none"
					 }
				 }
				 if (valid) {
					 form.querySelector('.c-button').disabled = true;
					 grecaptcha.ready(function () { // Wait for the recaptcha to be ready
						 grecaptcha
							 .execute("6LcaHIAqAAAAAF2qMdAAljkxHtvqdW9wwZJyUGaW", {
								 action: "contact"
							 }) // Execute the recaptcha
							 .then(function (token) {

								 let recaptchaResponse = document.getElementById("recaptchaResponse")
								 recaptchaResponse.value = token // Set the recaptcha response

								 fetch("/send", {
									 method: "POST",
									 body: new FormData(form), // Send the form data
								 })
									 .then((response) => response.text())
									 .then((response) => {
										 const responseText = JSON.parse(response) // Get the response
										 if (responseText.error !== "") { // If there is an error
											 document.querySelector("#alert").innerHTML = '<div class="c-alert || u-margin-bottom-sm">' + responseText.error + '</div>';
											 document.querySelector("#alert").classList.add("error")
											 document.querySelector(".c-form_fields").style.display = "block"
											 return
										 }
										 document.querySelector(".c-form_fields").style.display = "none"
										 document.querySelector("#alert").innerHTML = '<div class="c-alert || u-margin-bottom-sm">' + responseText.success + '</div>';
										 document.querySelector("#alert").classList.add("success")
										 // window.location.replace("/thanks") // Redirect to the thanks page
									 })
							 })
					 })
				 }
			 })
		 }
	 }
}