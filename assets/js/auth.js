const $ = (elem) => document.querySelector(elem);
const $$ = (elem) => document.querySelectorAll(elem);

$('#form_login').addEventListener('submit', (e) => {
    const myForm = new octaValidate('form_login');
    if(myForm.validate()){
        e.currentTarget.submit();
    }else{
        e.preventDefault();
    }
})