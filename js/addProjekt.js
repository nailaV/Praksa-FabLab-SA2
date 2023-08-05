
function ResetValues(fileInput, titleInput, textInput, tagsInput, specialBadgeInput, subTitleInput, imagePreview, hyperLinkInput, popup) {
    fileInput.value = "";
    titleInput.value = "";
    textInput.value = "";
    tagsInput.value = "";
    specialBadgeInput.value = "";
    subTitleInput.value = "";
    imagePreview.style.display = 'none';
    imagePreview.style.backgroundImage = "";
    hyperLinkInput.value = "";
    popup.style.display = 'none';
  }
  function validateFormInputs() {
    const frontCardHeader = document.getElementById("title-input").value;
    const backCardHeader = document.getElementById("subtitle-input").value;
    const projectDescription = document.getElementById("text-input").value;
    const projectStatus = document.getElementById("special-badge-input").value;
    const readMoreLink = document.getElementById("hyperlink-input").value;
    const tags = document.getElementById("tags-input").value;
  
    if (frontCardHeader.length > 75) {
      alert("Prednja kartica mora imati manje od 75 karaktera.");
      return false;
    }
    if (backCardHeader.length > 100) {
      alert("Pozadina mora imati manje od 100 karaktera.");
      return false;
    }
    if (projectDescription.length > 500) {
      alert("Opis projekta mora imati manje od 500 karaktera.");
      return false;
    }
    if (projectStatus.length > 12) {
      alert("Status projekta mora imati manje od 12 karaktera.");
      return false;
    }
    if (!readMoreLink.includes("http")) {
      alert("Pročitaj više mora biti validan hyperlink.");
      return false;
    }
    if (tags.split(",").length > 4) {
      alert("Možete unijeti samo do 4 oznake.");
      return false;
    }
    return true;
  }
  
  function validateFileUpload() {
    const fileUpload = document.getElementById("file-upload").value;
  
    if (!fileUpload) {
      alert("Morate odabrati fajl za upload-ate.");
      return false;
    } else {
      const fileExtension = fileUpload.split(".").pop();
      if (fileExtension !== "jpg" && fileExtension !== "png" && fileExtension !== "gif") {
        alert("Možete odabrati samo JPG, PNG i GIF fajlove.");
        return false;
      }
    }
    return true;
  }
  function validateInputs() {
    const titleInput = document.getElementById("title-input");
    const subTitleInput = document.getElementById("subtitle-input");
    const textInput = document.getElementById("text-input");
    const tagsInput = document.getElementById("tags-input");
    const imageDataUrl = document.querySelector(".imagePreview img");
    const specialBadgeInput = document.getElementById("special-badge-input");
    const hyperLinkInput = document.getElementById("hyperlink-input");
  
    if (titleInput.value === "" || textInput.value === "" || tagsInput.value === "" || imageDataUrl === undefined || specialBadgeInput.value === "" || subTitleInput.value === "" || hyperLinkInput.value === "") {
      alert("Molimo Vas sve ispunite");
      return false;
    }
    if (!validateFormInputs()) {
      alert("Ispravite greške u formi");
      return false;
    }
    if (!validateFileUpload()) {
      return false;
    }
    alert("Forma je uspješno validirana.");
    return true;
  }
  
  const CreateElement = (tag, className) => {
    const element = document.createElement(tag);
    element.classList.add(className);
    return element;
  };
  
  const CreateTag = (tags) => {
    const tileTags = CreateElement('div', 'tile-tagsProjects');
    const tagsArray = tags.split(',');
    //region tag
    const regionTag = CreateElement('div', 'tagProject');
    regionTag.innerText = selectedCategory;
    tileTags.appendChild(regionTag);
    //end region tag
    tagsArray.forEach(tag => {
      const tileTagsDiv = CreateElement('div', 'tagProject');
      tileTagsDiv.innerText = tag;
      tileTags.appendChild(tileTagsDiv);
    });
    return tileTags;
  };
  
  let addProjekt = () => {
    const tag = CreateTag(tagsInput.value);
    const tile = CreateElement('div', 'tile');
    if (!validateInputs()) {
      return;
    };
    //innerHTML privremena pohrana
    tile.innerHTML = ' <div ><div class="special-badge"><div style="display: flex;"><span> ' + specialBadgeInput.value +
     ' </span></div></div><div class="flip-card-innerP"><div class="flip-card-frontP"><div class="tile-image"><img style="height:50%;" src="'
      + imageDataUrl + '" width="100%" alt=""></div><div class="tile-body"><h3>' + titleInput.value +
       ' </h3>' + tag.outerHTML + '</div></div><div class="flip-card-backP txtChangeSmaller"><h6>' +
        subTitleInput.value + '</h6><p>' + textInput.value + 
        '</p><div class="tile-tagsProjects"><div class="tagProject dugmence mob" style="background-color:white;color:black"><a href="' + hyperLinkInput.value +
         '" target="_blank">Read more</a></div></div></div></div></div>';
    
  
    let tilesDataBa = JSON.parse(localStorage.getItem('tilesDataBa')) || [];
    tilesDataBa.push(tile.innerHTML);
    localStorage.setItem('tilesDataBa', JSON.stringify(tilesDataBa));
    
    ResetValues(fileInput, titleInput, textInput, tagsInput, specialBadgeInput, subTitleInput, imagePreview, hyperLinkInput, popup);
  
    
  }
  
  let retrieveData = (user) => {
    let tileData = JSON.parse(localStorage.getItem('tilesDataBa'));
    if(tileData === null) return;
  
    tileData.forEach((tile,index) => {
      const tileElement = CreateElement('div', 'tile');
      tileElement.innerHTML = tile;
  
      const removeButton = CreateElement('button', 'remove-button');
      removeButton.innerText = 'Remove';
      removeButton.style="color:white;background-color:rgb(218,23,23); width:100%; margin-top:1px; border-radius:2px ; height:6%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)";
      removeButton.addEventListener('click',(event)=>{
        event.stopPropagation();
        console.log(index.id);
        removeTile(index);
        window.location.reload();
      });
      tileElement.appendChild(removeButton);
      addProjektDiv.after(tileElement);
  
    });
  
    tiles = document.querySelectorAll('.tile');
    
    if(user){
      editHandler(tiles);
    }
  
    let removeTile = (index) => {
      let tileData = JSON.parse(localStorage.getItem('tilesDataBa'));
      if (tileData === null) return;
  
      tileData.splice(index, 1); 
      localStorage.setItem('tilesDataBa', JSON.stringify(tileData)); 
      tiles[index].remove(); 
    }
  
  }
  
  
  let editProject = (tile) => {
    const tag = CreateTag(tagsInput.value);
    if (!validateInputs()) {
      return;
    };
    //innerHTML privremena pohrana
    tile.innerHTML = ' <div ><div class="special-badge"><div style="display: flex;"><span> ' + specialBadgeInput.value + ' </span></div></div><div class="flip-card-innerP"><div class="flip-card-frontP"><div class="tile-image"><img style="height:50%;" src="' + imageDataUrl + '" width="100%" alt=""></div><div class="tile-body"><h3>' + titleInput.value + ' </h3>' + tag.outerHTML + '</div></div><div class="flip-card-backP txtChangeSmaller"><h6>' + subTitleInput.value + '</h6><p>' + textInput.value + '</p><div class="tile-tagsProjects"><div class="tagProject dugmence mob" style="background-color:white;color:black"><a href="' + hyperLinkInput.value + '" target="_blank">Read more</a></div></div></div></div></div>';
    ResetValues(fileInput, titleInput, textInput, tagsInput, specialBadgeInput, subTitleInput, imagePreview, hyperLinkInput, popup);
  }
  let editHandler=(tiles)=>{
    for (const tile in tiles) {
      if (Object.hasOwnProperty.call(tiles, tile)) {
        let element = tiles[tile];
        element.onclick = () => {
          popup.style.display = 'block';
          if(window.location.href.includes("en")){
          document.querySelector(".popup-content").children[0].innerText = "Edit project";
          submitBtn.innerText = 'Edit project';}
          else{
            document.querySelector(".popup-content").children[0].innerText = "Uredi projekat";
            submitBtn.innerText = 'Uredi';
          }
          submitBtn.onclick = () => {
            editProject(element);
          }
        }
      }
    }
  }
  //kontrola popupa 
  retrieveData();
  filterSelection("all", "");
  firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      userInfo.style.display = "block";
      addProjektDiv.onclick = () => {
  
        popup.style.display = 'block';
        if(window.location.href.includes("en")){
        submitBtn.innerText = 'Dodaj projekt';
        document.querySelector(".popup-content").children[0].innerText = "Dodaj novi projekat";}
        submitBtn.onclick = () => {
          addProjekt();
          retrieveData(user);
          filterSelection("all", "");
        }
    
      }
      const obrisi=document.querySelectorAll('.remove-button');
      obrisi.forEach((button)=>{
        button.style.display='block';
      })
  
      // Edit project button
     editHandler(tiles);
  
      //edit projects from local storage on click
    } else if (!user) {
      userInfo.style.display = "none";
      addProjektDiv.style.display = 'none';
  
      const obrisi=document.querySelectorAll('.remove-button');
      obrisi.forEach((button)=>{
        button.style.display='none';
      })
      for (const tile in tiles) {
        if (Object.hasOwnProperty.call(tiles, tile)) {
          let element = tiles[tile];
          
          element.onclick = () => { }
        }
      }
    }
  
  });
  
  // Close popup
  closeBtn.addEventListener('click', () => {
    ResetValues(fileInput, titleInput, textInput, tagsInput, specialBadgeInput, subTitleInput, imagePreview, hyperLinkInput, popup);
  });
  
  
  function filterSelection(inProgress, tag) {
    var x = document.getElementsByClassName("tile");
    for (var i = 0; i < x.length; i++) {
      var showTile = true;
      if (inProgress && !x[i].classList.contains(inProgress) && inProgress !== "all") {
        showTile = false;
      }
      if (tag && !x[i].classList.contains(tag) && tag !== "all") {
        showTile = false;
      }
      if (showTile) {
        x[i].classList.add("show");
      } else {
        x[i].classList.remove("show");
      }
    }
  }
  // prikazi sve projekte 
  
  
  var btnContainer = document.getElementById("special-badge");
  var btns = btnContainer.getElementsByClassName("btn");
  
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      var current = document.querySelector("#special-badge .active");
      if (current) {
        current.classList.remove("active");
      }
      this.classList.add("active");
      var specialBadgeSelected = document.querySelector("#special-badge .active");
      var inProgress = specialBadgeSelected ? specialBadgeSelected.getAttribute("onclick").split("'")[1] : "";
      var tagsSelected = document.querySelector("#tags .active");
      var tag = tagsSelected ? tagsSelected.getAttribute("data-tag") : "";
      filterSelection(inProgress, tag);
    });
  }
  
  var tagContainer = document.getElementById("tags");
  var tags = tagContainer.getElementsByClassName("btn");
  for (var i = 0; i < tags.length; i++) {
    tags[i].addEventListener("click", function () {
      var tag = this.getAttribute("data-tag");
      filterSelection(inProgress, tag);
    });
  }
  
  // objekat koji će brojati koliko puta se pojavljuje svaki tag
  var tagCounts = {};
  
  var tilea = document.querySelectorAll('.tile');
  for (var i = 0; i < tilea.length; i++) {
    var tags = tilea[i].querySelectorAll('.tagProject:not(.dugmence)');
    for (var j = 0; j < tags.length; j++) {
      var tag = tags[j].innerHTML.trim();
      if (tag !== "Local" && tag !== "International") {
        if (tagCounts.hasOwnProperty(tag)) {
          tagCounts[tag]++;
        } else {
          tagCounts[tag] = 1;
        }
      }
    }
  }
  // sortiranje tagova po broju pojavljivanja
  var sortedTags = Object.keys(tagCounts).sort(function (a, b) {
    return tagCounts[b] - tagCounts[a];
  });
  
  var tagWrapper = document.getElementById('tags');
  for (var i = 0; i < 5; i++) {
    var tag = sortedTags[i];
    var button = document.createElement('button');
    button.className = 'btn';
    button.textContent = tag + " (" + tagCounts[tag] + ")";
    button.setAttribute("data-tag", tag);
    button.addEventListener('click', function () {
      var current = document.querySelector("#tags .active");
      if (current) {
        current.classList.remove("active");
      }
      this.classList.add("active");
      var specialBadgeSelected = document.querySelector("#special-badge .active");
      var inProgress = specialBadgeSelected ? specialBadgeSelected.getAttribute("onclick").split("'")[1] : "";
      var tagSelected = this.getAttribute("data-tag");
      filterSelection(inProgress, tagSelected);
    });
    tagWrapper.appendChild(button);
  }