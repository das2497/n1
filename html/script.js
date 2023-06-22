

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

function t() {
    console.log('okkkkk');
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

    // alert(ins_id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
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
elements.forEach(function (element) {
    element.addEventListener('click', function () {
        // Change the background color of the clicked element
        this.style.backgroundColor = 'yellow';

        // Reset the background color of the other elements
        elements.forEach(function (otherElement) {
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
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

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
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

            document.getElementById("tb").innerHTML = t;

        }
    }


    r.open("GET", "monitoringInspectorProcess.php?sb=" + sb + "&sc=" + sc + "&insid=" + insid, true);
    r.send();

}


function superApproveMonitoring(insid) {
    var mtype = document.getElementById("sampr").value;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            document.getElementById("imtbappr").innerHTML = text;

        }
    }

    var f = new FormData();
    f.append("mtype", mtype);
    f.append("insid", insid);

    r.open("GET", "superCheckedMonitored.php?mtype=" + mtype + "&insid=" + insid, true);
    r.send();
}

//////////////////////////////////////////////////////////////////////////////////////////////////////

function AdeselctST(ins_id, date) {
    var table = document.getElementById("selctdstdntssupr");
    var rows = table.getElementsByTagName("tr");

    console.log(rows.length);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            console.log(text);

        }
    }

    var f = new FormData();
    f.append("st_count", rows.length);
    f.append("ins_id", ins_id);
    f.append("date", date);

    // Loop through each row in the table
    for (var i = 1; i < rows.length; i++) {
        var checkbox = rows[i].getElementsByTagName("input")[0];

        // console.log(checkbox);

        // Check if the checkbox is checked or not
        if (checkbox.checked) {
            var nt_id = rows[i].getElementsByTagName("td")[2];

            // console.log(nt_id.innerHTML);

            f.append("nt_id" + i, nt_id.innerHTML);

        }

    }

    r.open("POST", "inspectorSelectedToMonitoringprocess.php", true);
    r.send(f);
}

function AdeselctSTchck() {

    // Get a reference to the "Select All" checkbox
    var selectAllCheckbox = document.getElementById("mainCheckbox1");

    // Add a click event listener to the "Select All" checkbox
    //  selectAllCheckbox.addEventListener("click", function () {
    console.log("clicked");
    // Get a reference to all the checkboxes in the table
    var checkboxes = document.querySelectorAll("table tbody input[type='checkbox']");

    // console.log(checkboxes);
    // Loop through each checkbox
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = selectAllCheckbox.checked;
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

function InsselctSTtomonit(st_id, row, ins_id, monit_stat) {
    var mtd = document.getElementById("monitoring_date");
    document.getElementById("row" + row).style.backgroundColor = "#ff8c5f67";

    mtd.classList = '';
    mtd.classList.add('form-control');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            console.log(t);
            if (t == "Please select monitoring date") {
                alert("Please select monitoring date");
                mtd.classList = '';
                mtd.classList.add('form-control');
                mtd.classList.add('rotate-border');
                mtd.addEventListener('click', function () {
                    mtd.classList = '';
                    mtd.classList.add('form-control');
                })
            } else {
                mtd.classList = '';
                mtd.classList.add('form-control');
            }

            searchmonitorInspect();

        }
    }

    var f = new FormData();
    f.append("st_id", st_id);
    f.append("mtd", mtd.value);
    f.append("ins_id", ins_id);
    f.append("monit_stat", monit_stat);

    r.open("POST", "InsselctSTtomonit.php", true);
    r.send(f);
}

//----------------------------------------------------------------------------------------------------------------------------

function monitoredByInspector(nt_id) {

    var chk;

    const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="Present_"]');
    checkboxes.forEach(function (checkbox) {
        // Access and manipulate each "Present" checkbox
        // console.log(checkbox.checked);
        chk = checkbox.checked;
    });

    // console.log(chk);

    var r = new XMLHttpRequest();
    //  console.log(r.readyState);
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            console.log(r.responseText);

            // location.reload();
        }
    }

    var f = new FormData();
    f.append("nt_id", nt_id);
    f.append("checkbox", chk);
    r.open('POST', 'monitoringProcess.php', true);
    r.send(f);

}


function approveMonitoredStudents(ins_id) {
    var mp = document.getElementById('sampr');
    console.log(mp.value + " " + ins_id);
    var r = new XMLHttpRequest();
    //  console.log(r.readyState);
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            console.log(r.responseText);
            if (r.responseText == "Please Select Monitoring Phase") {
                alert("Please Select Monitoring Phase");
            }
            // location.reload();
        }
    }

    var f = new FormData();
    f.append("ins_id", ins_id);
    f.append("monit_phase", mp.value);
    r.open('POST', 'checkedMonitoredStudens.php', true);
    r.send(f);
}











