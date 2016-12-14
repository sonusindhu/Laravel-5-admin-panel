@extends('layouts.admin')

@section('content')

<div class="">

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Featured News List</h2>
                    <div class="title_right">
                        <div class="col-md-2 col-sm-2 col-xs-12 form-group pull-right">
                          <div class="input-group">
                              <a href="{{URL::to('admin/news/add')}}" class="btn btn-danger pull-right" href="">Add News</a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            if($data){
                                foreach($data as $key=>$value){
                                    ?>
                                        <tr>
                                            <td><img src="<?php echo url('upload/'.$value->image); ?>" width="100"></td>
                                            <td><?php echo $value->title; ?></td>
                                            <td><?php echo $value->slug; ?></td>
                                            <td><?php echo $value->category->name; ?></td>
                                            <td><?php echo $value->created_at; ?></td>
                                            <td><?php
                                            if($value->status){
                                                ?>
                                                <button type="button" class="btn btn-success btn-circle"><i class="glyphicon glyphicon-ok"></i></button>
                                                
                                                <?php
                                            }else{
                                                ?>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-remove"></i></button>
                                                <?php
                                            }
                                            ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo url('admin/news/edit/'.$value->id);?>" class="btn btn-primary btn-xs">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </a>
                                                
                                                <a href="<?php echo url('admin/news/delete/'.$value->id);?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>



@stop