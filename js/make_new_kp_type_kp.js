                       
function showhideTypeKP(val){
        if (val == '6'){
         document.getElementById('type_kp_manual').style.display='none';
         document.getElementById('type_kp_object').style.display='block'; 
         
         }

        else{
         document.getElementById('type_kp_object').style.display='none'; 
         document.getElementById('type_kp_manual').style.display='block';
        }  
}

