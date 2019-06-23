var ShowStudent;
var ShowProfessor;
var i = 0;
function hideProfessor(id) {
    if (document.getElementById) {
        obj = document.getElementById(id);
        if (obj.style.display == "block") {
            obj.style.display = "none";
        } else {
            obj.style.display = "none";
        }
    }
}

function showProfessor(id) {
    if (document.getElementById) {
        ShowProfessor = document.getElementById(id);
        if (ShowProfessor.style.display == "none") {
            ShowProfessor.style.display = "block";
        } else {
            ShowProfessor.style.display = "block";
        }
    }
}

function hidestudent(id) {
    if (document.getElementById) {
        obj = document.getElementById(id);
        if (obj.style.display == "block") {
            obj.style.display = "none";
        } else {
            obj.style.display = "none";
        }
    }
}


function showstudent(id) {
    if (document.getElementById) {
        ShowStudent = document.getElementById(id);
        if (ShowStudent.style.display == "none") {
            ShowStudent.style.display = "block";
        } else {
            ShowStudent.style.display = "block";
        }
    }
}
//
// function Click(id) {
//     if (document.getElementById) {
//         obj = document.getElementById(id);
//         obj.onclick(obj.style.boxShadow = "inset 5px 5px 8px #2a62bc");
//         obj.onclick(valueOf('سلام'));
//
//     }
// }
//
// function not_Click(id) {
//     if (document.getElementById) {
//         obj = document.getElementById(id);
//         obj.style.boxShadow = "";
//     }
// }
//
function Content(id) {
    obj = document.getElementById(id);
    if (i == 0) {


        if (obj.style.display == "none") {
            i = 1;
            obj.style.display = "block";
        } else {
            i = 1;
            obj.style.display = "block";
        }
    }
    else {

        if (obj.style.display == "block") {
            i = 0;
            obj.style.display = "none";
        } else {
            i = 0;
            obj.style.display = "none";
        }

    }

}