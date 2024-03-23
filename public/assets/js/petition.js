$(document).ready(function(){
    
    function hola(){
        console.log("esta porueba funciona");
    };

       
    $.ajax({
        method:'GET',
        url:"http://localhost:8000/api/users",
        success:function(response){
            buildTable(response['response']['users'], 'users');
        }
    });
        

    $.ajax({
        method:'GET',
        url:"http://localhost:8000/api/clients",
        success:function(response){
            buildTable(response, 'clients');
        }
    });

    function buildTable(data, id){
        var table = document.getElementById(id+'-table');

        for (var i=0; i < data.length; i++){
            var row = " ";
            
            if (id == 'clients') {
                // Rellena la tabla de clientes
                row ='<tr><td>'+ data[i].name +'</td><td>'+ data[i].age +'</td><td>'+ data[i].email +'</td><td><a href="/'+ id +'/'+ data[i].id +'"><i class="fa-regular fa-eye"></i></a></td><td><a href="/'+ id +'/'+ data[i].id +'/edit"><i class="fa-regular fa-pen-to-square"></i></a></td></tr>';
            }else{
                // Rellena la tabla de usuarios
                row ='<tr><td>'+ data[i].name +'</td><td>'+ data[i].email +'</td></tr>';
            }
                                                                                                                                                   
            table.innerHTML += row;
        }

    }

});