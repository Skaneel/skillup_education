<?php


class Form
{
    public $arr = [];

    public function input($type, $placeholder, $name)
    {
        $this->arr['type'] = $type;
        $this->arr['placeholder'] = $placeholder;
        $this->arr['name'] = $name;
        $this->inputRender($this->arr);
    }

    public function submit($value)
    {
        $str = '';
        $str .= '<input type="button" ' . 'value="' . $value . '" >';
        echo $str;
    }

    public function password($placeholder, $name)
    {
        $this->arr['placeholder'] = $placeholder;
        $this->arr['name'] = $name;
        $str = '';
        $str .= '<input ' . 'placeholder="' . $placeholder . '" name="' . $name . '" ></br></br>';
        echo $str;

    }

//    public function textarea()
//    {
//
//    }

    public function open($action, $method)
    {
        $this->arr[$action] = $method;
        $this->getArr($this->arr);
    }

    public function close()
    {
        $close = '</form>';
        echo $close;
    }

    private function inputRender($arr)
    {
        $html = '';
        foreach ($arr as $key => $value) {
            $html .= $key . '="' . $value . '"' . ' ';

        }
        echo $html2 = '<input ' . $html . '></br></br>';
    }

    private function getArr($atr)
    {
        $str = '';
        foreach ($atr as $action => $method)
            $str .= '<form ' . 'action="' . $action . '" method="' . $method . '" >';
        echo $str;
    }

}

$obj1 = new Form();
$obj1->open('index.php', 'POST');
echo "\n";
$obj1->input('text', 'Ваше имя', 'name');
echo "\n";
$obj1->password('Ваш пароль', 'pass');
echo "\n";
$obj1->submit('отправить');
echo "\n";
$obj1->close();

