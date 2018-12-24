<table class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td>现居住地址地址:</td>
                <td>{{ $information->present_address }}</td>        
            </tr>
            <tr>
                <td>户籍性质:</td>
                <td>{{ $information->residence_status }}</td>        
            </tr>
            <tr>
                <td>房屋状态:</td>
                <td>{{ $information->house_status }}</td>        
            </tr>
            <tr>
                <td>房屋使用情况:</td>
                <td>{{ $information->house_people }}</td>        
            </tr>
            <tr>
                <td>住户情况:</td>
                <td>{{ $information->people }}</td>        
            </tr>
            <tr>
                <td>家庭状况:</td>
                <td>{{ $information->situation }}</td>        
            </tr>
            <tr>
                <td>备注:</td>
                <td>{{ $information->other }}</td>        
            </tr>                   
        </tbody>
    </table>
    <p></p>
    <div class="table-scrollable">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        户籍地址
                    </th>
                    
                    <th scope="col">
                        姓名
                    </th>
                    <th scope="col">
                        与户主关系
                    </th>
                    <th scope="col">
                        性别
                    </th>
                    <th scope="col">
                        民族
                    </th>
                    <th scope="col">
                        出生年月
                    </th>
                    <th scope="col">
                        文化程度
                    </th>
                    <th scope="col">
                        政治面貌
                    </th>
                    <th scope="col">
                        婚姻状况
                    </th>
                    <th scope="col">
                        身份类别
                    </th>
                    <th scope="col">
                        身份证号码
                    </th>
                    <th scope="col">
                        联系电话
                    </th>
                    <th scope="col">
                        有何特长
                    </th>
                    
                    <th scope="col">
                        工作单位及职务
                    </th>
                    
                    <th scope="col">
                        职位标签
                    </th>
                    <th scope="col">
                        备注
                    </th>

                </tr>
            </thead>
            <tbody>
            	@foreach($residents as $resident)
            		 <tr>
                        <td>
                            {{$resident->residence_address}}
                        </td>
                        <td>
                           {{$resident->name}}
                        </td>
                        <td>
                            {{$resident->relationship}}
                        </td>
                        <td>
                            {{$resident->sex}}
                        </td>
                        <td>
                            {{$resident->nation}}
                        </td>
                        <td>
                            {{$resident->birthday}}
                        </td>
                        <td>
                            {{$resident->culture}}
                        </td>
                        <td>
                            {{$resident->face}}
                        </td>
                        <td>
                            {{$resident->marriage}}
                        </td>
                        <td>
                            {{$resident->identity}}
                        </td>
                        <td>
                            {{$resident->id_number}}
                        </td>
                        <td>
                            {{$resident->phone}}
                        </td>
                        <td>
                            {{$resident->hobby}}
                        </td>
                        
                        <td>
                        	{{$resident->unit}}
                        </td>
                         
                        <td>
                        	{{$resident->tag}}
                        </td>
                        <td>
                        	{{$resident->other}}
                        </td>
                    </tr>
            	@endforeach
            </tbody>
        </table>
    </div>
    <p></p>
    <div class="table-scrollable">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    
                    <th scope="col">
                        残疾人姓名
                    </th>
                    <th scope="col">
                        残疾人证号
                    </th>
                    <th scope="col">
                        残疾人类别
                    </th>
                    <th scope="col">
                        残疾人等级
                    </th>

                </tr>
            </thead>
            <tbody>
            	@foreach($handicappeds as $handicapped)
            		<tr>
            			<td>{{$handicapped->name}}</td>
            		
            			<td>{{$handicapped->number}}</td>
            		
            			<td>{{$handicapped->type}}</td>
            		
            			<td>{{$handicapped->level}}</td>
            		</tr>
            	@endforeach
            </tbody>
        </table>
    </div>
    