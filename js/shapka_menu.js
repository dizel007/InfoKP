                       
function showhideBlocks(val){
        if (val == ''){
         document.getElementById('g_nomerKP').style.display='block'; 
         document.getElementById('g_dateKPs').style.display='none';
         document.getElementById('g_dateKPe').style.display='none';
         document.getElementById('g_inn').style.display='none';    
         document.getElementById('g_id_kp').style.display='none';
         document.getElementById('g_responsible').style.display='none';
         document.getElementById('g_name_zakazchik').style.display='none';    
         document.getElementById('g_adres_postavki').style.display='none'; 
    
        }

        else if (val == 2) {
         document.getElementById('g_nomerKP').style.display='block'; 
         document.getElementById('g_dateKPs').style.display='none';
         document.getElementById('g_dateKPe').style.display='none';
         document.getElementById('g_inn').style.display='none';    
         document.getElementById('g_id_kp').style.display='none';
         document.getElementById('g_responsible').style.display='none';
         document.getElementById('g_name_zakazchik').style.display='none';    
         document.getElementById('g_adres_postavki').style.display='none';   
       }

        else if (val == 3) {
         document.getElementById('g_nomerKP').style.display='none'; 
         document.getElementById('g_dateKPs').style.display='block';
         document.getElementById('g_dateKPe').style.display='block';
         document.getElementById('g_inn').style.display='none';    
         document.getElementById('g_id_kp').style.display='none';
         document.getElementById('g_responsible').style.display='none';
         document.getElementById('g_name_zakazchik').style.display='none';    
         document.getElementById('g_adres_postavki').style.display='none';   
       }
       
       else if (val == 4) {
         document.getElementById('g_nomerKP').style.display='none'; 
         document.getElementById('g_dateKPs').style.display='none';
         document.getElementById('g_dateKPe').style.display='none';
         document.getElementById('g_inn').style.display='block';    
         document.getElementById('g_id_kp').style.display='none';
         document.getElementById('g_responsible').style.display='none';
         document.getElementById('g_name_zakazchik').style.display='none';    
         document.getElementById('g_adres_postavki').style.display='none';     
       } 

       else if (val == 5) {
         document.getElementById('g_nomerKP').style.display='none'; 
         document.getElementById('g_dateKPs').style.display='none';
         document.getElementById('g_dateKPe').style.display='none';
         document.getElementById('g_inn').style.display='none';    
         document.getElementById('g_id_kp').style.display='block';
         document.getElementById('g_responsible').style.display='none';
         document.getElementById('g_name_zakazchik').style.display='none';    
         document.getElementById('g_adres_postavki').style.display='none';     
       } 

       else if (val == 6) {
         document.getElementById('g_nomerKP').style.display='none'; 
         document.getElementById('g_dateKPs').style.display='none';
         document.getElementById('g_dateKPe').style.display='none';
         document.getElementById('g_inn').style.display='none';    
         document.getElementById('g_id_kp').style.display='none';
         document.getElementById('g_responsible').style.display='block';
         document.getElementById('g_name_zakazchik').style.display='none';    
         document.getElementById('g_adres_postavki').style.display='none';     
       } 

       else if (val == 7) {
         document.getElementById('g_nomerKP').style.display='none'; 
         document.getElementById('g_dateKPs').style.display='none';
         document.getElementById('g_dateKPe').style.display='none';
         document.getElementById('g_inn').style.display='none';    
         document.getElementById('g_id_kp').style.display='none';
         document.getElementById('g_responsible').style.display='none';
         document.getElementById('g_name_zakazchik').style.display='block';    
         document.getElementById('g_adres_postavki').style.display='none';     
       } 
       else if (val == 8) {
         document.getElementById('g_nomerKP').style.display='none'; 
         document.getElementById('g_dateKPs').style.display='none';
         document.getElementById('g_dateKPe').style.display='none';
         document.getElementById('g_inn').style.display='none';    
         document.getElementById('g_id_kp').style.display='none';
         document.getElementById('g_responsible').style.display='none';
         document.getElementById('g_name_zakazchik').style.display='none';    
         document.getElementById('g_adres_postavki').style.display='block';     
       }
        else{
         document.getElementById('g_nomerKP').style.display='none'; 
         document.getElementById('g_dateKPs').style.display='none';
         document.getElementById('g_dateKPe').style.display='none';
         document.getElementById('g_inn').style.display='none';    
         document.getElementById('g_id_kp').style.display='none';
         document.getElementById('g_responsible').style.display='none';
         document.getElementById('g_name_zakazchik').style.display='none';    
         document.getElementById('g_adres_postavki').style.display='none';     
        }  
}

