import { module } from 'modujs';
import {$html,$header} from "../utils/dom.js";
import { CSS_CLASS } from '../config'


export default class extends module {
	constructor(m) {
		super(m);
		this.menuToggler = document.querySelector('[data-menu-toggler]');
		this.canOpen = 1;
		// this.theme = document.getElementById('header-coaching').getAttribute('data-header-theme');
	}

	init() {

		if (this.menuToggler) {
			this.menuToggler.addEventListener('click', () => {
				this.toggleMenu();
			})
		}

		// this.menuCloseBtn.addEventListener('click', () => {
		// 	this.toggleMenu();
		// })

	}

	toggleMenu() {
		$html.classList.contains(CSS_CLASS.MENU_OPENED) ? this.closeMenu() : this.openMenu();
	}

	openMenu() {
		this.canOpen;
		$html.classList.add(CSS_CLASS.MENU_OPENED);

		// document.getElementById('header-coaching').setAttribute("data-header-theme", "primary");
	}

	closeMenu() {
			var t;
			this.canOpen = !1, setTimeout(() => {
				this.canOpen = !0;
				// document.getElementById('header-coaching').setAttribute("data-header-theme", this.theme);
			}, 100);
			$html.classList.remove(CSS_CLASS.MENU_OPENED);
	}
}