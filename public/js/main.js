// ***********************************************
// Login Page JS METHODS
// ***********************************************
function login_form_clear(){
	document.getElementById('login_form').reset();
}
// ***********************************************
// Auto Add Year End in Sys selection
// ***********************************************
function createYearEnd(){

var yearEnd = document.getElementById('year_start').value;
document.getElementById('year_end').value = parseInt(yearEnd) + 1;

}