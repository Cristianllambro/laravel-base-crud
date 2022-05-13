require('./bootstrap');
import 'bootstrap';


//non funziona
function confirmDelete(){
  let button = confirm("Are you sure you want to delete?");
    if (button) {
        return true;
    }else {
        return false;
    }
}
