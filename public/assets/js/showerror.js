function showError(field, message){
    if(!message){
        $("." + field + "_error")
            .removeClass("error-text")
            .text("");
    }else{
        $("." + field + "_error")
            .addClass("error-text")
            .text(message);
    }
}
