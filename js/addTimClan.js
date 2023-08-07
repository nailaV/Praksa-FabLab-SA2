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
        alert("Morate popuniti sva polja.");
        return false;
    }

    if (name.length > 25 || containsNumber(name)) {
        alert("Ime moze sadrzavati maksimalno 25 znakova, samo slova.");
        return false;
    }
    if (surname.length > 30 || containsNumber(surname)) {
        alert("Prezime moze sadrzavati maksimalno 30 znakova, samo slova.");
        return false;
    }
    // if(title.length > 50 || containsNumber(title)){
    //     alert("Title must be valid, maximum of 50 characters, only letters.");
    //     return false;
    // }

    if (!isValidEmail(mail)) {
        alert("Format email-a mora biti validan, npr. ime.prezime@mailprovider.com");
        return false;
    }

    if (quote.length > 50) {
        alert("Citat moze sadrzavati maksimalno 50 znakova.");
        return false;
    }

    if (!isValidHyperlink(linkedInLink)) {
        alert("LinkedIn link mora biti validan, npr. https://www.linkedin.com/in/ime-prezime-brojevi");
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

//hide i show dugmica i drugih html elemenata
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

//dodavanje team membera
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
        
        if(titleInput=="CEO"){
        const reader1 = new FileReader();
        reader1.onload = function (event){
            const uRL = event.target.result;

        
            const teamMember = {
                name: nameInput,
                surname: surnameInput,
                title: titleInput,
                mail: mailInput,
                linkedInLink: linkedInLinkInput,
                quote: quoteInput,
                image: uRL,
            };

            let teamData = JSON.parse(localStorage.getItem('teamDataCEOBHS')) || [];
            teamData.push(teamMember);
            localStorage.setItem('teamDataCEOBHS', JSON.stringify(teamData));

            CloseModal();
            window.location.reload();
            GetTeamDataCEO();
        }
        reader1.readAsDataURL(imageInput);
        
    }
    else if(titleInput=="Menadžer"){
        const reader1 = new FileReader();
        reader1.onload = function (event){
            const uRL = event.target.result;

        
            const teamMember = {
                name: nameInput,
                surname: surnameInput,
                title: titleInput,
                mail: mailInput,
                linkedInLink: linkedInLinkInput,
                quote: quoteInput,
                image: uRL,
            };

            let teamData = JSON.parse(localStorage.getItem('teamDataManagerBHS')) || [];
            teamData.push(teamMember);
            localStorage.setItem('teamDataManagerBHS', JSON.stringify(teamData));

            CloseModal();
            window.location.reload();
            GetTeamDataManager();
        }
        reader1.readAsDataURL(imageInput);
    }
    else{
        const reader1 = new FileReader();
        reader1.onload = function (event){
            const uRL = event.target.result;

        
            const teamMember = {
                name: nameInput,
                surname: surnameInput,
                title: titleInput,
                mail: mailInput,
                linkedInLink: linkedInLinkInput,
                quote: quoteInput,
                image: uRL,
            };

            let teamData = JSON.parse(localStorage.getItem('teamDataInternBHS')) || [];
            teamData.push(teamMember);
            localStorage.setItem('teamDataInternBHS', JSON.stringify(teamData));

            CloseModal();
            window.location.reload();
            GetTeamDataIntern();
        }
        reader1.readAsDataURL(imageInput);
    }
}
    
}

//getovanje podataka iz local storage-a o team memberima grupe CEO
function GetTeamDataCEO() {
    let teamData = JSON.parse(localStorage.getItem('teamDataCEOBHS'));
    if (teamData === null) {
        console.log('no data...');
        return;
    }

    const divCEO = document.querySelector(".CEO");
    teamData.forEach((element,indexC) => {
        const kartica = document.createElement("div");
        kartica.innerHTML=
        `<div class="card">
         <button class="delete-button" onclick="DeleteDataCEO(${indexC})"> &#x1F5D1;</button>
         <div class="profile-picture">
          <img src="${element.image}" alt="Profile Picture">
        </div>
         <div class="info">
             <h2 class="name">${element.name} ${element.surname}</h2>
             <p class="title">${element.title}</p>
             <blockquote class="quote">${element.quote}</blockquote>
                 <div class="mail">
                     <p> ${element.mail}</p> 
                 </div>
                     <div class="contact">
                         <a href="${element.linkedInLink}" target="_blank"> 🗨 LinkedIn</a>
                     </div>
                 </div>
         </div>
        `;
        divCEO.appendChild(kartica);
    });
}
//getovanje podataka iz local storage-a o team memberima grupe Manager
function GetTeamDataManager() {
    let teamData = JSON.parse(localStorage.getItem('teamDataManagerBHS'));
    if (teamData === null) {
        console.log('no data...');
        return;
    }

    const divCEO = document.querySelector(".Manager");
    teamData.forEach((element,indexM) => {
        const kartica = document.createElement("div");
        kartica.innerHTML=
        `<div class="card">
         <button class="delete-button" onclick="DeleteDataManager(${indexM})"> &#x1F5D1;</button>
         <div class="profile-picture">
          <img src="${element.image}" alt="Profile Picture">
        </div>
         <div class="info">
             <h2 class="name">${element.name} ${element.surname}</h2>
             <p class="title">${element.title}</p>
             <blockquote class="quote">${element.quote}</blockquote>
                 <div class="mail">
                     <p> ${element.mail}</p> 
                 </div>
                     <div class="contact">
                         <a href="${element.linkedInLink}" target="_blank"> 🗨 LinkedIn</a>
                     </div>
                 </div>
         </div>
        `;
        divCEO.appendChild(kartica);
    });
}

