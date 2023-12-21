function reveal(){
    var reveals = document.querySelectorAll("section>div");
    for(var i=0; i <reveals.length; i++){

        var windowHeight = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealTop< windowHeight-revealTop){
            reveals[i].classList.add('active');
        }else{
            reveals[i].classList.remove('active');
        }
    }
}








window.addEventListener("scroll", reveal);