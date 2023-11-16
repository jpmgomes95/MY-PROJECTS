const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    form.addEventListener('forme', (event) => {
        event.preventDefault();
        nameValidate();
        emailValidate();
        mainPasswordValidate();
        comparePassword();
    });

function setError(index) {
    spans[index].style.display = 'block';
}

function removeError(index) {
    spans[index].style.display = 'none';
}

function nameValidate() {
    if (campos[0].value.length > 15) {
        setError(0);
    }
    else {
        removeError(0);
    }
    if (campos[0].value.length < 60) {
        setError(0);
    }
    else {
        removeError(0)
    }
}

function emailValidate() {
    if (!emailRegex.test(campos[1].value)) {
        setError(1);
    }
    else {
        removeError(1);
    }
}

function mainPasswordValidate() {
    if (campos[2].value.length < 8) {
        setError(2);
    }
    else {
        removeError(2);
        comparePassword();
    }
}

function comparePassword() {
    if (campos[2].value == campos[3].value && campos[3].value.length >= 8) {
        removeError(3);
    }
    else {
        setError(3);
    }
}

function ajustaCpf(v) {
    v.value = v.value.replace(/\D/g, "");
    v.value = v.value.replace(/^(\d{3})(\d)/, "$1.$2");
    v.value = v.value.replace(/(\d{3})(\d)/, "$1.$2");
    v.value = v.value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
}

function ajustaNumeros(v) {
    v.value = v.value.replace(/\D/g, "");
}

function ajustaTelefone(v) {
    v.value = v.value.replace(/\D/g, "");
    v.value = v.value.replace(/^(\d\d)(\d)/g, "($1) $2");
    v.value = v.value.replace(/(\d{4})(\d)/, "$1-$2");
}
function toLimit(string = "") {
    string.value = string.value.substring(0, 6);

}
