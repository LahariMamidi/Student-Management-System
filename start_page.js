let usernameEl = document.getElementById("rollno");
let passwordEl = document.getElementById("password");
let myForm = document.getElementById("myForm");

myForm.addEventListener("submit",function(event){
    event.preventDefault();
    let usernameVal = usernameEl.value.trim();
    let passwordVal = passwordEl.value.trim();

    if(passwordVal=="123" && usernameVal=="Lahari"){
        window.location.href = "home_page.html";
        myForm.reset();
    }
    else{
        alert("Your Username and Password combination is incorrect.");
        myForm.reset();
    }
    
})