//getovanje podataka iz local storage-a o team memberima grupe Intern
function GetTeamDataIntern() {
    let teamData = JSON.parse(localStorage.getItem('teamDataInternBHS'));
    if (teamData === null) {
        console.log('no data...');
        return;
    }

    const divCEO = document.querySelector(".InternBHS");
    teamData.forEach((element,indexI) => {
        const kartica = document.createElement("div");
        kartica.innerHTML=
        `<div class="card">
         <button class="delete-button" onclick="DeleteDataIntern(${indexI})"> &#x1F5D1;</button>
         <div class="profile-picture">
          <img src="${element.image}" alt="Profile Picture">
        </div>
         <div class="info">
             <h2 class="name">${element.name} ${element.surname}</h2>
             <p class="title">${element.title}</p>
             <blockquote class="quote">${element.quote}</blockquote>
                 <div class="mail">
                     <p> ${element.mail}</p> 
                 </div>
                     <div class="contact">
                         <a href="${element.linkedInLink}" target="_blank"> 🗨 LinkedIn</a>
                     </div>
                 </div>
         </div>
        `;
        divCEO.appendChild(kartica);
    });
}



function CheckContent(){
    const linijaC = document.querySelector('.linijaC');
    const linijaM = document.querySelector('.linijaM');
    const linijaI = document.querySelector('.linijaI');
    const CEOContent = document.querySelector('.linijaC .CEO').innerHTML.trim();
    const ManagerContent = document.querySelector('.linijaM .Manager').innerHTML.trim();
    const InternContent = document.querySelector('.linijaI .Intern').innerHTML.trim();
    if (CEOContent === '') {
        linijaC.style.display = 'none'; 
      } else {
        linijaC.style.display = 'block'; 
      }

      if (ManagerContent === '') {
        linijaM.style.display = 'none'; 
      } else {
        linijaM.style.display = 'block';
      }

      if (InternContent === '') {
        linijaI.style.display = 'none'; 
      } else {
        linijaI.style.display = 'block'; 
      }
    
}
 document.addEventListener('DOMContentLoaded', function () {
     GetTeamDataCEO();
     GetTeamDataManager();
     GetTeamDataIntern();
     CheckContent();
 });

 
function DeleteDataCEO(id){
    let teamDataC = JSON.parse(localStorage.getItem('teamDataCEOBHS'));
    if (teamDataC === null) return;
    
    teamDataC.splice(id, 1); 
    localStorage.setItem('teamDataCEOBHS', JSON.stringify(teamDataC)); 
    console.log('brisem karticu sa id-em ' + id);
    window.location.reload();
}



function DeleteDataManager(id){
    let teamDataM = JSON.parse(localStorage.getItem('teamDataManagerBHS'));
    if (teamDataM === null) return;
    
    teamDataM.splice(id, 1); 
    localStorage.setItem('teamDataManagerBHS', JSON.stringify(teamDataM)); 
    console.log('brisem karticu sa id-em ' + id);
    window.location.reload();
}


function DeleteDataIntern(id){
    let teamDataI = JSON.parse(localStorage.getItem('teamDataInternBHS'));
    if (teamDataI === null) return;
    
    teamDataI.splice(id, 1); 
    localStorage.setItem('teamDataInternBHS', JSON.stringify(teamDataI)); 
    console.log('brisem karticu sa id-em ' + id);
    window.location.reload();
}
