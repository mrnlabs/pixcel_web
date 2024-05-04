import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css'
import '../css/vertical-responsive-menu.min.css'
//import bootsrap js
import 'bootstrap/dist/js/bootstrap.bundle.min';
// import '../css/app.css';
import '../css/responsive.css';
import '../css/style.css';
import '../css/vendor/fontawesome-free/css/all.min.css'
import '../custom_js/custom.js';
import '../custom_js/vertical-responsive-menu.min.js'
import $ from 'jquery';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use($)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
