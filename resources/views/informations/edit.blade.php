@extends('layouts.app')
@section('content')
<div class="page-content" id="vue">
@include('informations._add_handicapped_info')
@include('informations._add_resident_info')
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="{{route('index')}}">系统</a>
                    </li>
                                        <li>
                        <a href="{{route('informations.index')}}">信息卡列表</a>
                    </li>
                                        <li class="active">更改信息卡</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改证明</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                     @include('shared._errors')
                     
                        <div class="form-horizontal">
                   
                        
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">现居住地详细地址:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder=""  required="" type="text" v-model.trim='present_address'>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">户籍所有地详细地址:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder=""  required="" type="text" v-model.trim='residence_address'>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">户籍性质:</label>
                            <div class="col-sm-6">
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio"   v-model="residence_status" value="1" checked="">
                                        <span class="text">农业</span>
                                    </label>
                                </div>
                               <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" v-model="residence_status" value="2">
                                        <span class="text">非农业</span>
                                    </label>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">房屋使用人:</label>
                            <div class="col-sm-6">
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" v-model='type1' value="1" checked="">
                                        <span class="text">业主</span>
                                    </label>
                                </div>
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" v-model='type1' value="2"  >
                                        <span class="text">租户</span>
                                    </label>
                                </div>
                               <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" v-model='type1' value="3"  >
                                        <span class="text">空房</span>
                                    </label>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">房屋状态:</label>
                            <div class="col-sm-6">
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type2" value="1" class="colored-blue" >
                                        <span class="text" >户在</span>
                                    </label>
                                </div>
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type2" value="2"  class="colored-blue" >
                                        <span class="text" >户不在</span>
                                    </label>
                                </div>
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type2" value="3"  class="colored-blue" >
                                        <span class="text" >人在</span>
                                    </label>
                                </div>
                               <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type2" value="4"class="colored-blue" >
                                        <span class="text" >人不在</span>
                                    </label>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">住户情况:</label>
                            <div class="col-sm-6">
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type3" value="1"  class="colored-blue">
                                        <span class="text">老人空巢</span>
                                    </label>
                                </div>
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type3" value="2"   class="colored-blue">
                                        <span class="text">独居</span>
                                    </label>
                                </div>
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type3" value="3"   class="colored-blue">
                                        <span class="text">复退军人</span>
                                    </label>
                                </div>
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type3" value="4"   class="colored-blue">
                                        <span class="text">残疾人</span>
                                    </label>
                                </div>
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type3" value="5"   class="colored-blue">
                                        <span class="text">侨属</span>
                                    </label>
                                </div>
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type3" value="6"   class="colored-blue">
                                        <span class="text">低保户口</span>
                                    </label>
                                </div>
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="type3" value="7"   class="colored-blue">
                                        <span class="text">特困</span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">家庭状况:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder=""  required="" type="text" v-model="situation">
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">备注:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder=""  required="" type="text" v-model="other">
                            </div>
                            
                        </div>
                        <div class="widget" style="width: 90%;margin: 0 auto;">
                                <div class="widget-header ">
                                    <span class="widget-caption">居民信息</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="widget-body" style="display: block;">
                                    <div>
                                       <div @click='resident_info()' class="btn btn-sm btn-azure btn-addon">
                                        <i class="fa fa-plus"></i>  新增
                                       
                                    </div>
                                    </div>
                                    
									<table class="table table-bordered table-hover">
				                        <thead class="">
				                            <tr>
				                                <!-- <th class="text-center">ID</th> -->
				                                <th class="text-center">姓名</th>
				                                <th class="text-center">身份证号</th>
				                                <th class="text-center" width="10%">操作</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
				                            <tr v-for='(item,index) in residents'>
				                                <td align="center">@{{item.name}}</td>
				                                
				                                <td align="center">@{{item.id_number}}</td>
				                                <td align="center">
				                                    
				                                    
				                                   <span class="btn btn-xs btn-warning" 
                                                    @click="edit_resident_info(index)">
                                                        <i class="glyphicon glyphicon-edit"></i> 
                                                    </span>
                                                    <span class="btn btn-xs btn-danger" @click="del_resident_info(index)">
                                                        <i class="glyphicon glyphicon-trash"></i> 
                                                    </span>
				                                </td>
				                                
				                                
				                                
				                            </tr>
				                                   
				                        </tbody>
				                    </table>
                                </div>
                        </div>
                        <div class="widget" style="width: 90%;margin: 15px auto;">
                                <div class="widget-header ">
                                    <span class="widget-caption">残疾人信息</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="widget-body" style="display: block;">
                                    <div @click='handicapped_info()' class="btn btn-sm btn-azure btn-addon">
                                        <i class="fa fa-plus"></i>  新增
                                       
                                    </div>
                                    
									<table class="table table-bordered table-hover">
				                        <thead class="">
				                            <tr>
				                                <!-- <th class="text-center">ID</th> -->
				                                <th class="text-center">姓名</th>
				                                <th class="text-center">证号</th>
				                                <th class="text-center">类别</th>
				                                <th class="text-center">等级</th>
				                                <th class="text-center" width="10%">操作</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
				                            <tr v-for='(item,index) in handicappeds'>
				                                <td align="center">@{{item.name}}</td>
				                                
				                                <td align="center">@{{item.number}}</td>
				                                <td align="center">@{{item.type}}</td>
				                                <td align="center">@{{item.level}}</td>
				                                <td align="center">
				                                    
				                                    
				                                    <span class="btn btn-xs btn-warning" 
				                                    @click="edit_handicapped_info(index)">
				                                        <i class="glyphicon glyphicon-edit"></i> 
				                                    </span>
				                                    <span class="btn btn-xs btn-danger" @click="del_handicapped_info(index)">
				                                        <i class="glyphicon glyphicon-trash"></i> 
				                                    </span>

				                                    
				                                </td>
				                                
				                                
				                                
				                            </tr>
				                                   
				                        </tbody>
				                    </table>
                                </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" @click="edit_infomation">保存信息</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script type="text/javascript">
	var vm=new Vue({
        el:'#vue',
        data:{
            present_address:'',
            residence_address:'',
            residence_status:'',
            type1:'',
            type2:[],
            type3:[],
            situation:'',
            other:'',

            handicappeds:[],
            handicapped:{},
            handicapped_status:true,
            handicapped_index:'',
            residents:[],
            resident:{},
            resident_status:true,
            resident_index:'',
        },
        methods:{
            handicapped_info:function(){
                this.handicapped_status=true;
                this.handicapped={};
                $('#aa').click();

            },
            
            add_handicapped_info:function(){
                this.handicappeds.push(this.handicapped);
                this.handicapped={};
                $('#aa_close').click();
            },
            
            del_handicapped_info:function(index){
                var that=this
                let r=confirm("是否删除？");
                if(r==true){
                    if(id=this.handicappeds[index].id){
                        $.ajax({
                            type:"DELETE",
                            url:"/handicappeds/"+id,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success:function(res){
                                if(res.status){
                                   that.handicappeds.splice(index,1); 
                                }
                                
                            }
                        })
                    }else{
                        this.handicappeds.splice(index,1); 
                    }
                }
                
                    
            },

            edit_handicapped_info:function(index){
                this.handicapped=this.handicappeds[index];
                this.handicapped_status=false;
                // this.handicapped_index=index;
                $('#aa').click();
            },

            update_handicapped_info:function(){
                //验证
                this.handicappeds[this.handicapped_index]=this.handicapped;
                $('#aa_close').click();
            },

            resident_info:function(){
                this.resident_status=true;
                this.resident={};
                $('#bb').click();
            },

            add_resident_info:function(){
                //验证
                //获得性别、出生年月
                var info=this.id_number_format(this.resident.id_number);
                this.resident.sex=info[0];
                this.resident.birthday=info[1];
                this.residents.push(this.resident);
                this.resident={}
                $('#bb_close').click();
            },
            
            del_resident_info:function(index){
                let that=this
                let r=confirm("是否删除？");
                if(r==true){
                    if(id=this.residents[index].id){
                        $.ajax({
                            type:"DELETE",
                            url:"/residents/"+id,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success:function(res){
                                if(res.status){
                                   that.residents.splice(index,1);
                                }
                                
                            }
                        })
                    }else{
                        this.residents.splice(index,1);
                    }
                    
                }
            },

            edit_resident_info:function(index){
                this.resident=this.residents[index];
                this.resident_status=false;
                this.resident_index=index;
                $('#bb').click();
            },

            update_resident_info:function(){
                //验证
                this.residents[this.resident_index]=this.resident
                $('#bb_close').click();
            },

            edit_infomation:function(){
                //验证
                var data={
                     present_address:this.present_address,
                     residence_address:this.residence_address,
                     residence_status:this.residence_status,
                     type1:this.type1,
                     type2:this.type2.join(','),
                     type3:this.type3.join(','),
                     situation:this.situation,
                     other:this.other,
                     handicappeds:this.handicappeds,
                     residents:this.residents
                };
                
                $.ajax({
                    type:'PUT',
                    url:"{{route('informations.update',$id)}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    
                    data:data,
                    success:function(res){

                        if(res.status){
                            window.location.href="{{route('informations.index')}}";
                        }
                    }
                })
            },

            //根据身份证号生成性别，出生日期
            id_number_format:function(idCard){
                let birthday='';
                let sex=0;
                if(idCard.length==15){
                    birthday=`19${idCard.substring(6,8)}-${idCard.substring(9,10)}-${idCard.substring(11,12)}`;
                    sex=(idCard[14]%2 === 0)?'0':'1';
                }else{
                    birthday=`${idCard.substring(6,10)}-${idCard.substring(11,12)}-${idCard.substring(13,14)}`;
                    sex=(idCard[16]%2 === 0)?'0':'1';
                }

                return [sex,birthday];
            }
        },
        
        
        created:function(){
            var that=this;
            $.ajax({
                type:'GET',
                url:"{{route('getInformation',$id)}}",
                success:function(res){
                    let info=res.information;
                    that.present_address=info.present_address;
                    that.residence_address=info.residence_address;
                    that.residence_status=info.residence_status;
                    that.type1=info.type1;
                    
                    that.type2=info.type2.split(',');
                    that.type3=info.type3.split(',');
                    that.situation=info.situation;
                    that.other=info.other,
                    
                    that.handicappeds=res.handicappeds;
                    that.residents=res.residents;
                }
            })
        },

    })
</script>
@stop