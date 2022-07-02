<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function (){

            $(document).on('click','.remove-btn', function () {
                // alert(111);
                $(this).closest('.main-form').remove();
            })
            $(document).on('click','.add-more-form', function () {
                // alert(111);
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-4">\
                                            <label for="fullName"> Full Name </label>\
                                            <input type="text" class="form-control" name="fullName[]" id="fullName" placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-4">\
                                            <label for="phone"> Phone No. </label>\
                                            <input type="text" class="form-control" name="phone[]" id="phone" maxlength="10" placeholder="Enter Phone">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-4">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger"> <i class="bi bi-person-x-fill"></i> </button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            })
        })
    </script>
</body>
</html>