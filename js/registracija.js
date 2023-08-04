
function ValidatePass()
{
    const pass1=document.getElementById("password1").innerText;
    const pass2=document.getElementById("password2").innerText;
    if(pass1==pass2)
        return true;
    return false;

}

function Registracija()
{
    const klik=document.getElementById("formaSignUp");
    klik.style.display="block";
    // document.getElementById("overlay").style.display="block";
}

function SignUp()
{
    const user = document.querySelector("#username1");
    const pass = document.querySelector("#password1");
    if(ValidatePass()==true&&user!=null&&pass!=null)
    {
        alert("Prijavljen");
        location.reload();
    }
    else
    {
        alert("Password do not match");
        location.reload();
    }
}
