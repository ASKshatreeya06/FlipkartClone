


function showModel(){
    console.log("hello")
    document.querySelector('.overlay').classList.add('showOverlay');
    document.querySelector('.loginform').classList.add('showform');

}
function closeloginform(){
    document.querySelector('.overlay').classList.remove('showOverlay');
    document.querySelector('.loginform').classList.remove('showform');
}

function signup(){
    document.querySelector('.overlay1').classList.add('showOverlay1');
    document.querySelector('.signupform').classList.add('signform');

}
function closesignupform(){
    console.log('Hello')
    document.querySelector('.signupform').classList.remove('signform');
    document.querySelector('.overlay1').classList.remove('showOverlay1');
}