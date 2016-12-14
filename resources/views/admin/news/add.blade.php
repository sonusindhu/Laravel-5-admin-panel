@extends('layouts.admin')

@section('content')

<div class="">

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Add Category</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{URL::to('/admin/news/postadd')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                @foreach ($errors->all() as $error)
                                <p class="error">{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="category_id">
                                    <?php
                                    foreach($categories as $category){
                                        echo '<option value="'.$category->id.'">'.$category->name.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" required="required" name="title" class="form-control col-md-7 col-xs-12" value="{{old('title')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">slugs <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="last-name" name="slug" required="required" class="form-control col-md-7 col-xs-12" value="{{old('slug')}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea rows="5" class="form-control col-md-7 col-xs-12" id="description" name="description">{{old('description')}}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Image <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="image" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="status">
                                    <option value="1">Publish</option>
                                    <option value="0">Un-Publish</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Set Featured</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="status">
                                    <option value="0">No</option>
                                    <option value="1" >Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <!--<button type="submit" class="btn btn-primary">Cancel</button>-->
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>


@stop