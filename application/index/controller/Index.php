<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index(){
        echo '查看文件状态 git status
        创建xsb别名用于仓库提交等    git remote add xsb git@github.com:xushubin/blog.git  
        1、提交   git add * 
        2、提交到暂存区  git commit -m "update"
          3、本地仓库提交到远程服务器（github）        git push -u xsb master     
          远程仓库更新本地步骤 1、从远程仓库下载到本地并新建一个分支temp      git fetch origin master:temp   
          2、比较master分支和temp分支的不同                git diff temp 
          3、合并temp分支到master分支                         git merge temp  
          4、删除   git branch -d temp    
          使用ssh步骤 1、创建秘钥    ssh-keygen -t rsa -C \&quot;420186969@qq.com\&quot; 
          然后秘钥保存在C:\\Users\\Administrator\\.ssh 
          2、登录github。打开setting- gt;SSH and GRG keys，点击右上角 New SSH key，把生成好的公钥id_rsa.pub放进 key输入框中';
       die;
        return $this->fetch();
     }
}

