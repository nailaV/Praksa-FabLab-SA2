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




function Prijava() {
    const klik = document.getElementById("formaSignIn");
    klik.style.display = "block";
    document.getElementById("overlay").style.display = "block";
}


function SignInn() {
    const user = document.querySelector("#username1");
    const pass = document.querySelector("#password1");
    firebase.auth().signInWithEmailAndPassword(user.value, pass.value)
        .then((userCredential) => {
            userLoggedIn=true;
            Zatvori();
        })
        .catch((error) => {
            alert(error.message);
        });
}




function Zatvori() {
    const klik = document.getElementById("formaSignIn");
    klik.style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

function Odjava() {
    firebase.auth().signOut().then(() => {
        userLoggedIn=false;

    }).catch((error) => {
        alert(error.message);
    });
}


function OpenModal() {
    document.getElementById("forma").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function CloseModal() {
    document.getElementById("forma").style.display = "none";
    document.getElementById("overlay").style.display = "none";
    window.location.reload();
}

function ImageUploadValidation() {
    const imageUpload = document.getElementById("fileUpload").value;
    if (!imageUpload) {
        alert("You must upload an image");
        return false;
    }
    else {
        const fileExtension = imageUpload.split(".").pop();
        if (fileExtension !== "jpg" ) {
            alert("You can only upload JPG images.");
            return false;
        }
    }
    return true;
}

function TextInputValidation() {
    const name = document.getElementById("firstName").value;
    const surname = document.getElementById("lastName").value;
    const title = document.getElementById("title").value;
    const mail = document.getElementById("email").value;
    const linkedInLink = document.getElementById("hyperlink-input").value;
    const quote = document.getElementById("qoute").value;
    const imageUpload = document.getElementById("image").value;



    if (isNullOrEmpty(name) || isNullOrEmpty(surname) || isNullOrEmpty(title)  || imageUpload == undefined || isNullOrEmpty(mail) || isNullOrEmpty(linkedInLink) || isNullOrEmpty(quote)) {
        alert("All fields are required.");
        return false;
    }

    if (name.length > 25 || containsNumber(name)) {
        alert("Name must be valid, maximum of 25 characters, only letters.");
        return false;
    }
    if (surname.length > 30 || containsNumber(surname)) {
        alert("Surname must be valid, maximum of 30 characters, only letters.");
        return false;
    }

    if (!isValidEmail(mail)) {
        alert("Email must be valid - for example name.surname@mailprovider.com.");
        return false;
    }

    if (quote.length > 200) {
        alert("Quote must be valid, maximum of 200 characters.");
        return false;
    }

    if (!isValidHyperlink(linkedInLink)) {
        alert("You must enter valid hyperlink - for example https://www.linkedin.com/in/your-profile-credentials");
        return false;
    }

    if (!ImageUploadValidation()) {
        return false;
    }
    window.location.reload();
    return true;
}
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
function containsNumber(tekst) {
    const regex = /\d/;
    return regex.test(tekst);
}
function isValidHyperlink(url) {
    const linkedinRegex = /^(www\.)?linkedin\.com\/in\/[a-zA-Z0-9_\-šćčžđ]+\/?$/;
    return linkedinRegex.test(url);
}



//hide i show dugmica i drugih html elemenata
firebase.auth().onAuthStateChanged((user) => {
    const dugmeBrisanje = document.querySelectorAll('.delete-button');
    const dugmeEditovanje = document.querySelectorAll('.uredi');
    if (user) {
        document.getElementById("UserInfo").style.display = "block";
        document.getElementById("prijavaDugme").style.display = "none";
        document.getElementById("odjavaDugme").style.display = "block";
        document.getElementById("UserInfoOdjava").style.display = "none";
        document.getElementById("dugmic").style.display = "block";
        dugmeBrisanje.forEach(dugmicB=>dugmicB.style.display="block");
        dugmeEditovanje.forEach(dugmicE=>dugmicE.style.display="block");
    }
    else {
        document.getElementById("UserInfo").style.display = "none";
        document.getElementById("odjavaDugme").style.display = "none";
        document.getElementById("prijavaDugme").style.display = "block";
        document.getElementById("UserInfoOdjava").style.display = "block";
        document.getElementById("dugmic").style.display = "none";
        dugmeBrisanje.forEach(dugmicB=>dugmicB.style.display="none");
        dugmeEditovanje.forEach(dugmicE=>dugmicE.style.display="none");
    }
});


//funkcija koja provjerava da li je string prazan
function isNullOrEmpty(inputText) {
    return inputText === null || inputText === undefined || inputText.trim().length === 0;
}



//imagePreview
const slika = document.querySelector('#image');
const divSlike = document.querySelector('.image');

slika.addEventListener('change', (event) => {
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function () {
            const imagePreview = document.querySelector('.image');
            imagePreview.style.display = 'block';
            imagePreview.style.backgroundImage = `url(${reader.result})`;
        }

        reader.readAsDataURL(file);
    } else {
        const imagePreview = document.querySelector('.image');
        imagePreview.style.display = 'none';
        imagePreview.style.backgroundImage = '';
    }
});





function openEditForm(memberId) {

      document.getElementById("formForEditing").style.display = "block";
    document.getElementById("overlay").style.display = "block";
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const memberData = JSON.parse(xhr.responseText);
      console.log(memberData.imagePath);
      console.log(memberData.ID);
      document.getElementById('first').value = memberData.firstName;
      document.getElementById('last').value = memberData.lastName;
      document.getElementById('titleE').value = memberData.title;
      document.getElementById('qouteE').value = memberData.quote;
      document.getElementById('emailE').value = memberData.email;
      document.getElementById('hyperlink-inputE').value = memberData.linkedin;
      document.getElementById('imageElement').src = memberData.imagePath;
      document.getElementById('idMembera').value=memberData.ID;
    }
  };
  
  xhr.open('GET', `getTeamMembera.php?id=${memberId}`, true);
  xhr.send();
}

function closeEditModal(){
    document.getElementById("formForEditing").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

function TextInputValidationEdit() {
    const name = document.getElementById("first").value;
    const surname = document.getElementById("last").value;
    const mail = document.getElementById("emailE").value;
    const linkedInLink = document.getElementById("hyperlink-inputE").value;
    const quote = document.getElementById("qouteE").value;


    if (isNullOrEmpty(name) || isNullOrEmpty(surname) || isNullOrEmpty(mail) || isNullOrEmpty(linkedInLink) || isNullOrEmpty(quote)) {
        alert("All fields are required.");
        return false;
    }

    if (name.length > 25 || containsNumber(name)) {
        alert("Name must be valid, maximum of 25 characters, only letters.");
        return false;
    }
    if (surname.length > 30 || containsNumber(surname)) {
        alert("Surname must be valid, maximum of 30 characters, only letters.");
        return false;
    }

    if (!isValidEmail(mail)) {
        alert("Email must be valid - for example name.surname@mailprovider.com.");
        return false;
    }

    if (quote.length > 200) {
        alert("Quote must be valid, maximum of 200 characters.");
        return false;
    }

    if (!isValidHyperlink(linkedInLink)) {
        alert("You must enter valid hyperlink - for example https://www.linkedin.com/in/your-profile-credentials");
        return false;
    }

    if (!ImageUploadValidation()) {
        return false;
    }
    window.location.reload();
    return true;
}









