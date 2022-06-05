import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import Layout from "./Shared/Layout"; 



createInertiaApp({
    resolve: async name => {

        let page = (await import(`./Pages/${name}`)).default;
        // let page = require(`./Pages/${name}`).default;
        
        if(! page.layout){
            page.layout=Layout;

        }
        //17行等於上面12-15
        // page.layout ??= Layout;

    
        return page;
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // .component('Link',Link)
            // .component('Head',Head)
            .mount(el)
    },

    title:title=>"My Great :" + title
});

InertiaProgress.init({
    color: 'red',
    showSpinner: true,
}

);