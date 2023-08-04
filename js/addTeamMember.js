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

function ResetValues(name, surname, mail, linkedInLink, quote, fileN, slicica) {
    name.value = "";
    surname.value = "";
    //title.value="";
    linkedInLink.value = "";
    mail.value = "";
    quote.value = "";
    fileN.value = "";
    slicica.style.display = "none";
}


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
            console.log('prijavljen');
            //document.getElementById("UserInfo").style.display="block";
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
        console.log('odjavljen');
        //document.getElementById("UserInfo").style.display="none";

    }).catch((error) => {
        alert(error.message);
    });
}


function OpenModal() {
    document.getElementById("forma").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function CloseModal() {
    const name = document.getElementById("firstName");
    const surname = document.getElementById("lastName");
    // const title = document.getElementById("title");
    const mail = document.getElementById("email");
    const linkedInLink = document.getElementById("hyperlink-input");
    const quote = document.getElementById("qoute");
    const fileN = document.getElementById("fileUpload");
    const slicica = document.querySelector(".image ");
    ResetValues(name, surname, mail, linkedInLink, quote, fileN, slicica);
    document.getElementById("forma").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

function ImageUploadValidation() {
    const imageUpload = document.getElementById("fileUpload").value;
    if (!imageUpload) {
        alert("You must upload an image");
        return false;
    }
    else {
        const fileExtension = imageUpload.split(".").pop();
        if (fileExtension !== "jpg" && fileExtension !== "png") {
            alert("You can only upload JPG or PNG images.");
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
    const imageUpload = document.getElementById("fileUpload").value;



    if (isNullOrEmpty(name) || isNullOrEmpty(surname) || isNullOrEmpty(title) || isNullOrEmpty(title) || imageUpload == undefined || isNullOrEmpty(mail) || isNullOrEmpty(linkedInLink) || isNullOrEmpty(quote)) {
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
    // if(title.length > 50 || containsNumber(title)){
    //     alert("Title must be valid, maximum of 50 characters, only letters.");
    //     return false;
    // }

    if (!isValidEmail(mail)) {
        alert("Email must be valid - for example name.surname@mailprovider.com.");
        return false;
    }

    if (quote.length > 50) {
        alert("Quote must be valid, maximum of 50 characters.");
        return false;
    }

    if (!isValidHyperlink(linkedInLink)) {
        alert("You must enter valid hyperlink - for example https://www.linkedin.com/in/your-profile-credentials");
        return false;
    }

    if (!ImageUploadValidation()) {
        return false;
    }
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
    const linkedinRegex = /^(https?:\/\/)?(www\.)?linkedin\.com\/in\/[a-zA-Z0-9_-]+\/?$/;
    return linkedinRegex.test(url);
}

firebase.auth().onAuthStateChanged((user) => {
    if (user) {
        document.getElementById("UserInfo").style.display = "block";
        document.getElementById("prijavaDugme").style.display = "none";
        document.getElementById("odjavaDugme").style.display = "block";
        document.getElementById("UserInfoOdjava").style.display = "none";
        document.getElementById("dugmic").style.display = "block";
    }
    else {
        document.getElementById("UserInfo").style.display = "none";
        document.getElementById("odjavaDugme").style.display = "none";
        document.getElementById("prijavaDugme").style.display = "block";
        document.getElementById("UserInfoOdjava").style.display = "block";
        document.getElementById("dugmic").style.display = "none";
    }
});

function isNullOrEmpty(inputText) {
    return inputText === null || inputText === undefined || inputText.trim().length === 0;
}



//imagePreview
const slika = document.querySelector('#fileUpload');
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

function AddTeamMember() {
    
    if (!TextInputValidation()) {
        console.log('nije uredu');
        return;
    }
    else {
        const nameInput = document.getElementById("firstName").value;
        const surnameInput = document.getElementById("lastName").value;
        const titleInput = document.getElementById("title").value;
        const mailInput = document.getElementById("email").value;
        const linkedInLinkInput = document.getElementById("hyperlink-input").value;
        const quoteInput = document.getElementById("qoute").value;
        const imageInput = document.getElementById("fileUpload").files[0];
        const divElement = document.createElement('divZaMembera');
        divElement.innerHTML = `
    <div class="flexInnerTeam lightBg">
      <header>
        <h3 class="NameTitle">${nameInput} ${surnameInput} <br> <small>${titleInput}</small></h3>
      </header>
      <div class="flexDivInner">
      <img src="${imageInput ? URL.createObjectURL(imageInput) : ''}" alt="Load" class="w3-left w3-circle w3-margin-right imgRound">
        <p>${quoteInput}</p>
    </div>
    <p class="mailAlignment"> ${mailInput}</p>
      <a href="${linkedInLinkInput}" target="_blank">
        <div class="w3-button w3-block liBg"><img src="../../slike/6.png" alt="">
        </div>
      </a>
    </div>
    `;

        const getDivElement = document.querySelector(".flexTeam");
        getDivElement.appendChild(divElement);



        CloseModal();
    }

}