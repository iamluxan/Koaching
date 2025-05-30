import { module } from 'modujs'
import { lazyLoadImage } from '../utils/image'
import LocomotiveScroll from 'locomotive-scroll'
import {$html} from "../utils/dom.js";
export default class extends module {
    constructor(m) {
        super(m);

    }

    init() {
        this.scroll = new LocomotiveScroll({
            modularInstance: this,
            scrollCallback(scrollValues) {
                if (scrollValues.direction == 1) {
                    $html.classList.remove("scrolling-up")
                    $html.classList.add("scrolling-down")
                } else {
                    $html.classList.remove("scrolling-down")
                    $html.classList.add("scrolling-up")
                }

                if ((scrollValues.scroll > scrollValues.progress) && (scrollValues.scroll > 50)) {
                    $html.classList.add("has-scrolled")
                } else {
                    $html.classList.remove("has-scrolled");
                }
            },
        });


        // Force scroll to top
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual'
            window.scrollTo(0, 0)
        }
    }

    /**
     * Lazy load the related image.
     *
     * @see ../utils/image.js
     *
     * It is recommended to wrap your `<img>` into an element with the
     * CSS class name `.c-lazy`. The CSS class name modifier `.-lazy-loaded`
     * will be applied on both the image and the parent wrapper.
     *
     * ```html
     * <div class="c-lazy o-ratio u-4:3">
     *     <img data-scroll data-scroll-call="lazyLoad, Scroll, main" data-src="http://picsum.photos/640/480?v=1" alt="" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
     * </div>
     * ```
     *
     * @param {LocomotiveScroll} args - The Locomotive Scroll instance.
     */
    lazyLoad(args) {
        lazyLoadImage(args.target, null, () => {
            //callback
        })
    }

    scrollTo(params) {
        let { target, ...options } = params

        options = Object.assign({
            // Defaults
            duration: 1,
        }, options)

        this.scroll?.scrollTo(target, options)
    }

    destroy() {
        this.scroll.destroy();
    }
}
