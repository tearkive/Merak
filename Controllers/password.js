const pass = document.getElementById("pass"),
      icon = document.querySelector(".icono-ojo");

icon.addEventListener("click", e => {
    if(pass.type == "password") {
        pass.type ="text";
        icon.src = "../../Images/hide-regular-24.png"
    } else {
        pass.type = "password"
        icon.src="../../Images/show-alt-regular-24.png"
    }
});


const pass_nuevo = document.getElementById("pass-nuevo"),
      icon2 = document.querySelector(".icono-ojo");

icon2.addEventListener("click", e => {
    if(pass_nuevo.type == "password") {
        pass_nuevo.type ="text";
        icon2.src = "../../Images/hide-regular-24.png"
    } else {
        pass_nuevo.type = "password"
        icon2.src="../../Images/show-alt-regular-24.png"
    }
});

const pass_conf = document.getElementById("passconf"),
      icon3 = document.querySelector(".aux .icono-ojo");

icon3.addEventListener("click", e => {
    if(pass_conf.type == "password") {
        pass_conf.type ="text";
        icon3.src = "../../Images/hide-regular-24.png"
    } else {
        pass_conf.type = "password"
        icon3.src="../../Images/show-alt-regular-24.png"
    }
});