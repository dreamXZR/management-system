<?php

namespace App\Exports;

use App\Models\Resident;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ResidentsExport implements FromQuery,Responsable,WithMapping, WithHeadings, WithTitle, ShouldAutoSize
{
	  use Exportable;

	  private $fileName='居民信息.xlsx';

    protected $select;
   
    public function withSelect($select)
    {
      $this->select=$select;
      return $this;
    }
    
    public function query()
    {
      $build=Resident::query();
      $select=json_decode($this->select);
      
      foreach ($select as $k => $v) {
        switch ($k) {
          case 'name':
            if($v){
              $build->where('name','like','%'.$v.'%');
            }  
          break;
          case 'id_number':
            if($v){
              $build->where('id_number',$v);
            }
          break;
          case 'phone':
            if($v){
                $build->where('phone',$v);
            }
            break;
          case 'present_address':
            if($v){
              $build->where('present_address',$v);
            }
          break;
          case 'nation':
            if($v){
              $build->whereIn('nation',$v);
            }
          break;
          case 'culture':
            if($v){
              $build->whereIn('culture',$v);
            }
          break;
          case 'face':
            if($v){
              $build->whereIn('face',$v);
            }
          break;
          case 'marriage':
            if($v){
              $build->whereIn('marriage',$v);
            }
          break;
          case 'identity':
            if($v){
              $build->whereIn('identity',$v);
            }
          break;
          case 'time_start':

            if($select->time_start && $select->time_end){
              $build->whereBetween('birthday',[$select->time_start,$select->time_end]);
            }
          break;
          case 'relationship':
              if($v){
                  $build->where('relationship',$v);
              }
              break;
        }
      }
        $flied = [
            'residents.id',
            'residents.information_id',
            'residents.name',
            'information.present_address',
            'information.building',
            'information.door',
            'information.no',
            'residents.residence_address',
            'information.residence_status',
            'residents.relationship',
            'residents.sex',
            'residents.nation',
            'residents.birthday',
            'residents.culture',
            'residents.face',
            'residents.marriage',
            'residents.identity',
            'residents.id_number',
            'residents.phone',
            'residents.hobby',
            'residents.unit',
            'residents.tag',
            'residents.other',
        ];
      $build->where('is_replace',0)->join('information','information.id','=','residents.information_id')->orderBy('information.present_address','desc')->orderBy('information.building')->orderBy('information.door')->orderBy('information.no')->select($flied);
    	return $build;
    }

    public function map($resident): array
    {

        return [
           $resident->name,
           ' '.$resident->id_number,
           $resident->information->present_address.'庭苑  '.$resident->information->building.' - '.$resident->information->door.' - '.$resident->information->no,
            $resident->residence_address,
            $resident->information->residence_status,
           $resident->sex,
           $resident->nation,
           $resident->birthday,
           $resident->relationship,
           $resident->culture,
           $resident->face,
           $resident->marriage,
           $resident->identity,
           $resident->unit,
           $resident->phone,
           $resident->hobby,
            $resident->information->other,
           $resident->other,
        ];
    }

    

    public function headings(): array
    {
        return [
            '姓名',
            '身份证号',
            '现居住地址',
            '户籍所在地',
            '户籍性质',
            '性别',
            '民族',
            '生日',
            '与户主关系',
            '文化程度',
            '政治面貌',
            '婚姻状况',
            '身份类别',
            '工作单位',
            '联系电话',
            '特长',
            '户备注',
            '人备注'

        ];
    }

    public function title(): string
    {
        return '居民信息';
    }
}
