Vue.component('modal' , {
    template: "" +
    " <div class=\"modal is-active\">\n" +
    "            <div class=\"modal-background\"></div>\n" +
    "            <div class=\"modal-content\">\n" +
    "                <div class=\"box\">\n" +
    "                <slot></slot>\n" +
    "                </div>\n" +
    "            </div>\n" +
    "            <button class=\"modal-close is-large\" @click=\"$emit('close')\" aria-label=\"close\"></button>\n" +
    "        </div>"
});


new Vue({
    el: '#root',
    data: {
        showModal: false
    }
});

