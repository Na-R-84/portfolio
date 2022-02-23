
let mainNav = document.querySelector('.header-menu');
let navBarToggle = document.querySelector('#js-navbar-toggle');
let nameInput=document.querySelector('#fullname');
let mailInput=document.querySelector('#mail');
let msgInput=document.querySelector('#message');
let sendBtn=document.querySelector('.send-btn');


//---------- Toggle ----------
console.log(navBarToggle);
navBarToggle.addEventListener('click', function () {
  console.log('click');
  navBarToggle.classList.toggle("exit");
  mainNav.classList.toggle("active")
  // mainNav.classList.toggle('active');
  // navBarToggle.classList.toggle('exit');
});
//------------------- Form/input/name --------------
//Kontrollera så att user skrivit tecken
//Lyssna efter när användaren skriver i input
nameInput.addEventListener("keyup",function(){
  //vad ska hända när användaren släpper en tangent
  //console. log("Nu skrev du något!"):
  let getValue = nameInput.value; //Hämtar inputs värde
  console.log(getValue);

  if(getValue === ""){
    console. log("Det är tomt");
    sendBtn.disablel= false;
  }else{
    //om villkoret inte uppfylls så tas disabled bort frän input
    console, log("Nu Sr det aindre än 3 tecken!");
    sendBtn.disabled = true;
  }
});

//Är inte kravet uppfyllt ska inte btn vara aktiv
//När är inte tomt då ska btn vara aktiv
//När vi klickar i input ska focus lyssnas efter
nameInput.addEventListener("focus", function(){
  console. log ("Du står i textrutan!");
  nameInput.classList.toggle("focusBorder");
});
//När vi klickar utanför ska blur lyssnas efter
//motsatts till focus är blur
  nameInput.addEventListener("blur", function(){
    console. log ("Du Lämnade textrutan!");
    nameInput.classList.toggle("focusBorder");
  });
///////////////////////////////--mail--///////////////////////////////////
mailInput.addEventListener("keyup",function(){
  //vad ska hända när användaren släpper en tangent
  //console. log("Nu skrev du något!"):
  let getValue = mailInput.value; //Hämtar inputs värde
  console.log(getValue);

  if(getValue === ""){
    console. log("Det är tomt");
    sendBtn.disablel= false;
  }else{
    //om villkoret inte uppfylls så tas disabled bort frän input
    console, log("Nu Sr det aindre än 3 tecken!");
    sendBtn.disabled = true;
  }
});

mailInput.addEventListener("focus", function(){
  console. log ("Du står i textrutan!");
  mailInput.classList.toggle("focusBorder");
});
//När vi klickar utanför ska blur lyssnas efter
//motsatts till focus är blur
mailInput.addEventListener("blur", function(){
    console. log ("Du Lämnade textrutan!");
    mailInput.classList.toggle("focusBorder");
  });
/////////////////////////--Message--/////////////////////////////////
msgInput.addEventListener("keyup",function(){
  //vad ska hända när användaren släpper en tangent
  //console. log("Nu skrev du något!"):
  let getValue = msgInput.value; //Hämtar inputs värde
  console.log(getValue);

  if(getValue === ""){
    console. log("Det är tomt");
    sendBtn.disablel= false;
  }else{
    //om villkoret inte uppfylls så tas disabled bort frän input
    console, log("Nu Sr det aindre än 3 tecken!");
    sendBtn.disabled = true;
  }
});

msgInput.addEventListener("focus", function(){
  console. log ("Du står i textrutan!");
  msgInput.classList.toggle("focusBorder");
});
//När vi klickar utanför ska blur lyssnas efter
//motsatts till focus är blur
msgInput.addEventListener("blur", function(){
    console. log ("Du Lämnade textrutan!");
    msgInput.classList.toggle("focusBorder");
  });

//////////////////////////---submit-BTN ---////////////////////
  //När man klickar på btn ska input rensas
  sendBtn. addEventListener("click", function(event){
    //vad ska hända när vi klickar?
    console. log ("Du klickade pá btn");
    event.preventDefault(); // Tar bort default beteende
    nameInput.value="";
    if(nameInput. value === ""){
      sendBtn.disabled= false;
      document.write("fylla upp fälten");
  }
});