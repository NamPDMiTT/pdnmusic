function checkAll() {
    let checkboxs = document.getElementsByTagName("input");
    for (let i = 0; i < checkboxs.length; i++) {
        checkboxs[i].checked = true;
    }
}

function uncheckAll() {
    let checkboxs = document.getElementsByTagName("input");
    for (let i = 0; i < checkboxs.length; i++) {
        checkboxs[i].checked = false;
    }
}

function deleteChecked() {
    var flag = true;
    let checkboxs = document.getElementsByTagName("input");
    let count = 0;
    for (let i = 0; i < checkboxs.length; i++) {
        if (checkboxs[i].checked) {
            count++;
        }
    }
    if (count === 0) {
        alert("Vui lòng chọn ít nhất một bản ghi!");
        flag = false;
    }
    return flag;
}