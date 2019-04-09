function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    
   
    
    tabcontent = document.getElementsByClassName("tabcontent");

    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";

    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        
    }


    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

    document.getElementsByClassName("active")[0].style.background = "none";
    document.getElementsByClassName("active")[0].style.border ="2px solid #fff"
    document.getElementsByClassName("active")[0].style.color ="#fff"
     for (i = 0; i < tablinks.length; i++) {
         
         if (tablinks[i].className ==  "tablinks circle ") {
            tablinks[i].style.background = "#DAA515";
            tablinks[i].style.transition = "0.5s";
            tablinks[i].style.border ="2px solid #FAB702";
             tablinks[i].style.color ="#222";
        }
    }
}
