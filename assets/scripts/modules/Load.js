import { module } from 'modujs';
import modularLoad from 'modularload';
import {$html} from "../utils/dom.js";
import { CSS_CLASS } from '../config'

export default class extends module {
    constructor(m) {
        super(m);
    }

    init() {
        const load = new modularLoad({
            enterDelay: 0,
            transitions: {
                customTransition: {}
            }
        });

        load.on('ready', (transition, newContainer) => {
            $html.classList.remove(CSS_CLASS.MENU_OPENED);
        });

        load.on('loaded', (transition, oldContainer, newContainer) => {
            this.call('destroy', oldContainer, 'app');
            this.call('update', newContainer, 'app');
        });
    }
}
