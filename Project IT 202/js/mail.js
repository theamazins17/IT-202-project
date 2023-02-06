//David Villafranca
//IT 202-001
//Project Phase 2
//November 11, 2022

function validateForm() {
    let x = document.forms["form"]["firstName"].value;
    if (x.length < 2 || x.length > 10){
        alert("First Name must between 2 and 10 characters!");
        return false;
    }

    let y = document.forms["form"]["lastName"].value;
    if (y.length < 5 || y.length > 20){
        alert("Last Name must between 5 and 20 characters!");
        return false;
    } 

    let z = document.forms["form"]["email"].value;
    if (z.length > 30){
        alert("Email must not be more than 30 characters!");
        return false;
    }

    let p = document.forms["form"]["address"].value;
    if (p.length < 10 || p.length > 255 ){
        alert("Address must be between 10 and 255 characters!");
        return false;
    }
    
    let a = document.forms["form"]["cityTown"].value;
    if (a.length < 5 || a.length > 30 ){
        alert("City or Town must be between 5 and 30 characters!");
        return false;
    }
    
    let s = document.forms["form"]["state"].value;
    if (s.length < 2 || s.length > 2 ){
        alert("State is max 2 characters!");
        return false;
    }
    
    let c = document.forms["form"]["zipCode"].value;
    if (c.length < 5 || c.length > 5 ){
        alert("Zip Code must be exactly 5 digits!");
        return false;
    } 
  }