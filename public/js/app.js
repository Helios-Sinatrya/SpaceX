document.getElementById("login");

function loginFunction(){
    var elementRegister =  document.getElementById('register');
    var elementLogin =  document.getElementById('login');
   elementRegister.classList.add('hidden');
   elementLogin.classList.remove('hidden');
};

function registerFunction(){
    var elementRegister =  document.getElementById('register');
    var elementLogin =  document.getElementById('login');
    elementLogin.classList.add('hidden');
    elementRegister.classList.remove('hidden');
};