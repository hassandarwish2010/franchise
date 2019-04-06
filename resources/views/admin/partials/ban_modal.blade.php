<div id="banModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
    <div class="modal-dialog" style="margin-top:50px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">تنبيه !!</h4> </div>
            <div class="modal-body">
                <h4>تنبيه !!</h4>
                <p> هل انت متأكد انك تريد الغاء التفعيل ؟ </p>
            </div>
            <div class="modal-footer">
                <form action="" id="ban_modal" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success waves-effect">تاكيد</button>
                </form>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">الغاء</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
