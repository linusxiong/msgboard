# msgboard
留言板
<br>请自行修改connect.php，来连接数据库
<br>在数据库中创建comment的sql命令
<br>
CREATE TABLE `comments`(  
`id` int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
`user` varchar(50),  
`comment` varchar(200),  
`addtime` datetime not null  
)engine=MYISAM CHARACTER SET UTF8 COLLATE utf8_unicode_ci;  
