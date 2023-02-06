//David Villafranca
//IT 202-001
//Project Phase 2
//November 11, 2022

function validateForm() {
    let x = document.forms["form"]["code"].value;
    if (x.length < 1 || x.length > 10){
        alert("Book Code must between 1 and 10 digits!");
        return false;
    }

    let y = document.forms["form"]["name"].value;
    if (y.length < 2 || y.length > 255){
        alert("Book Name must between 2 and 255 characters!");
        return false;
    } 

    let z = document.forms["form"]["description"].value;
    if (z.length < 25 || z.length > 255){
        alert("Book Description must between 2 and 255 characters!");
        return false;
    } 

    let p = document.forms["form"]["price"].value;
    if (p.length < 5.00 ){
        alert("Book Price must between more than 5.00 and if price is a whole amount put .00!");
        return false;
    } 
  }