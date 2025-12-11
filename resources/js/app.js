import './bootstrap';


let path= window.location.pathname.replace("/","")
if (path==="") path="home";
let selecter=0;
if (path==="home") selecter=0;
else if (path==="about" || path==="public/about") selecter=1;
else if (path==="projects" || path==="public/projects") selecter=2;
else if (path==="settings" || path==="public/settings") selecter=3;

//active link
document.getElementById("nav-menu").children[selecter].className+=" active"
document.getElementById("nav-menu").children[selecter].children[0].children[0].className="flex label"