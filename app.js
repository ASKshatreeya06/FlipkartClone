function showModel(){
    document.querySelector('.overlay').classList.add('showOverlay');
    document.querySelector('.loginform').classList.add('showform');

}
function closeloginform(){
    document.querySelector('.overlay').classList.remove('showOverlay');
    document.querySelector('.loginform').classList.remove('showform');
}

function signup(){
    document.querySelector('.overlay').classList.add('showOverlay');
    document.querySelector('.signupform').classList.add('signform');

}
function closesignupform(){
    document.querySelector('.overlay').classList.remove('showOverlay');
    document.querySelector('.signupform').classList.remove('signform');
}


