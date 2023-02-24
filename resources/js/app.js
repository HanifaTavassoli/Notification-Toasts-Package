// require('./bootstrap');

// import Alpine from "alpinejs";

// window.Alpine=Alpine;

// Alpine.start();

import Alpine from "alpinejs"
import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'

Alpine.data('ToastComponent', ToastComponent)

window.Alpine = Alpine
Alpine.start()
