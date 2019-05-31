git工作区有三个
1.git仓库 将最终确认的文件保存在仓库 他人可见
2.暂存区  暂存已经修改的文件 最后一起提交到git仓库中 
3.工作区  添加修改删除代码等  

git基础设置 （必须先弄）
设置用户名 git config --global user.name ‘ 用户名 ’
设置邮箱   git config --global user.email ‘ 邮箱地址 ’

仓库添加文件的流程
1.创建一个文件夹 创建本地仓库.git 隐藏文件这个是  
2.touch 文件名.php 创建一个新文件     git status  看看仓库里面暂存区状态
3.git add 文件名.php 将文件添加到暂存区  git status  看看仓库里面暂存区状态
4.git commit -m “ 描述 ”  将暂存区文件提交到仓库  描述必须写    git status  看到working clean 字样说明提交成功

仓库修改文件的流程
1.vi 之前的文件名.php  往文件里写内容 按a写入 写完按esc 再按：wq保存退出
2.cat 这个文件名.php  查看里面内容对不对 对的话重复一遍添加文件的流程

仓库删除文件的流程
1.git rm 文件名.php  从仓库中删除文件 
2.git commit -m ‘ 描述 ’  描述一些 

将本地仓库内容同步到git远程仓库中
git push

将别人仓库下载可以将地址复制
git clone 仓库地址

个人站点的搭建步骤 
1.创建个人站点     就是新建仓库   仓库名必须是用户名.github.io
2.在仓库下新建index.html文件即可
