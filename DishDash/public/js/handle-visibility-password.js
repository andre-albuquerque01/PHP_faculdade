var iconsPasswordHidden = document.querySelectorAll(".eye");
var iconsPasswordShow = document.querySelectorAll(".eye-slash");

var hiddenPassword = function (element) {
    var parentElement = element.parentElement;
    var inputPassword = parentElement.querySelector("input");
    var iconShowPassword = parentElement.querySelector(".eye");
    element.classList.add("hidden");
    iconShowPassword.classList.remove("hidden");
    inputPassword.setAttribute("type", "password");
};
var showPassword = function (element) {
    var parentElement = element.parentElement;
    var inputPassword = parentElement.querySelector("input");
    var iconHiddenPassword = parentElement.querySelector(".eye-slash");
    element.classList.add("hidden");
    iconHiddenPassword.classList.remove("hidden");
    inputPassword.setAttribute("type", "text");
};

var controllerVisibilityPassword = function (e) {
    var element = e.target;
    var checkElement = {
        "icon-eye-slash": hiddenPassword,
        "icon-eye": showPassword,
        "icon-eye-slash-confirmation": hiddenPassword,
        "icon-eye-confirmation": showPassword,
    };
    var idElement = element.id;
    var action = checkElement[idElement];
    action(element);
};

iconsPasswordHidden.forEach(function (iconPasswordHidden) {
    iconPasswordHidden.addEventListener("click", controllerVisibilityPassword);
});
iconsPasswordShow.forEach(function (element) {
    element.addEventListener("click", controllerVisibilityPassword);
});
