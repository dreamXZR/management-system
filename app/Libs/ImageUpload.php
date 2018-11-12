<?php

namespace App\Libs;

class ImageUpload
{
	protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

	public function save($file, $folder='default')
	{
		$path_arr=[];
		foreach ($file as $k => $v) {
			$info=$this->single($v,$folder);
			$path_arr[]=$info['path'];
		}
		
		return json_encode($path_arr);

		

	}

	public function update($file, $folder='default')
	{
		

		return $this->save($file,$folder);
	}

	/*

		上传单张图片
	*/
	public function single($single_file,$folder='default')
	{
		//文件夹路径
		$folder_name = "uploads/images/$folder/" . date("Ym/d", time());
		//图片具体路径
		$upload_path = public_path() . '/' . $folder_name;
		//图片后缀
		$extension = strtolower($single_file->getClientOriginalExtension()) ?: 'jpg';
		//文件名称
		$filename=time() . '_' . $single_file->getClientOriginalName();
		// 如果上传的不是图片将终止操作
        if ( ! in_array($extension, $this->allowed_ext)) {
            return false;
        }

        // 将图片移动到我们的目标存储路径中
        $single_file->move($upload_path, $filename);

        return [
            'path' => "$folder_name/$filename"
        ];
	}
	/*

		删除图片
	*/
	public function del($file_path)
	{
		$file_path=public_path() . '/' . $file_path;
		if(file_exists($file_path)){
			@unlink($file_path);
		}
	}
}