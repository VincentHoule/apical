
<?php
    /*
     *  function qui affiche le met le javascript dans le php
     */
    function content(){
      echo '<script>
        let commentaire_all = document.querySelectorAll("#commentaire");
    function tous_com(){
        let btn = document.getElementById("btn_dev");
        let com = document.querySelector("#commentaire");
        commentaire_all.forEach(commentaire =>{
            commentaire.classList.toggle("none");
        });
        if(com.classList.contains("none")){
            btn.innerHTML ="Tout réduire";
        }
        else{
            btn.innerHTML ="Tout développer";
        }
    }
    function unique_com(num){
        var commentaire = document.querySelectorAll(".com"+num)
        commentaire.forEach(commentaire =>{
            commentaire.classList.toggle("none");
        });
    }

</script>';
    };

    function _header(){
        echo'<script>
    var login = document.getElementById("block_login");
    var rechercher = document.getElementById("block_recherche");

    function recherche(){
        rechercher.classList.toggle("none");
        if(!login.classList.contains("none")){
            login.classList.toggle("none")
        }
    }

    function formulaire(){
        login.classList.toggle("none")
        if(!rechercher.classList.contains("none")){
            rechercher.classList.toggle("none")
        }
    }

</script>';
    }