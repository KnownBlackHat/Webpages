function auth(){
    let pwd="0101downloadit1010";
    let inp=prompt("!!!Enter Password!!!");
    
    if (inp==pwd) {
        alert("Correct Password");
        return true;
    }
    else if (inp==null) {
        return false;
    }
    else{
        alert("Wrong Password");
        return false;
    }
}
function spwd(){
    if (document.getElementById('pwdn').type==='text'){
        
        document.getElementById('pwdn').type='password';
        document.getElementById('hi').className='fa fa-eye-slash';
    }
    
    else if (document.getElementById('pwdn').type==='password') {document.getElementById('pwdn').type='text';
        document.getElementById('hi').className='fa fa-eye';
    }
}
function opensidenav(){
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("amam").style.display = "none";
    
}
function closesidenav(){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("amam").style.display = "inline";
}
