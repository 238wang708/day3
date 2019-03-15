<?php
 /**
 * 
 */
 class exam{
   private static $db;

   function __construct($ip,$dbname,$username,$password){
       self::$db = new PDO("mysql:host=$ip;dbname=$dbname",$username,$password);
   }

   public function add($sql){
    //var_dump($sql);
     return self::$db->exec($sql);
    }
    
    public function del($sql){
          
        return self::$db->exec($sql);
    }
    public function update($sql){
        return self::$db->exec($sql);
    }
     
   public function select($sql){
    return self::$db->query($sql)->fetchAll();
   }
 }
  $db=new exam('127.0.0.1','pdo','root','root');
  //添加的sql语句
  // $sql="INSERT INTO NEWS(id,title,crea,people,`read`) VALUES('','新闻1','好好','小爺','100')";
  // $res =$db->add($sql);
  // 
  // 
  // 
  //删除的sql语句
  // $sql="delete  from news where id=3";
  // $res  =$db->del($sql);
  // 
  //修改的sql语句
  //

   //  $sql="update news set title = 'q',people='英俊小王子'  where id = 2";
   // @$res=exam::update($sql);
   // 
   // 
   //查询的sql语句
   $sql ="select * from news";
   $res=$db->select($sql);
   print_r($res);
?>