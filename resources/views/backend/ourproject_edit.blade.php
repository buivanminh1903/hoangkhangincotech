@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/backend">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Our Project</li>
            <li class="breadcrumb-item active" aria-current="page">Edit  Our Project</li>
        </ol>
    </nav>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit ProJect</h5>
                        <small class="text-muted float-end">Hoàng Khang IncoTech</small>
                    </div>
                    <div class="card-body">
                        <form action="{{url('update-project/'.$our_project->id)}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @method("PUT")
                            <input type="hidden" name="id" id="id" value="" id="id"/>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name"
                                           placeholder="" name="titles" value="{{$our_project->titles}}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Description</label>
                                <div class="col-sm-10">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="basic-default-company"
                                        placeholder=""
                                        name="descriptions"
                                        value="{{$our_project->descriptions}}"
                                    />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Image</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <td><img src="{{ asset('image/uploads/ourproject/' . $our_project->images) }}" Height="100"  class="img img-responsive" /></td>

                                        <td>

                                            <input class="form-control" name="images" type="file" id="photo">
                                            @error('images')
                                            <span style="color :red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <span class="input-group-text" id="basic-default-email2">.png</span>
                                    </div>
                                    <div class="form-text">Kích thước ảnh tối đa 100Mb</div>
                                </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Categorys</label>
                                <div class="col-sm-10">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="basic-default-company"
                                        placeholder=""
                                        name="categorys"
                                        value="{{$our_project->categorys}}"
                                    />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-danger" value="Cập nhật Dịch Vụ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
