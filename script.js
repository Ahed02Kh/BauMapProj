//Validation for sign up
const form = document.getElementById('form');
const name = document.getElementById('name');
const password = document.getElementById('password');
const student_id = document.getElementById('student_id');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};


const validateInputs = () => {
    const nameValue = name.value.trim();
    const passwordValue = password.value.trim();
    const student_idValue = student_id.value.trim();

    if(nameValue === '') {
        setError(name, 'name is required');
    } else {
        setSuccess(name);
    }


    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 10 ) {
        setError(password, 'Password must be at least 10 character.')
    } else {
        setSuccess(password);
    }

    if(student_idValue === '') {
        setError(student_id, 'Please enter your student id');
    } else if (student_idValue.length <11) {
        setError(student_id, "student id doesn't correct");
    } else {
        setSuccess(student_id);
    }}
//Validation for sign up
const user=document.getElementById('user');
const pass=document.getElementById('pass');
const form1 = document.getElementById('form1');
const errorElement =document.getElementById('error');
form1.addEventListener('Sign In',(e) =>{
    let message=[]
    if(user.value === '' ||user.value == null ){
    message.push('Student-Id is required') 
    }

    if(pass.value.length>10 || pass.length<10 ){
    message.push('password must be 10 characters (Your National Number)') 
    }
    if(pass.value==='pass'){
        message.push('Password cannot be password')    
    }

    if(message.length>0){
    e.preventDefault()  
    errorElement.innerText=message.join(', ')
}
})