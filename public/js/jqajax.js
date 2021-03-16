$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){

    // student view start
    function allStudentList(){
        $.ajax({
            url:"/student/list/",
            type:"GET",
            datatype:"json",
            success:function(response){
                console.log(response);
                var resp = "";
                for(let i = 0;i<response.length;i++){
                    resp  +="<tr>"+
                    "<td>"+ response[i].id +"</td>"+
                    "<td>"+ response[i].student_name +"</td>"+
                    "<td>"+ response[i].student_email +"</td>"+
                    "<td>"+ response[i].student_contact +"</td>"+
                    +"</tr>";
                }
                $('#tbody').html(resp);
               
                
                
            }
        });

    }
    allStudentList();

    // student view finish

    // student insertion start

    $('#addStudent').click(function(e){
        e.preventDefault();
        let student_name = $('#student_name').val();
        let student_email = $('#student_email').val();
        let student_contact = $('#student_contact').val();
        var student_information = {
            student_name:student_name,
            student_email:student_email,
            student_contact:student_contact
        };
        console.log(student_name+" "+student_email+" "+ student_contact);
        $.ajax({
            url:"/student/store/",
            type:"POST",
            data:student_information,
            success:function(response){
                console.log(response);

                allStudentList();
            }
        });
    });
    //student insertion end 


});