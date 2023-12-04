const login = $("#Login");
const signin = $("#Signin");
const LogControl = $(".Control1");
const SignControl = $(".Control2");
const Present = $(".Present")
$(document).ready(()=>{
    Present.show();
    signin.hide();
    login.hide();
});
LogControl.click(()=>{
    login.show();
    signin.hide();
})
SignControl.click(()=>{
    login.hide();
    signin.show();
})