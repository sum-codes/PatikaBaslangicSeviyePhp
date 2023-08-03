<?php

class Hash{
    //burada verileri istediğimiz formatta hashleyebiliriz.
//protected yaparsak da çalışır.
   public function md5Hash($string){
    return md5($string) . " HASHCLASS WORKS";
   }
   public function sha1Hash($string){
    return sha1($string);
   }

}
//Bir sınıfın özellik ve methodlarını başka bir sınıfa aktarmamıza olanak sağlar. Hash sınıfının özelliklerini user a atayabiliyorum. Buna kalıtım denir.
class User extends Hash{
    public $username;
    public $password;

    public function md5Hash($string){
        return md5($string) . " UAERCLASS WORKS";
       }

    public function saveUser($username,$password){

        $this->username=$username;
        $this->password=parent::md5Hash($password);
       /* $this->password=$this->md5Hash($password);
       USERCLASS çalışır. HASHCLASS ı çalıştırmak için parent kullanırız.
       */
        /*
        $this->password=$password;
        şifreyi hashleyip md5 formatında gösterir.
        */
    }
//Sınıfımızda ve türetilen sınıfta aynı isimlerde özellik ve methodlara parent:: ile erişebiliriz.

    public function showUser(){
        echo $this->username."<br>";
        echo $this->password;
    }
}
$User=new User();

$User->saveUser('ecesumeyye','123');
$User->showUser();

?>