function auth(){
    let pwd="0101downloadit1010"
    let inp=prompt("!!!Enter Password!!!");
    if (inp==pwd) {
        alert("Correct Password");
        return true;
    }
    else{
        alert("Wrong Password");
        return false;
    }
}