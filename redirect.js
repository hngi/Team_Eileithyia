if(window.location.href == "http://trccgpsf.org/mini_classroom/verifyemail.html"){

    setTimeout(login,4000);

} 

function login(){

    window.location.href = "http://trccgpsf.org/mini_classroom";

}

function logout(){

    auth.signOut().then(function(){

        window.location.replace("http://trccgpsf.org/mini_classroom");

    })

}

$('#signout').on('click',()=>{

    logout();

    console.log('signout');

})
