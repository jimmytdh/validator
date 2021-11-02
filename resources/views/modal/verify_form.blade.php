<div class="modal" tabindex="-1" role="dialog" id="verify">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="display: block;">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Verify Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('verify') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" required>
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" placeholder="Birthdate" name="birthdate" required>
                        </div>
                        <button type="submit" class="btn btn-block btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
