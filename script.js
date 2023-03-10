function FormValidation(){

var name=document.custom_form.name;
var email=document.custom_form.email;

var pass = document.custom_form.password;

var phne = document.custom_form.phone;
var loc = document.custom_form.location;
var ntl = document.custom_form.nationality;
var exp = document.custom_form.experience;
var skill = document.custom_form.skills;
var ind = document.custom_form.industry;
var dept = document.custom_form.department;

//Name validation
if (!name.value.match(/^[a-zA-Z ]+$/)||name.value == "") {
   name.nextElementSibling.style.display = "block";
   name.style.border = "1px solid #f00";
   return false
}else{
  name.nextElementSibling.style.display = "none";
  name.style.border = "1px solid transparent";
}
//email validation
if (!email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) || email.value == "") {
   email.nextElementSibling.style.display = "block";
   email.style.border = "1px solid #f00";
   return false
}else{
  email.nextElementSibling.style.display = "none";
  email.style.border = "1px solid transparent";
}
//password validation
if (pass.value == "" ||pass.value.length < 6) {
   pass.nextElementSibling.style.display = "block";
   pass.style.border = "1px solid #f00";
   return false
}else{
  pass.nextElementSibling.style.display = "none";
  pass.style.border = "1px solid transparent";
}
//phone no validation  /^\(?([5-9]{1})\)?([0-9]{9})$/)

if (!phne.value.match(/^\d{10}$/) ||phne.value == "") {
   phne.nextElementSibling.style.display = "block";
   phne.style.border = "1px solid #f00";
   return false
}else{
  phne.nextElementSibling.style.display = "none";
  phne.style.border = "1px solid transparent";
}

//location validation

if (loc.value == "") {
   loc.nextElementSibling.style.display = "block";
   loc.style.border = "1px solid #f00";
   return false
}else{
  loc.nextElementSibling.style.display = "none";
  loc.style.border = "1px solid transparent";
}
// work experience validation
if(exp.value==""){
   exp.nextElementSibling.style.display = "block";
   exp.style.border = "1px solid #f00";
   return false
}else{
  exp.nextElementSibling.style.display = "none";
  exp.style.border = "1px solid transparent";
}
//skills validation
if(skill.value==""){
   skill.nextElementSibling.style.display = "block";
   skill.style.border = "1px solid #f00";
   return false
}else{
  skill.nextElementSibling.style.display = "none";
  skill.style.border = "1px solid transparent";
}
//industry validation
if(ind.value==""){
   ind.nextElementSibling.style.display = "block";
   ind.style.border = "1px solid #f00";
   return false
}else{
  ind.nextElementSibling.style.display = "none";
  ind.style.border = "1px solid transparent";
}
//department validation
if(dept.value==""){
   dept.nextElementSibling.style.display = "block";
   dept.style.border = "1px solid #f00";
   return false
}else{
  dept.nextElementSibling.style.display = "none";
  dept.style.border = "1px solid transparent";
}


}
