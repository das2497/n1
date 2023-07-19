

function admin_Dashboard() {
    console.log('admin_Dashboard');
    document.getElementById('admin_Dashboard').style.display = 'block';
    document.getElementById('admin_Students').style.display = 'none';
    document.getElementById('admin_Teachers').style.display = 'none';
    document.getElementById('admin_Classes').style.display = 'none';
    document.getElementById('admin_Payments').style.display = 'none';
    document.getElementById('admin_Attendance').style.display = 'none';
    document.getElementById('admin_Complaints').style.display = 'none';
}
function admin_Students() {
    console.log('admin_Students');
    document.getElementById('admin_Dashboard').style.display = 'none';
    document.getElementById('admin_Students').style.display = 'block';
    document.getElementById('admin_Teachers').style.display = 'none';
    document.getElementById('admin_Classes').style.display = 'none';
    document.getElementById('admin_Payments').style.display = 'none';
    document.getElementById('admin_Attendance').style.display = 'none';
    document.getElementById('admin_Complaints').style.display = 'none';
}
function admin_Teachers() {
    console.log('admin_Teachers');
    document.getElementById('admin_Dashboard').style.display = 'none';
    document.getElementById('admin_Students').style.display = 'none';
    document.getElementById('admin_Teachers').style.display = 'block';
    document.getElementById('admin_Classes').style.display = 'none';
    document.getElementById('admin_Payments').style.display = 'none';
    document.getElementById('admin_Attendance').style.display = 'none';
    document.getElementById('admin_Complaints').style.display = 'none';
}
function admin_Classes() {
    console.log('admin_Classes');
    document.getElementById('admin_Dashboard').style.display = 'none';
    document.getElementById('admin_Students').style.display = 'none';
    document.getElementById('admin_Teachers').style.display = 'none';
    document.getElementById('admin_Classes').style.display = 'block';
    document.getElementById('admin_Payments').style.display = 'none';
    document.getElementById('admin_Attendance').style.display = 'none';
    document.getElementById('admin_Complaints').style.display = 'none';
}
function admin_Payments() {
    console.log('admin_Payments');
    document.getElementById('admin_Dashboard').style.display = 'none';
    document.getElementById('admin_Students').style.display = 'none';
    document.getElementById('admin_Teachers').style.display = 'none';
    document.getElementById('admin_Classes').style.display = 'none';
    document.getElementById('admin_Payments').style.display = 'block';
    document.getElementById('admin_Attendance').style.display = 'none';
    document.getElementById('admin_Complaints').style.display = 'none';
}
function admin_Attendance() {
    console.log('admin_Attendance');
    document.getElementById('admin_Dashboard').style.display = 'none';
    document.getElementById('admin_Students').style.display = 'none';
    document.getElementById('admin_Teachers').style.display = 'none';
    document.getElementById('admin_Classes').style.display = 'none';
    document.getElementById('admin_Payments').style.display = 'none';
    document.getElementById('admin_Attendance').style.display = 'block';
    document.getElementById('admin_Complaints').style.display = 'none';
}
function admin_Complaints() {
    console.log('admin_Complaints');
    document.getElementById('admin_Dashboard').style.display = 'none';
    document.getElementById('admin_Students').style.display = 'none';
    document.getElementById('admin_Teachers').style.display = 'none';
    document.getElementById('admin_Classes').style.display = 'none';
    document.getElementById('admin_Payments').style.display = 'none';
    document.getElementById('admin_Attendance').style.display = 'none';
    document.getElementById('admin_Complaints').style.display = 'block';
}

//========================================================================================
//========================================================================================

function loginRegister() {
    let login = document.getElementById('login');
    let register = document.getElementById('register');

    if (login.style.display == 'block') {
        console.log('loginRegister');
        login.style.display = 'none';
        register.style.display = 'block';
    } else {
        login.style.display = 'block';
        register.style.display = 'none';
    }

}

//================================================================================================================================
//================================================================================================================================



function login() {

    var uname = document.getElementById("uname");
    var pass = document.getElementById("pass");

    var unameSM = document.getElementById("unameSM");
    var passSM = document.getElementById("passSM");

    var loginSM = document.getElementById("loginSM");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
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
                location.reload();
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

function logout() {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == 'success') {
                location.reload();
            }
        }
    }

    r.open("POST", "logoutProcess.php", true);
    r.send();
}

//////////////////////////////////////////////----///////////////////////////////////////////////////////////////////////

function admin_student_update(st_id) {
    console.log(st_id);
    var std_first_name = document.getElementById(st_id + 'std_first_name');
    var std_last_name = document.getElementById(st_id + 'std_last_name');
    var std_email = document.getElementById(st_id + 'std_email');
    var std_contact = document.getElementById(st_id + 'std_contact');
    var std_password = document.getElementById(st_id + 'std_password');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == 'success') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append('std_id',st_id);
    f.append('std_first_name', std_first_name.value);
    f.append('std_last_name', std_last_name.value);
    f.append('std_email', std_email.value);
    f.append('std_contact', std_contact.value);
    f.append('std_password', std_password.value);
    r.open("POST", "admin_student_update_process.php", true);
    r.send(f);
}

function admin_student_delete(st_id) {
    console.log(st_id);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == 'success') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append('std_id',st_id);
    r.open("POST", "admin_student_delete_process.php", true);
    r.send(f);
}