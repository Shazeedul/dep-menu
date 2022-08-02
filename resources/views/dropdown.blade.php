<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Dependent AJAX Dropdown Tutorial</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h2 class="mb-4">Laravel AJAX Dependent Country State City Dropdown Example</h2>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <select  id="division-dd" name="division" class="form-control">
                            <option value="">Select Country</option>
                            @foreach ($divisions as $data)
                            <option value="{{$data->id}}">
                                {{$data->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <select id="district-dd" name="district" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="upazila-dd" name="upazila" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div>
                        <input type="file" name="file" id="file">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#division-dd').on('change', function () {
                var idDivision = this.value;
                $("#district-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-districts')}}",
                    type: "POST",
                    data: {
                        division_id: idDivision,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#district-dd').html('<option value="">Select District</option>');
                        $.each(result.districts, function (key, value) {
                            $("#district-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#upazila-dd').html('<option value="">Select Upazila</option>');
                    }
                });
            });
            $('#district-dd').on('change', function () {
                var idDistrict = this.value;
                $("#upazila-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-upazilas')}}",
                    type: "POST",
                    data: {
                        district_id: idDistrict,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#upazila-dd').html('<option value="">Select Upazila</option>');
                        $.each(res.upazilas, function (key, value) {
                            $("#upazila-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>