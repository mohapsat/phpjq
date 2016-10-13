$(document).ready(function(){

  $('input#name-submit').on('click',function(){

    // var thisval = $(this).val();
    // console.log(thisval);
    // alert(thisval);

// step 1: get value typed in name
    var name = $('input#name').val();
    // alert(name);
// step 2: send to php file
    if($.trim(name) != '') {

        $.post('/p/name.php',{name: name}, function(data) {
              //place returned data into the div
              $('.name-data').text(data);
        });
    }
  })
});
