@extends('layout.app')

@section('title', 'Profile')

@section('konten')
    <style>
        .form-control, .thumbnail {
            border-radius: 2px;
        }
        .btn-danger {
            background-color: #B73333;
        }

        /* File Upload */
        .fake-shadow {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
        .fileUpload {
            position: relative;
            overflow: hidden;
        }
        .fileUpload #logo-id  {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 33px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .img-preview {
            max-width: 100%;
        }

        .fileUpload #logo-id1  {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 33px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .img-preview1 {
            max-width: 100%;
        }
        .fileUpload #logo-id2  {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 33px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .img-preview2 {
            max-width: 100%;
        }
        .fileUpload #logo-id3  {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 33px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .img-preview3 {
            max-width: 100%;
        }
        .fileUpload #logo-id4  {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 33px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .img-preview4 {
            max-width: 100%;
        }
    </style>
    <div class="container">


        <form action="{{ route('pakaian.store') }}" method="post"   files="true" enctype="multipart/form-data" style="margin: 20px 0">
            <div class="form-group">
                <label for="nama">Nama Pakaian:</label>
                <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="desk">Deskripsi Pakaian</label>
                <textarea class="form-control" rows="5" id="comment" name="desk" placeholder="deskripsi pakaian"></textarea>
            </div>
            <div class="form-group">
                <label for="desksing">Deskripsi Singkat Pakaian</label>
                <input type="text" class="form-control" id="desksing" placeholder="deskripsi singkat" name="desksing">
            </div>
            <div class="form-group">
                <label for="harga">Harga Satuan</label>
                <input type="text" class="form-control" id="harga" placeholder="harga satuan" name="harga">
            </div>
            <div class="form-group">
                <label for="warna">Warna</label>
                <input type="text" class="form-control" id="warna" placeholder="warna" name="warna">
            </div>
            <div class="form-group">
                <label for="jlk">Jenis Kelamin</label>
                <select class="form-control" name="jlk" id="jlk">
                    <option></option>
                    <option value="cowok">Cowok</option>
                    <option value="cewek">Cewek</option>
                    <option value="unisex">UniSex</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sel1">Kategori:</label>
                <select class="form-control" id="sel1" name="kategori">
                    @foreach($category as $categorys)
                    <option value="{{$categorys->id}}">{{$categorys->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="panjang">Panjang</label>
                <input type="text" class="form-control" id="panjang" placeholder="panjang" name="panjang">
            </div>
            <div class="form-group">
                <label for="lebar">Lebar</label>
                <input type="text" class="form-control" id="lebar" placeholder="lebar" name="lebar">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" id="stok" placeholder="stok" name="stok">
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="main-img-preview">
                            <img class="thumbnail img-preview" src="http://pleasekillme.com/wp-content/themes/15zine/library/images/placeholders/placeholder-759x500.png" title="Preview Logo">
                        </div>
                        <div class="input-group">
                            <input id="fakeUploadLogo"  class="form-control fake-shadow" name="gambarUtama" placeholder="Choose File" disabled="disabled">
                            <div class="input-group-btn">
                                <div class="fileUpload btn btn-danger fake-shadow">
                                    <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                                    <input id="logo-id" name="logo1" type="file" class="attachment_upload">
                                </div>
                            </div>
                        </div>
                        <p class="help-block">* Gambar Produk Utama.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="main-img-preview">
                            <img class="thumbnail img-preview1" src="http://pleasekillme.com/wp-content/themes/15zine/library/images/placeholders/placeholder-759x500.png" title="Preview Logo">
                        </div>
                        <div class="input-group">
                            <input id="fakeUploadLogo1" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                            <div class="input-group-btn">
                                <div class="fileUpload btn btn-danger fake-shadow">
                                    <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                                    <input id="logo-id1" name="logo2" type="file" class="attachment_upload">
                                </div>
                            </div>
                        </div>
                        <p class="help-block">* Gambar kedua.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <div class="main-img-preview">
                            <img class="thumbnail img-preview2" src="http://pleasekillme.com/wp-content/themes/15zine/library/images/placeholders/placeholder-759x500.png" title="Preview Logo">
                        </div>
                        <div class="input-group">
                            <input id="fakeUploadLogo2" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                            <div class="input-group-btn">
                                <div class="fileUpload btn btn-danger fake-shadow">
                                    <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                                    <input id="logo-id2" name="logo3" type="file" class="attachment_upload">
                                </div>
                            </div>
                        </div>
                        <p class="help-block">* Gambar Ketiga.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <div class="main-img-preview">
                            <img class="thumbnail img-preview3" src="http://pleasekillme.com/wp-content/themes/15zine/library/images/placeholders/placeholder-759x500.png" title="Preview Logo">
                        </div>
                        <div class="input-group">
                            <input id="fakeUploadLogo3" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                            <div class="input-group-btn">
                                <div class="fileUpload btn btn-danger fake-shadow">
                                    <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                                    <input id="logo-id3" name="logo4" type="file" class="attachment_upload">
                                </div>
                            </div>
                        </div>
                        <p class="help-block">* Gambar Keempat.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <div class="main-img-preview">
                            <img class="thumbnail img-preview4" src="http://pleasekillme.com/wp-content/themes/15zine/library/images/placeholders/placeholder-759x500.png" title="Preview Logo">
                        </div>
                        <div class="input-group">
                            <input id="fakeUploadLogo4" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                            <div class="input-group-btn">
                                <div class="fileUpload btn btn-danger fake-shadow">
                                    <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                                    <input id="logo-id4" name="logo5" type="file" class="attachment_upload">
                                </div>
                            </div>
                        </div>
                        <p class="help-block">* Gambar Kelima.</p>
                    </div>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="submit" name="submit" value="Ajukan" class="btn btn-primary btn-block"/>
        </form>
    </div>
<script>
    $(document).ready(function() {
        var brand = document.getElementById('logo-id');
        brand.className = 'attachment_upload';
        brand.onchange = function() {
            document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo-id").change(function() {
            readURL(this);
        });
    });
</script>
<script>
    $(document).ready(function() {
        var brand = document.getElementById('logo-id2');
        brand.className = 'attachment_upload';
        brand.onchange = function() {
            document.getElementById('fakeUploadLogo2').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview2').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo-id2").change(function() {
            readURL(this);
        });
    });
</script>
    <script>
        $(document).ready(function() {
            var brand = document.getElementById('logo-id1');
            brand.className = 'attachment_upload';
            brand.onchange = function() {
                document.getElementById('fakeUploadLogo1').value = this.value.substring(12);
            };

            // Source: http://stackoverflow.com/a/4459419/6396981
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.img-preview1').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#logo-id1").change(function() {
                readURL(this);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var brand = document.getElementById('logo-id3');
            brand.className = 'attachment_upload';
            brand.onchange = function() {
                document.getElementById('fakeUploadLogo3').value = this.value.substring(12);
            };

            // Source: http://stackoverflow.com/a/4459419/6396981
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.img-preview3').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#logo-id3").change(function() {
                readURL(this);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var brand = document.getElementById('logo-id4');
            brand.className = 'attachment_upload';
            brand.onchange = function() {
                document.getElementById('fakeUploadLogo4').value = this.value.substring(12);
            };

            // Source: http://stackoverflow.com/a/4459419/6396981
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.img-preview4').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#logo-id4").change(function() {
                readURL(this);
            });
        });
    </script>

@endsection