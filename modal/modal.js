/**
 * Created by griffon on 22.12.2016.
 */
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("reg");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on the button, open the modal
btn.onclick = function() {
    var login = document.getElementById("login").value;
    var pass = document.getElementById("pass").value;
    var mail = document.getElementById("mail").value;

        $.ajax({

            type: "POST",
            url: "regHelper.php",
            data: { login: login,
                pass: pass, mail: mail},
            success: function(html){
                console.log(html);
                if(html=='notexist')    {
                    modal.style.display = "block";
                }
                else{
                    $("#err").html("Username is already exist");
                }
            }

        });

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}