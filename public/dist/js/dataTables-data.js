/*DataTable Init*/

"use strict"; 

$(document).ready(function() {
	"use strict";
	
	$('#datable_1').DataTable();
    $('#datable_2').DataTable({ "lengthChange": false});
    
     var search = document.getElementsByClassName('submit');
         console.log(search);
} );
//
//var table = $('#example_wrapper').DataTable();
// var search = document.getElementsByClassName('submit');
//         console.log(search);
//          $('search').on('click', function () {
//table.columns().every( function () {
//    var that = this;
// 
//    $( 'input', this.footer() ).on( 'keyup', function () {
//       
//   
//        that
//            .search( this.value )
//            .draw();
//    
//    } );
//} 
//          
//        });