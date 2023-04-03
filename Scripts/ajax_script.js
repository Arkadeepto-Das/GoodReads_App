$('#showData').on('click',function(e){
  $.ajax({    
    type: "GET",
    url: "fetch_books.php",             
    dataType: "html",                  
    success: function(data){                    
      $("#table").html(data); 
    }
  });
});