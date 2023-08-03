const firebaseConfig = {

    apiKey: "AIzaSyDRDkp2P-e3e5Nxa8FXxX7ASEBWrD4k2ck",

    authDomain: "fablab-38a7b.firebaseapp.com",

    projectId: "fablab-38a7b",

    storageBucket: "fablab-38a7b.appspot.com",

    messagingSenderId: "673394550913",

    appId: "1:673394550913:web:b90a10c251966271218580",

    measurementId: "G-3W5RX1XVYG"
};

firebase.initializeApp(firebaseConfig);


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


function SignInn(){
    const user = document.querySelector("#username1");
    const pass = document.querySelector("#password1");
    firebase.auth().signInWithEmailAndPassword(user.value, pass.value)
    .then((userCredential) => {
        // User signed in successfully
        console.log('prijavljen');
        //document.getElementById("UserInfo").style.display="block";
        Zatvori();
    })
    .catch((error) => {
        // Handle sign-in errors     
        alert(error.message);
    });
}


    

function Zatvori(){
    const klik=document.getElementById("formaSignIn");
    klik.style.display="none";
    document.getElementById("overlay").style.display="none";
}

function Odjava(){
    firebase.auth().signOut().then(() => {
        console.log('odjavljen');
        //document.getElementById("UserInfo").style.display="none";
        
    }).catch((error) => {
        // An error happened.
        alert(error.message);
    });
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

firebase.auth().onAuthStateChanged((user)=>{
    if(user){
        document.getElementById("UserInfo").style.display="block";
        document.getElementById("prijavaDugme").style.display="none";
        document.getElementById("odjavaDugme").style.display="block";
        document.getElementById("UserInfoOdjava").style.display="none";
    }
    else{
        document.getElementById("UserInfo").style.display="none";
        document.getElementById("odjavaDugme").style.display="none";
        document.getElementById("prijavaDugme").style.display="block";
        document.getElementById("UserInfoOdjava").style.display="block";
    }
});

