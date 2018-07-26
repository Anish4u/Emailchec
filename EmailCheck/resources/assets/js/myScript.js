$(document).ready(function () {


     $('.select2').select2({
        tags: true,
        dataType: 'json'

    });
    $('#GSTNList').DataTable();
});

$(document).ready(function () {
    $('#userTable').DataTable();
});
ClassicEditor.create( document.querySelector( '#editor' ) )
.catch( error => {
  console.error( error );
} );
