    </div>
    <div class="clearfix" style="background: #f7f7f7 none repeat scroll 0 0;"></div>
    <div id="chatonline"></div>
</div>
<footer>
    <div class="pull-right">
        Quản lý website bán hàng trực tuyến code by <a href="https://fb.com/tannguyen1995">Tân Nguyễn</a>
    </div>
    <div class="clearfix"></div>
</footer>
</div>
</div>
<script src="{{ asset('templates/admin/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/vendors/jquery/dist/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src='{{ asset('templates/admin/vendors/js/autoNumeric.js') }}' type="text/javascript"></script>
<script src="{{ asset('templates/admin/build/js/custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/vendors/jquery/dist/mCustomScrollbar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/vendors/jquery/dist/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/build/js/jquery.filer.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/build/js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('templates/admin/build/js/dropzone.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    function icon_change() {
        if($('#cat_option').val()==0){
            $('#icon_id').css('display','block')
        }else{
            $('#icon_id').css('display','none')
        }
    }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function(){
        ckfinder('content');
    });
    var arImage = JSON.parse($('#arImage').attr('data-array'));
    var myDropzone = new Dropzone("#drop", {
        init: function () {
            for (var i = 1; i < arImage.length ; i++) {
                var mockFile = { name: arImage[i].images, size: arImage[i].size };
                this.options.addedfile.call(this, mockFile);
                this.options.thumbnail.call(this, mockFile, '/storage/'+arImage[i].images);
                mockFile.previewElement.classList.add('dz-success');
                mockFile.previewElement.classList.add('dz-complete');
                mockFile.previewElement.id=arImage[i].images
            }

        },

    });
</script>
<script type="text/javascript">
    $('#datatable').dataTable();
    $("#thongbao").delay(3000).slideUp();
    function xoa(msg) {
        if (window.confirm(msg)) {
            return true;
        }
        return false;
    }
</script>
</body>
</html>
