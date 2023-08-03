<?php
/* 
INTERFACE KULLANIMI
Arayüzler, soyut sınıflara benzer.

Arayüzler sadece sınıfta zorunlu olarak tanımlanması gereken metotları belirtmek için kullanılır.

ÖZELLİKLERİ

Soyut methodlar ve sabitler içerebilir.
Sadece public method tanımı yapılabilir.
Aynı sınıf sadece birden fazla interface kullanabilir.
*/

interface A{
    public function a();
    public function b();
}

interface B extends A{
    public function c();
    public function d();
}
//abstract ta olduğu gibi implementste de A interface içinde tanımlananları class C de tanımlamak zorundayım. Abstract sınıfların kullanımında sadece bir abstract sınıftan türetebiliyorduk. Ama interface leri implement ederken birden fazla interface kullanabiliriz.
//class C implements A,B{}
class C implements B{
    public function a()
    {    }

    public function b()
    {    }

    public function c()
    {    }
    public function d()
    {    }
}
?>