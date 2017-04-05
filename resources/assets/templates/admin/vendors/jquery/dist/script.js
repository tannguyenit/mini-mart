function isImage(e){switch(e=e.split(".").pop()){case"jpg":case"png":case"gif":case"bimap":case"jpeg":case"ico":return!0;default:return!1}return!1}function convertToBase64(e){if(e.files&&e.files[0])if(isImage(e.files[0].name)){var i=new FileReader;i.onload=function(i){$(e).parent().find("img").attr("src",i.target.result)},i.readAsDataURL(e.files[0])}else e=$(e),e.replaceWith(e.val("").clone(!0)),e.parent().find(".removefile").hide(),alert("vui lòng chọn 1 hình ảnh")}function test(e){e.files&&(convertToBase64(e),$(e).parent().find(".removefile").show())}$(document).ready(function(){$(".uploadimg .removefile").click(function(){var e=$(this).parent().find("input[type='file']");return e.replaceWith(e.val("").clone(!0)),$(this).parent().find("img").attr("src",$(this).parent().find("img").attr("data-img")),$(this).hide(),!1}),$(".uploadimg .removefile_detail").click(function(){if(window.confirm("Bạn chắc chắn muốn xóa")){var e=$(this).parent().find("input[type='file']");return e.replaceWith(e.val("").clone(!0)),$(this).parent().find("img").attr("src",$(this).parent().find("img").attr("data-img")),$(this).hide(),!1}return!1}),$(".uploadimg input[type='file']").on("change",function(e){e.preventDefault(),this.files&&(convertToBase64(this),$(this).parent().find(".removefile").show())})});
$(document).ready(function() {

 $.validator.addMethod("check_tendm", function(value, element) {
    //var result = false;
    $.get("/admin/cat/check_tendm",{namecat: value},function(data) {
        if (data == true) {
            result = false;
        } else {
            result = true;
        }
    }
    );
    return result;
}, "Danh mục đã tồn tại. Vui lòng nhập tên khác");
 $("#add_cat").validate({
    rules: {
        name: {
            required: true,
            check_tendm:true
        },
        name_slide:{
            required:true
        },
        hinhanh:{
            required:true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error')
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
    },
    messages: {
        name: {
            required: "<span class='validate'>Vui lòng nhập tên danh mục !</span>",
        },
        name_slide:{
            required:"<span class='validate'>Vui lòng nhập tên ảnh !</span>",
        },
        hinhanh:{
            required:"<span class='validate'>Vui lòng chọn ảnh !</span>",
        }

    }
});

});
// validate form cat
function validateFile() {
    if ($('#image').val()=='') {
        alert('Bạn phải chọn 1 ảnh');
        return false;
    }
}
$.ajaxSetup({
 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
// $('.edit').click(function(){
//     alert(1)
//     var id=$(this).parent().data('id');
//     var name=$(this).parent().data('name');
//     var _token=$('#_token').val();
//     $.ajax({
//         url:'/admin/'+name+'/edit',
//         type:'GET',
//         data:{id:id},
//         success:function(data){
//             $("#edit").html(data);
//             ajax_call();
//         }
//     })
// })
$('.edit_other').click(function(){
    var id=$(this).parent().data('id');
    var segment=$(this).parent().data('segment');
    var name=$(this).parent().data('name');
    var _token=$('#_token').val();
    $.ajax({
        url:'/admin/'+name+'/edit_other',
        type:'GET',
        data:{id:id,segment:segment},
        success:function(data){
            $("#edit").html(data);
            ajax_call();
        }
    })
})
function ajax_call() {
    $("#edit_cat").validate({
        rules: {
            name: {
                required: true,
               // check_tendm:true
           },
           username:{
            required:true,
        },
        fullname: {
            required:true,
        },
        address: {
            required:true,
        },
        email:{
            required:true,
            email:true
        },

    },
    highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error')
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
    },
    messages: {
        name: {
            required: "<span class='validate'>Vui lòng nhập tên danh mục !</span>",
        },
        username:{
            required:"<span class='validate'>Vui lòng nhập tên đầy đủ !</span>",
        },
        fullname:{
            required:'Vui lòng nhập fullname'
        },
        address: {
            required:'Vui lòng nhập địa chỉ'
        },
        email:{
            required:'Vui lòng nhập email',
            email:'Email chưa hợp lệ'
        },


    }
});
}

$(document).ready(function() {
    $('#example').DataTable( {
      "lengthMenu": [
      [10, 15, 20, -1],
      [10, 15, 20, "All"]
      ],
      "ordering": false,
      "language": {
        "lengthMenu": "Show _MENU_ ",
        "zeroRecords": "Không tìm thấy kết quả",
        "info": "Hiển thị _PAGE_ của _PAGES_ trang",
        "infoEmpty": "Trống",
        "infoFiltered": "(tìm kiếm từ  _MAX_ dòng)"
    },
    initComplete: function () {
        this.api().columns().every( function () {
            var column = this;
            var select = $('<select><option value="">All</option></select>')
            .appendTo( $(column.footer()).empty() )
            .on( 'change', function () {
                var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                    );

                column
                .search( val ? '^'+val+'$' : '', true, false )
                .draw();
            } );

            column.data().unique().sort().each( function ( d, j ) {
                select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
        } );
    }
} );
    $('#thongke').DataTable( {
      "lengthMenu": [
      [10, 15, 20, -1],
      [10, 15, 20, "All"]
      ],
      "ordering": false,
      "language": {
        "lengthMenu": "Show _MENU_ ",
        "zeroRecords": "Không tìm thấy kết quả",
        "info": "Hiển thị _PAGE_ của _PAGES_ trang",
        "infoEmpty": "Trống",
        "infoFiltered": "(tìm kiếm từ  _MAX_ dòng)"
    },
    dom: "lBfrtip",
    buttons: [{
        extend: "copy",
        className: "btn-sm"
    },
    {
        extend: "excel",
        className: "btn-sm",
        text: 'Save to Excel',
        exportOptions: {
            modifier: {
                page: 'current'
            }
        },
        customize: function (xlsx) {
            var sheet = xlsx.xl.worksheets['sheet1.xml'];
            var numrows = 2;
            var clR = $('row', sheet);

                //update Row
                clR.each(function () {
                    var attr = $(this).attr('r');
                    var ind = parseInt(attr);
                    ind = ind + numrows;
                    $(this).attr("r",ind);
                });

                // Create row before data
                $('row c ', sheet).each(function () {
                    var attr = $(this).attr('r');
                    var pre = attr.substring(0, 1);
                    var ind = parseInt(attr.substring(1, attr.length));
                    ind = ind + numrows;
                    $(this).attr("r", pre + ind);
                });

                function Addrow(index,data) {
                    msg='<row r="'+index+'">'
                    for(i=0;i<data.length;i++){
                        var key=data[i].key;
                        var value=data[i].value;
                        msg += '<c t="inlineStr" r="' + key + index + '">';
                        msg += '<is>';
                        msg +=  '<t>'+value+'</t>';
                        msg+=  '</is>';
                        msg+='</c>';
                    }
                    msg += '</row>';
                    return msg;
                }

                //insert
                var r1 = Addrow(1, [{ key: 'A', value: 'Trường Đại Học Quảng Nam' }, { key: 'B', value: ' Cộng hòa xã hội chủ nghĩa Việt Nam' }]);
                var r2 = Addrow(2, [{ key: 'A', value: 'QuangNam University' }, { key: 'B', value: ' Độc lập - Tụ do - Hạnh phúc' }]);
                var r3 = Addrow(3, [{ key: 'A', value: 'ssssss' }, { key: 'B', value: 'ssssssss' }]);

                sheet.childNodes[0].childNodes[1].innerHTML = r1 + r2+ r3+ sheet.childNodes[0].childNodes[1].innerHTML;
            },
        },
        {
            extend: "excel",
            className: "btn-sm",
            text: 'Save All to Excel',
        },  ],
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value="">All</option></select>')
                .appendTo( $(column.footer()).empty() )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                        );

                    column
                    .search( val ? '^'+val+'$' : '', true, false )
                    .draw();
                } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );

// end datetimpiker and dataTable
//  // autoNumbernic
$(".gia").autoNumeric('init', {
    aSep: '.',
    aDec: ',',
    aForm: true,
    vMax: '99999999999',
    vMin: '-99999999999'
});
// end autonumber

setTimeout(function() {
    $("#message").fadeOut(300);
}, 5000)

function message() {
 var message = $("#editor").html()
 $("#noidungmail").val(message)
}
