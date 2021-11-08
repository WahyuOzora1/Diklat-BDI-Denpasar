<?php


class No5
{
    public $a, $b;

    public function set_nilai($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function get_nilai()
    {
        return (($this->a) . ($this->b));
    }
}


$no5 = new No5();

$no5->set_nilai("a", "b");

echo $no5->get_nilai();
