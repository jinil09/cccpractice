<pre><?php

class A{

    public $a=10;
    public function inc(){
        $this->a++;
        return $this;
    }
    public function test2(){
        if(!isset($this->obj)){
            $this->obj= new A();
        }
        $this->inc()->inc();
        var_dump($this->a);
        return $this;
    }
}

class B{


    public function test(){
        if(!isset($this->obj)){
            $this->obj= new A();
        }
        $this->obj->test2()->test2();
        var_dump($this->obj->a);
        return $this;
    }
}

$obj = new B();
$obj->test()->test();
?>