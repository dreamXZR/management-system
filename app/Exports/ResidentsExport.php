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

class ResidentsExport implements FromQuery,WithMapping, WithHeadings, WithTitle, ShouldAutoSize
{
	

	//private $fileName='居民信息.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Resident::all();
    // }
    public function withSelect()
    {

    }
    
    public function query()
    {
    	return Resident::where('id','>',1);
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
