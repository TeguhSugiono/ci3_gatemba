<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
    <div class="modal-dialog boxshadow" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customModalTwoLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formadd" class="form-horizontal" method="post" action="#">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Refference Code:</label>
                        <input type="text" class="form-control" id="reff_code" name="reff_code">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <input type="text" class="form-control" id="reff_description" name="reff_description">
                    </div>
                </form>
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-primary" id="btnsave" id="btnsave"><b><span class="icon-save2"></span>Save</b></button>
                <button class="btn btn-primary" id="btncancel" id="btncancel" data-dismiss="modal"><b><span class="icon-cancel"></span>Cancel</b></button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">    
    $('#btnsave').click(function() {
        url = '<?php echo site_url('master/refference/save') ?>';
        data = $('#formadd').serialize();
        pesan = 'JavaScript Save Error...';
        dataok = multi_ajax_proses(url, data, pesan);
        
        if(dataok.msg != 'Ya'){
            alert(dataok.pesan);
            return false;
        }
        alert(dataok.pesan);
        selectbaris = 0 ;        
        tbl_refference.page('first').draw(false);
        tbl_refference.ajax.reload(null, false);
        $('#modal_add').modal('hide');
    });    
</script>