<div class="flip-scroll">
    <table class="table table-bordered table-hover">
        <thead class="">
            <tr>
                
                <th class="text-center">编号</th>
                <th class="text-center">姓名</th>
                <th class="text-center">来电时间</th>
                <th class="text-center">联系电话</th>
                <th class="text-center">家庭住址</th>
                <th class="text-center">是否完成</th>
                <th class="text-center" width="15%">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($register_tables as $register_table)
            <tr>
                <td align="center">{{$register_table->number}}</td>
                <td align="center">{{$register_table->name}}</td>
                <td align="center">{{$register_table->call_time}}</td>
                <td align="center">{{$register_table->phone}}</td>
                <td align="center">{{$register_table->address}}</td>
                <td align="center">
                    
                        <label>
                            <input class="checkbox-slider slider-icon colored-blue" type="checkbox" @if($register_table->is_finish==1)checked=""@endif onclick="is_finish('{{$register_table->id}}')" id="checkbox_{{$register_table->id}}">
                            <span class="text"></span>
                        </label>
                   
                </td>

                <td align="center">
                    <a class="btn btn-xs btn-primary" href="{{ route('register_tables.show', $register_table->id) }}">
                        <i class="glyphicon glyphicon-eye-open"></i> 
                    </a>
                    
                    <a class="btn btn-xs btn-warning" href="{{ route('register_tables.edit', $register_table->id) }}">
                        <i class="glyphicon glyphicon-edit"></i> 
                    </a>
                    @can('del_info')
                    <form action="{{ route('register_tables.destroy', $register_table->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('是否删除该数据?');">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                    </form>
                     @endcan
                </td>
                
                
                
            </tr>
            @endforeach           
        </tbody>
    </table>
    <div style="margin-top: 20px;">
        {!! $register_tables->render() !!}
    </div>
    
</div>