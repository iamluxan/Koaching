import {module} from "modujs";

export default class extends module {
	constructor(m) {
		super(m);

		this.resizeAnswers();

	}

	 init() {

		let accordion = document.querySelectorAll('.c-accordion_toggler');

		if (accordion) {
			accordion.forEach(function (el) {
				el.addEventListener('click', function (e) {

					accordion.forEach(function (activeAccordion) {
						activeAccordion.parentElement.classList.remove('is-open');
						activeAccordion.parentElement.querySelector('.c-accordion_item_content').style.height = "0";
					});

					el.parentElement.classList.add('is-open');

					let answer = el.parentElement.querySelector(".c-accordion_item_content");
					let answerwrapper = el.parentElement.querySelector('.c-accordion_item_content_inner');
					let answerHeight = answer.clientHeight;

					if (answerHeight) {
						el.parentElement.classList.remove('is-open');
						answer.style.height = "0";
					} else {
						answer.style.height = answerwrapper.clientHeight + "px";
					}
				});
			});
		}
	 }

	 resizeAnswers() {
		 let accordions = document.querySelectorAll('.c-accordion_item');

		 addEventListener("resize", (event) => {
			 if (accordions) {
				 accordions.forEach(function (accordion) {
					 if (accordion.classList.contains('is-open')) {
						 let answerHeight = accordion.querySelector('.c-accordion_item_content_inner').clientHeight;
						 let answerContainer = accordion.querySelector('.c-accordion_item_content');
						 answerContainer.style.height = answerHeight + "px";
					 }
				});
			 }
		 });
	 }

	resetAccordions(el) {
		// alert('ok');
		 // let allAccordions = el.closest('.c-accordion').querySelectorAll('.c-accordion_item');
		 //
		 // if (allAccordions) {
			//  allAccordions.forEach(function (el) {
			// 	 el.classList.remove('is-open');
			// 	 let answerwrapper = el.parentElement.querySelector('.c-accordion_item_content');
		 //
			// 	 if (answerwrapper.clientHeight) {
			// 		 answerwrapper.style.height = "0";
			// 	 }
			//  });
		 // }
	 }
}