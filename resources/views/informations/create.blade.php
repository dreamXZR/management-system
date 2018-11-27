@extends('layouts.app')
@section('content')
<div class="page-content" id="app">
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
                                        <li class="active">添加信息卡</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增证明</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                     @include('shared._errors')
                     
                        <div class="form-horizontal">
                   
                        
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
                                        <input type="radio"   v-model="residence_status" value="农业" class="colored-blue">
                                        <span class="text">农业</span>
                                    </label>
                                </div>
                               <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" v-model="residence_status" value="非农业" class="colored-blue">
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
                                        <input type="radio" v-model='house_people' value="业主" class="colored-blue" checked="">
                                        <span class="text">业主</span>
                                    </label>
                                </div>
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" v-model='house_people' value="租户"  class="colored-blue">
                                        <span class="text">租户</span>
                                    </label>
                                </div>
                               <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" v-model='house_people' value="空房"  class="colored-blue">
                                        <span class="text">空房</span>
                                    </label>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">房屋状态:</label>
                            <div class="col-sm-6">
                                @foreach($information->house_status_map as $home_status)
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="house_status" value="{{$home_status}}" class="colored-blue" >
                                        <span class="text" >{{$home_status}}</span>
                                    </label>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">住户情况:</label>
                            <div class="col-sm-6">
                                @foreach($information->people_map as $people)
                                <div class='checkbox' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="checkbox" v-model="people" value="{{$people}}"  class="colored-blue">
                                        <span class="text">{{$people}}</span>
                                    </label>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">家庭状况:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="name" required="" type="text" v-model="situation">
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">备注:</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="name" required="" type="text" v-model='other'>
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
                                <button type="submit" class="btn btn-default" @click="add_infomation">保存信息</button>
                                
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
	var app=new Vue({
		el:'#app',
		data:{
            residence_address:'',
            residence_status:'农业',
            house_people:'业主',
            house_status:[],
            people:[],
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
                if(this.handicapped_validate(this.handicapped)){
                    this.handicappeds.push(this.handicapped);
                    this.handicapped={};
                    $('#aa_close').click();
                }else{
                    return false;
                }
				
			},
			
			del_handicapped_info:function(index){
				
				let r=confirm("是否删除？");
				if(r==true){

					this.handicappeds.splice(index,1);
				}
			},

			edit_handicapped_info:function(index){
				this.handicapped=JSON.parse(JSON.stringify(this.handicappeds[index]));
				this.handicapped_status=false;
                this.handicapped_index=index;
				$('#aa').click();
			},

			update_handicapped_info:function(){
                if(this.handicapped_validate(this.handicapped)){
                    Vue.set(this.handicappeds,this.handicapped_index,this.handicapped);
                    $('#aa_close').click();
                }else{
                    return false;
                }
				
			},

            resident_info:function(){
                this.resident_status=true;
                this.resident={};
                $('#bb').click();
            },

            add_resident_info:function(){
                //验证
                if(this.resident_validate(this.resident)){
                    //获得性别、出生年月
                    var info=this.id_number_format(this.resident.id_number);
                    this.resident.sex=info[0];
                    this.resident.birthday=info[1];
                    this.residents.push(this.resident);
                    this.resident={}
                    $('#bb_close').click();
                    console.log(this.residents);
                }else{
                    return false;
                }
                
            },
            
            del_resident_info:function(index){
                
                let r=confirm("是否删除？");
                if(r==true){

                    this.residents.splice(index,1);
                }
            },

            edit_resident_info:function(index){
                this.resident=JSON.parse(JSON.stringify(this.residents[index]));
                this.resident_status=false;
                this.resident_index=index;
                $('#bb').click();
            },

            update_resident_info:function(){
                if(this.resident_validate(this.resident)){
                    var info=this.id_number_format(this.resident.id_number);
                    this.resident.sex=info[0];
                    this.resident.birthday=info[1];
                    Vue.set(this.residents,this.resident_index,this.resident);
                    $('#bb_close').click();
                }else{
                    return false;
                }
                
            },

            add_infomation:function(){
                //验证
                if(this.residence_address==''){
                    alert('请填写户籍所有地详细地址');
                    return false;
                }
                var data={
                     residence_address:this.residence_address,
                     residence_status:this.residence_status,
                     house_people:this.house_people,
                     house_status:this.house_status.join(','),
                     people:this.people.join(','),
                     situation:this.situation,
                     other:this.other,
                     handicappeds:this.handicappeds,
                     residents:this.residents
                };
                console.log(data)
                $.ajax({
                    type:'POST',
                    url:"{{route('informations.store')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    
                    data:data,
                    success:function(res){
                        console.log(res)
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
            },

            handicapped_validate:function(data){
                if(data.name && data.number && data.type && data.level){
                    return true;
                }else{
                    alert('请填写完整信息');
                    return false;
                }
            },

            resident_validate:function(data){
                if(data.name && data.relationship && data.present_address && data.id_number && data.nation && data.phone){
                    if(!/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199|(147))\d{8}$/.test(data.phone)){
                        alert("手机号码有误，请重填");  
                        return false; 
                    }
                    if(!/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/.test(data.id_number)){
                        alert("身份证号有误，请重填");  
                        return false; 
                    }
                    return true;
                }else{
                    alert('请填写完整信息');
                    return false;
                }
            }

		}
	})

</script>



@stop