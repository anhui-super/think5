<?php
namespace app\index\controller;

use \think\Db;

class Test
{
    public function get()
    {
	$info = Db::query('select * from user');
	$data = json_encode($info);
	var_dump($data);
	exit();
    }
    
    public function add()
    {
	$test = $_GET['test'];
	$name = $_GET['name'];
        Db::execute('insert into user (user_Text,user_Name) values (?, ?)',[$test, $name]);
	$info = Db::query('select * from user');
	var_dump($info);
	exit();
	}
    public function del()
    {
	$id = $_GET['id'];
        $data = Db::execute('delete from  user where id = ?',[$id]);
	$info = Db::query('select * from user');
	var_dump($info);
	exit();
    }

    public function update()
    {
	$id = $_GET['id'];
	$name = $_GET['name'];
	Db::execute('update user set user_Name = :name where id = :id',['id' => $id, 'name' =>$name]);
	$info = Db::query('select * from user');
	var_dump($info);
	exit();
    }

    public function update()
    {
	$id = $_GET['id'];
	$name = $_GET['name'];
	Db::execute('update user set user_Name = :name where id = :id',['id' => $id, 'name' =>$name]);
	return;
    }
}

    }
}

