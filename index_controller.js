$('#save').click(function () {
    save_user();
    //alert("You've clicked save button");
});
$('#reset').click(function () {
    alert("You've clicked reset button");
});



function save_user() {
    var name = $('#name').val();
    var nic = $('#nic').val();
    var contact = $('#contact').val();
    
    var dataArray = {action:'save_user', name:name, nic:nic, contact:contact}
    
    $.post('../models/index_model.php', dataArray, function(reply){
        
    });
}