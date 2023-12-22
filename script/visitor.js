$("#appointmentType").change(function(){
    if($(this).val() == "student"){
        $("#add_info").removeClass("d-none");
        $("#stud_no").attr("required", "");
    }else{
        $("#add_info").addClass("d-none");
        $("#stud_no").removeAttr("required");
    }
})