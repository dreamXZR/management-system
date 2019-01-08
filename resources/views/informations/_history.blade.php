<div class="flip-scroll">
    <table class="table table-bordered table-hover">
        <thead class="">
            <tr>
                
               {{--  <th class="text-center">编号</th> --}}
                <th class="text-center">现居住地址</th>
                <th class="text-center">替换时间</th>
                <th class="text-center" width="15%">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($historys as $history)
            <tr>
               {{--  <td align="center">{{$problem_table->number}}</td> --}}
                <td align="center">{{$history->present_address}}庭苑&nbsp;&nbsp;{{$history->building}}&nbsp;-&nbsp;{{$history->door}}&nbsp;-&nbsp;{{$history->no}}</td>
                <td align="center">{{$history->replace_time}}</td>
               

                <td align="center">
                    <a class="btn btn-xs btn-primary" href="{{ route('history.show', $history->id) }}">
                        <i class="glyphicon glyphicon-eye-open"></i> 
                    </a>
                </td>
                
                
                
            </tr>
            @endforeach           
        </tbody>
    </table>
    <div style="margin-top: 20px;">
        {!! $historys->render() !!}
    </div>
    
</div>