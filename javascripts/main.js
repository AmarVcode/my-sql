const showform=()=>{
    let form1=document.getElementById('login');
    let form2=document.getElementById('signin');
if(form1.classList.contains('hidden')){
    form1.classList.remove('hidden');
    form2.classList.add('hidden');
}
else{
    form2.classList.remove('hidden');
    form1.classList.add('hidden');
}
}
