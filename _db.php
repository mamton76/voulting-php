<?php
const SELECT_COMMON_PART = "select id, dt_creation, dt_update, ";

class DB{
   public $aDatabaseName;
   public $aUserName;
        function DB($mysql_database,$mysql_username,$mysql_password,$mysql_host){
		$this -> aDatabaseName = $mysql_database;
		$this -> aUserName = $mysql_username;
		//$this -> printMe();
        //        echo $mysql_password;
		//        echo $mysql_username;
		//        echo $mysql_host;
		        mysql_connect($mysql_host,$mysql_username,$mysql_password);
                mysql_select_db($mysql_database);
        }

	function printMe() {
		echo $this -> aDataBaseName + ' ';
		echo $this -> aUserName;
	}

        /*
        ЗАПРОС С ВЫБОРКОЙ И ВОЗВРАТ МАССИВА, 0 ЭЛЕМЕНТ КОЛ-ВО СТРОК
        */
        function QUR_SEL($sql){
                $out = '';
                $qur = mysql_query($sql); //echo $sql.'<br>'.mysql_error();
                if ($qur){
                        $kol = mysql_num_rows($qur);
                        if ($kol){
                                $out[0] = $kol;
                                while($rez = mysql_fetch_assoc($qur)){
                                        $out[] = $rez;
                                }
                        }
                }else die('ОШИБКА БД!!! <br/>'.$sql.'<br />'.mysql_error());
                return $out;
        }
        /*
        ЗАПРОС К БАЗЕ ДАННЫХ, И ВОЗВРАТ РЕЗУЛЬТАТА ЗАПРОСА
        */
        function QUR($sql){
                $out = '';
                $qur = mysql_query($sql);
                if ($qur){
                        $out['err']=false;
                }else{
                        $out['err']=true;
                        $out['sql']=$sql;
                        $out['rep']=mysql_error();
                }
                return $out;
        }
}
?>

