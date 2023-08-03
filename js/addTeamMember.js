function ResetValues(titleInput, subTitleInput, fileInput,textInput,hyperlinkInput,textInput, imagePreview){
    fileInput.value="";
    subTitleInput.value="";
    textInput.value="";
    hyperlinkInput.value="";
    textInput.value="";
    imagePreview.style.display='none';
    imagePreview.style.backgroundImage = "";
}


function Prijava(){
    const klik=document.getElementById("formaSignIn");
    klik.style.display="block";
    document.getElementById("overlay").style.display="block";
}

function Zatvori(){
    const klik=document.getElementById("formaSignIn");
    klik.style.display="none";
    document.getElementById("overlay").style.display="none";
}

function OpenModal(){
    document.getElementById("forma").style.display="block";
    document.getElementById("overlay").style.display="block";
}

function CloseModal(){
    document.getElementById("forma").style.display="none";
    document.getElementById("overlay").style.display="none";
}

function ImageUploadValidation(){
    const imageUpload = document.getElementById("image-upload").value;
    if(!imageUpload){
        alert("You must upload an image");
        return false;
    }
    else {
        const fileExtension = imageUpload.split(".").pop();
        if (fileExtension !== "jpg" && fileExtension !== "png" ) {
          alert("You can only upload JPG or PNG images.");
          return false;
        }
      }
      return true;
}

function TextInputValidation(){
    const name = document.getElementById("firstName").value;
    const surname = document.getElementById("lastName").value;
    const title = document.getElementById("title").value;
    const mail = document.getElementById("email").value;
    const linkedInLink = document.getElementById("hyperlink-input").value;
    const quote = document.getElementById("quote").value;
    
    if(name.length > 25 || containsNumber(name)){
        alert("Name must be valid, maximum of 25 characters, only letters.");
        return false;
    }
    if(surname.length > 30 || containsNumber(surname)){
        alert("Surname must be valid, maximum of 30 characters, only letters.");
        return false;
    }
    if(title.length > 50 || containsNumber(title)){
        alert("Title must be valid, maximum of 50 characters.");
        return false;
    }

    if(!isValidEmail(mail)){
        alert("Email must be valid - for example name.surname@mailprovider.com.");
        return false;
    }

    if(quote.length > 50 ){
        alert("Quote must be valid, maximum of 50 characters.");
        return false;
    }
    return true;
}

function Validation(){

}
function isValidEmail(email){
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
function containsNumber(tekst){
    const regex = /\d/;
    return regex.test(tekst);
}
function isValidHyperlink(url) {
        // Regular expression to validate a hyperlink format
        const urlRegex = /^(http|https):\/\/[^ "]+$/;
        return urlRegex.test(url);
}

