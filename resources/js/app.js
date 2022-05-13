require('./bootstrap');
import 'bootstrap';

window.confirmDelete = function confirmDelete() {
    console.log('ciao')
    let button = confirm("Are you sure you want to delete?");
    if (button) {
        return true;
    }else {
        return false;
    }
}
