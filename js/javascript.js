$( function() {
  // sortable items
  $( "#sortable1, #sortable2, #sortable3" ).sortable({
    connectWith: ".connectedSortable"
  }).disableSelection();

// click button to show edit panel
  var buttonToggle = $(".button-toggle");
  var addItem = $(".add-item");

  $(buttonToggle).click(function(){
    $(this).siblings(".new-item-panel").toggle("slow");
      // $(this).css("transform", "rotate(135deg)");
  });



  // this also works
  // $(this).parent().children(".new-item-panel").toggle("slow");

  // click add button to add new item
  $(addItem).on("click",function(e) {

    // these variables need to be included in the function, because it is triggerred by clicking the Add button.
    var newItemTitle = $(this).siblings(".input-title");
    var newItemContent = $(this).siblings(".textarea-content");

      if(newItemTitle !== "" && newItemContent !== ""){
        var itemTitle = $(newItemTitle).val();
        var itemContent = $(newItemContent).val();
        var itemTemplate = "<li class='ui-state-default list-item'><div class='item-container'><div class='color-circle'></div><h3>" + itemTitle + "</h3></span></span><p>" + itemContent + "</p><hr><img src='img/profile-img.png' class='user-img' alt='profile photo'><span class='lnr lnr-trash'></span></div></li>";
        
        // target its parent first and narrow down to children element
        $(this).closest(".column").children("ul").prepend(itemTemplate);
        // reset form
        $('.new-item-panel').trigger("reset");
      }  
  });

// click trash icon to remove item
  $("#sortable1,#sortable2, #sortable3").on('click', 'span.lnr-trash', function(){
        $(this).parent().remove();     
  });



});