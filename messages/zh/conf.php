<?php

return [

    'detection' => '项目配置检测',
    'detecting' => '正在检测...',

    'edit' => '配置项目',
    'name' => '项目名字:',
    'env' => '项目环境:',
    'url' => '地址:',
    'username' => '用户名:',
    'password' => '密码:',
    'deploy from' => '代码检出仓库',
    'excludes' => '排除文件',
    'host' => '宿主机',
    'targets' => '目标机器',
    'target user' => '用户',
    'releases' => '发布版本库',
    'keep version' => '版本保留数',
    'servers' => '机器列表',
    'tasks' => '高级任务',
    'branch/tag' => '分支/tag上线:',
    'enable audit' => '是否开启审核:',
    'enable open' => '是否启用:',
    'repo url tip' => '支持git/svn。git格式:ssh-url，需要把宿主机php进程用户的ssh-key加入git信任',
    'deploy from tip' => '代码的检出存放路径',
    'excludes tip' => '剔除不上线的文件、目录，每行一个',
    'target user tip' => '代码的部署的用户，一般是运行的服务的用户，如php进程用户www',
    'webroot tip' => '代码的最终部署路径，请不要在目标机新建此目录，walle会自动生成此软链，正确设置父目级录即可',
    'releases tip' => '代码发布的版本库，每次发布更新webroot的软链到当前最新版本',
    'keep version tip' => '过多的历史版本将被删除，只可回滚保留的版本',
    'servers tip' => '要发布的机器列表，一行一个，非22端口可 ip:port',
    'task help' => '使用系统变量更方便处理路径问题：{WORKSPACE}：宿主机的独立部署空间或目标机的webroot    {VERSION}：发布的版本库的当前版本',
    'task help head' => '辅助变量',
    'pre_deploy tip' => '在部署代码之前的准备工作，如git的一些前置检查、vendor的安装（更新），一行一条',
    'post_deploy tip' => 'git代码检出之后，可能做一些调整处理，如vendor拷贝，环境适配（mv config-test.php config.php），一行一条',
    'pre_release tip' => '同步完所有目标机器之后，更改版本软链之前触发任务。java可能要做一些暂停服务的操作(双引号将会被转义为\")',
    'post_release tip' => '所有目标机器都部署完毕之后，做一些清理工作，如删除缓存、重启服务（nginx、php、task），一行一条(双引号将会被转义为\")',
    'branch tip' => '测试环境推荐选项，可以选择branch+commit',
    'tag tip' => '生产环境推荐选项',
    'audit tip' => '开启时，用户提交上线任务需要审核方可上线',
    'open tip' => '关闭时，用户不能对此项目发起上线',

    'group' => '项目成员管理',
    'relation' => '用户组关系',
    'search' => '通过邮箱查找用户',
    'add' => '添加',
    'audit manager' => '审核管理员可审核上线单',
    'audit manager tip' => '审核管理员可审核上线单',
    'add audit manager' => '设为审核管理员',
    'cancel audit manager' => '取消审核管理员',
    'js set audit manager failed' => '设置失败: ',

    'index' => '项目配置',
    'index search placeholder' => '项目名称',
    'create project' => '新建项目',
    'p_name' => '项目名称',
    'p_env' => '环境',
    'p_mode' => '上线方式',
    'p_audit' => '开启审核',
    'p_status' => '状态',
    'p_opera' => '操作',
    'p_preview' => '查看',
    'p_detection' => '检测',
    'p_copy' => '复制',
    'p_member' => '成员',
    'p_edit' => '修改',
    'p_delete' => '删除',
    'js delete project' => '确定要删除该项目？',
    'js copy failed' => '复制失败: ',
    'js copy project confirm' => '确定要复制该项目？',

];