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
                            <label for="username" class="col-sm-2 control-label no-padding-right">现居住地址:</label>
                             <div class="col-sm-6">
                                <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio"   v-model="present_address" value="陶然" class="colored-blue">
                                        <span class="text">陶然</span>
                                    </label>
                                </div>
                               <div class='radio' style="float: left;padding-right: 10px;">
                                    <label>
                                        <input type="radio" v-model="present_address" value="怡然" class="colored-blue">
                                        <span class="text">怡然</span>
                                    </label>
                                </div>
                                
                                
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                             <div class="col-sm-6">
                                <input class="form-control"  placeholder="" type="text" v-model="building" style="width: 70px;display: inline-block;margin-left: 20px;">楼&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-control"  placeholder="" type="text" v-model="door" style="width: 70px;display: inline-block;">门&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-control"  placeholder="" type="text" v-model="no" style="width: 70px;display: inline-block;">户
                                
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
                                <input class="form-control"  placeholder="" type="text" v-model="situation">
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
                                    
									<table class="table table-striped table-bordered table-hover">
				                        <thead>
				                            <tr>
				                                <th scope="col">
                                                    姓名
                                                </th>
                                                <th scope="col">
                                                    户主关系
                                                </th>
                                                <th scope="col">
                                                    民族
                                                </th>
                                                <th scope="col">
                                                    政治面貌
                                                </th>
                                                <th scope="col">
                                                    身份证号
                                                </th>
                                                 <th scope="col">
                                                    手机号
                                                </th>
                                                <th scope="col">
                                                    身份标签
                                                </th>
                                                <th scope="col">
                                                    备注
                                                </th>
                                                <th scope="col">
                                                    操作
                                                </th>
				                                {{-- <th class="text-center">姓名</th>
				                                <th class="text-center">身份证号</th>
				                                <th class="text-center" width="10%">操作</th> --}}
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
				                            <tr v-for='(item,index) in residents'>
				                                <td>
                                                    @{{item.name}}
                                                </td>
				                                <td>
                                                    @{{item.relationship}}
                                                </td>
                                                <td>
                                                    @{{item.nation}}
                                                </td>
                                                <td>
                                                    @{{item.face}}
                                                </td>
				                                <td>
                                                    @{{item.id_number}}
                                                </td>
                                                <td>
                                                    @{{item.phone}}
                                                </td>
                                                <td>
                                                    @{{item.tag}}
                                                </td>
                                                <td>
                                                    @{{item.other}}
                                                </td>
				                                <td>
				                                    
				                                    
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
                                    
									<table class="table table-striped table-bordered table-hover">
				                        <thead>
				                            <tr>
				                                <!-- <th class="text-center">ID</th> -->
				                                <th scope="col">
                                                    姓名
                                                </th>
				                                <th scope="col">
                                                    证号
                                                </th>
				                                <th scope="col">
                                                    类别
                                                </th>
				                                <th scope="col">
                                                    等级
                                                </th>
				                                <th scope="col">
                                                    操作
                                                </th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
				                            <tr v-for='(item,index) in handicappeds'>
				                                <td>
                                                    @{{item.name}}
                                                </td>
				                                
				                                <td >
                                                    @{{item.number}}
                                                </td>
				                                <td >
                                                    @{{item.type}}
                                                </td>
				                                <td>
                                                    @{{item.level}}
                                                </td>
				                                <td>
				                                    
				                                    
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
                                <button type="submit" class="btn btn-lg btn-primary" @click="add_infomation">保存信息</button>
                                
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
            present_address:'陶然',
            building:'',
            door:'',
            no:'',
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
                    if(this.resident.id_number){
                        //获得性别、出生年月
                        var info=this.id_number_format(this.resident.id_number);
                        //this.resident.sex=info[0];
                        this.resident.birthday=info[1];
                    }

                    if(this.resident.other_relationship){
                        this.resident.relationship=this.resident.other_relationship
                    }
                  	if(!this.resident.tag){
                    	this.resident.tag='无';
                    }
                    
                    this.residents.push(this.resident);
                    this.resident={}
                    $('#bb_close').click();
                    // console.log(this.residents);
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
                var edit_json=JSON.parse(JSON.stringify(this.residents[index]));
                
                edit_json.other_relationship=edit_json.relationship;
                
                this.resident=edit_json;
                this.resident_status=false;
                this.resident_index=index;
                $('#bb').click();
            },

            update_resident_info:function(){
                if(this.resident_validate(this.resident)){
                    if(this.resident.id_number){
                        var info=this.id_number_format(this.resident.id_number);
                        this.resident.birthday=info[1];
                    }
                    if(this.resident.other_relationship){
                        this.resident.relationship=this.resident.other_relationship
                    }
                  	if(!this.resident.tag){
                    	this.resident.tag='无';
                    }
                    
                    Vue.set(this.residents,this.resident_index,this.resident);
                    $('#bb_close').click();
                }else{
                    return false;
                }
                
            },

            add_infomation:function(){
                //验证
                if(this.present_address==''){
                    alert('请填写现居住地详细地址');
                    return false;
                }

                var data={
                     present_address:this.present_address,
                     building:this.building,
                     door:this.door,
                     no:this.no,
                     residence_status:this.residence_status,
                     house_people:this.house_people,
                     house_status:this.house_status.join(','),
                     people:this.people.join(','),
                     situation:this.situation,
                     other:this.other,
                     handicappeds:this.handicappeds,
                     residents:this.residents,
                     page:{{$page}},
                };
                $.ajax({
                    type:'POST',
                    url:"{{route('informations.store')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    
                    data:data,
                    success:function(res){
                        if(res.status){
                            window.location.href="{{env('APP_URL')}}" + '/informations/'+res.information_id+'?page='+res.page;
                        }
                    }
                })
            },

            //根据身份证号生成性别，出生日期
            id_number_format:function(idCard){
                let birthday='';
                let sex=0;

                if(idCard.length==15){
                    birthday = "19"+idCard.substr(6,6); 
                    sex=(idCard[14]%2 === 0)?'0':'1';
                }else{
                    birthday = idCard.substr(6,8);
                    sex=(idCard[16]%2 === 0)?'0':'1';
                }
                birthday = birthday.replace(/(.{4})(.{2})/,"$1-$2-"); 
                
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
                if(data.name && data.relationship  && data.sex && data.phone){
                  	var ph= /^((\+?86)|(\(\+86\)))?(13[012356789][0-9]{8}|15[012356789][0-9]{8}|18[02356789][0-9]{8}|147[0-9]{8}|1349[0-9]{7})$/;
                    var mb= /^([0-9]{3,4}-)?[0-9]{7,8}$/;
                    if(ph.test(data.phone) || mb.test(data.phone)){

                    }else {
                        alert("手机号码有误，请重填");
                        return false;
                    }
                    if(data.id_number && !/^[1-9]\d{5}(18|19|20)\d{2}((0[1-9])|(1[0-2]))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/.test(data.id_number)){
                        alert("身份证号有误，请重填");  
                        return false; 
                    }
                    return true;
                }else{
                    alert('请填写完整信息');
                    return false;
                }
            },

            relationship_radio:function(select){
                
                this.resident.other_relationship=select;
                
               
            }

		}
	})

</script>



@stop