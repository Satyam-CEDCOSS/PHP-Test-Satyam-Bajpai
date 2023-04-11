function display(){
    let date = $("#pick_date").val()
    $.ajax({
        type: "POST",
        data: {"date":date},
        url: "/display.php",
        dataType: "text",
      }).done(function (result){
        // console.log(result);
          $("#add_todo").html(result)
    });
}
display()

$(document).ready(function(){
    $(document).on('click','#add',function(){
        let val = $("#add_input").val()
        let date = $("#pick_date").val()
        $.ajax({
            type: "POST",
            url: "/index_sql.php",
            data: {"text":val,"date":date},
            dataType: "text",
          }).done(function (result){
              console.log(result)
              display()
        });      
    })    
})    



// Dynamic Display 
function active(){
    $.ajax({
        type: "POST",
        url: "/dynamic_display.php",
        data: {"operation":"todo"},
        dataType: "text",
      }).done(function (result){
        $("#add_todo").html(result)
    });
}
function completed(){
    $.ajax({
        type: "POST",
        url: "/dynamic_display.php",
        data: {"operation":"completed"},
        dataType: "text",
      }).done(function (result){
        $("#add_todo").html(result)
    });
}
function clear_complete(){
    $.ajax({
        type: "POST",
        url: "/dynamic_display.php",
        data: {"operation":"clear"},
        dataType: "text",
      }).done(function (result){
          console.log(result)
          display()
    });
}

// Operation Functions 
function deletes(val){
    $.ajax({
        type: "POST",
        url: "/operation.php",
        data: {"operation":"delete","id":val},
        dataType: "text",
      }).done(function (result){
          console.log(result)
          display()
    });
}
function check(val){
    $.ajax({
        type: "POST",
        url: "/operation.php",
        data: {"operation":"check","id":val},
        dataType: "text",
      }).done(function (result){
          console.log(result)
          display()
    });
}
function uncheck(val){
    $.ajax({
        type: "POST",
        url: "/operation.php",
        data: {"operation":"uncheck","id":val},
        dataType: "text",
      }).done(function (result){
          console.log(result)
          display()
    });
}

// function date() {
    
// }