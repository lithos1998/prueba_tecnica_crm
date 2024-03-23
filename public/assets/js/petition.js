$(document).ready(function(){
    
    $('#reload-users').click(function (e) { 
        e.preventDefault();
        $('.list-table tbody').empty();
        makePetition('http://localhost:8000/users', 'users');
    });


    $('#reload-clients').click(function (e) { 
        e.preventDefault();
        $('.list-table tbody').empty();
        makePetition('http://localhost:8000/clients', 'clients');
    });


    function makePetition(url, $table){
        $.ajax({
            method:'GET',
            url: url,
            dataType:'json',
            success:function(response){
                
                buildTable(response, $table);
            },
            error:function(response) {
                console.log('Error:', response)
            }
        });
    }


    function buildTable(data, id){
        var table = document.getElementById(id+'-table');
         
        // Recorre los datos traidos por JSON
        for (var i=0; i < data.length; i++){
            var row = " ";
            
            if (id == 'clients') {
                // Rellena la tabla de clientes
                row ='<tr>'
                row += '<td>'+ data[i].name +'</td>';
                row += '<td>'+ data[i].age +'</td>';
                row += '<td>'+ data[i].email +'</td>';
                row += '<td>'+ data[i].phone +'</td>';
                row += '<td>'+ data[i].status +'</td>';
                row += '<td><a href="/'+ id +'/'+ data[i].id +'"><i class="fa-regular fa-eye"></i></a><a href="/'+ id +'/'+ data[i].id +'/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>';
                row += '</tr>';
            }else{
                // Rellena la tabla de usuarios
                row ='<tr><td>'+ data[i].name +'</td><td>'+ data[i].email +'</td></tr>';
            }
            

            table.innerHTML += row;
        }
    }

    makePetition('http://localhost:8000/users', 'users');

    makePetition('http://localhost:8000/clients', 'clients');

});