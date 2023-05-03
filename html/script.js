function login() {

    var uname = document.getElementById("uname");
    var pass = document.getElementById("pass");

    var unameSM = document.getElementById("unameSM");
    var passSM = document.getElementById("passSM");

    var loginSM = document.getElementById("loginSM");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Please enter Username") {
                unameSM.innerHTML = t;
                unameSM.style.display = "block";
                passSM.style.display = "none";
                loginSM.style.display = "none";
            } else if (t == "Please enter Password") {
                unameSM.style.display = "none";
                passSM.innerHTML = t;
                passSM.style.display = "block";
                loginSM.style.display = "none";
            } else if (t == "Success") {
                unameSM.style.display = "none";
                passSM.style.display = "none";
                loginSM.innerHTML = t;
                loginSM.style.display = "block";
                window.location = "admin.php";
            } else {
                unameSM.style.display = "none";
                passSM.style.display = "none";
                loginSM.innerHTML = t;
                loginSM.style.display = "block";
            }
        }
    }
    var f = new FormData();
    f.append("uname", uname.value);
    f.append("pass", pass.value);
    r.open("POST", "loginProcess.php", true);
    r.send(f);

}

//////////////////////////////////////////////----///////////////////////////////////////////////////////////////////////
function INSselctST(ins_id) {

    alert(ins_id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

            document.getElementById('insst').innerHTML = t;

        }
    }

    var f = new FormData();
    f.append("inid", ins_id);

    r.open("POST", "inspectorStudentsSuper.php", true);
    r.send(f);

}

var elements = document.querySelectorAll('.clickable');

// Add an event listener to each element
elements.forEach(function(element) {
    element.addEventListener('click', function() {
        // Change the background color of the clicked element
        this.style.backgroundColor = 'yellow';

        // Reset the background color of the other elements
        elements.forEach(function(otherElement) {
            if (otherElement !== element) {
                otherElement.style.backgroundColor = '';
            }
        });
    });
});

///////////////////////////////////////////////////////////----/////////////////////////////////////////

function logout() {

    // alert("ok");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (this.readyState == 4) {
            var t = r.responseText;

            alert(t);

            if (t == "success") {
                location.reload();
            }

        }
    }

    r.open("POST", "logoutProcess.php", true);
    r.send();

}


function searchmonitorInspect(insid) {

    // alert("ok");

    var sb = document.getElementById("sb").value;
    var sc = document.getElementById("sc").value;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

            document.getElementById("tb").innerHTML = t;

        }
    }


    r.open("GET", "monitoringInspectorProcess.php?sb=" + sb + "&sc=" + sc + "&insid=" + insid, true);
    r.send();

}