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
              $build->where('name',$v);
            }  
          break;
          case 'id_number':
            if($v){
              $build->where('id_number',$v);
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
            if($select['time_start'] && $select['time_end']){
              $build->whereBetween('birthday',[$select['time_start'],$select['time_end']]);
            }
          break;
        }
      }
      $build->where('is_replace',0);
    	return $build;
    }

    public function map($resident): array
    {
        return [
           $resident->name,
           $resident->id_number,
           $resident->present_address,
           $resident->sex,
           $resident->nation,
           $resident->birthday,
           $resident->culture,
           $resident->face,
           $resident->marriage,
           $resident->identity,
           $resident->unit,
           $resident->phone,
           $resident->hobby,
           $resident->other
        ];
    }

    public function headings(): array
    {
        return [
            '姓名',
            '身份证号',
            '现居住地址',
            '性别',
            '民族',
            '生日',
            '文化程度',
            '政治面貌',
            '婚姻状况',
            '身份类别',
            '工作单位',
            '联系电话',
            '特长',
            '备注'

        ];
    }

    public function title(): string
    {
        return '居民信息';
    }
}
