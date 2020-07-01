<script>
$(document).ready(function () {
$('.edit-announce').on('click', function(){
$('#edit-announce').modal('show');

$div = $(this).closest('div');
var data = $div.children('p').map(function(){
return $(this).text();
}).get();

console.log(data);
$('#id').val(data[0]);
$('#title').val(data[1]);
$('#description').val(data[2]);
$('#date').val(data[3]);
$('#message').val(data[4]);
});

$('#edit-announceform').on('submit', function(e){
e.preventDefault();
var id = $('#id').val();

$.ajax({

headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
type: "patch",
url: "/announcements/"+id,
data: $('#edit-announceform').serialize(),  
success: function (response) {
console.log(response);
$('#edit-announce').modal('hide');


},
error: function(error){
console.log(error);
}
});
});


});
</script>
