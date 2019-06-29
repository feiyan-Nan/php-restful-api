<?php
namespace app\api\controller\v1;

class Index
{
    public function test()
    {
        return array('name' => 'zhangsan', 'age' => 23);
    }
}
