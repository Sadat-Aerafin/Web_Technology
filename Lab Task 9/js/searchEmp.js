// src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
function search_data(){
        var search=jQuery('#search').val();
            jQuery.ajax({
            method:'post',
            url:'model/searchEmpData.php',
            data:'search='+search,
            success:function(data){
                jQuery('#search_table').html(data);

            }
        });    
        }