/**
 * Created by Griffon on 18.11.2016.
 */
(function(){
    var spinner = document.getElementById("spinner"),i=null
    spinner.addEventListener('click', function(event){
        i = Array.prototype.indexOf.call(spinner.children, event.target);
        switch(i){
            case 1:
                spinner.insertBefore(spinner.lastElementChild, spinner.firstElementChild)
                break;
            case 3:
                spinner.appendChild(spinner.firstElementChild)
                break;
            default:
        }
        spinner.classList.toggle('operabug')
    }, false);
})()