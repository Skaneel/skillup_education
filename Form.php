<?php


class Form
{
    public $arr = [];

    public function input($type, $placeholder, $name)
    {
        $html = '';
        $this->arr['type'] = $type;
        $this->arr['placeholder'] = $placeholder;
        $this->arr['name'] = $name; // сохранить в тектовый файл <<

        echo $html .= '<input type="' . $type . '" name="' . $name . '" placeholder="' . $placeholder . '" value="' . $_POST['name'] .'">';

    }

    public function submit($value)
    {
        $str = '';
        $str .= '<input type="submit" ' . 'value="' . $value . '" >';
        echo $str;
    }

    public function password($placeholder, $name)
    {
        $this->arr['placeholder'] = $placeholder;
        $this->arr['password'] = $name; // это нужно сохранить в файл txt <<
        $str = '';
        $str .= '<input ' . 'placeholder="' . $placeholder . '" name="' . $name . '" value="' . $_POST['pass'] . '"></br></br>';
        echo $str;

    }

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

    private function getArr($atr)
    {
        $str = '';
        foreach ($atr as $action => $method)
            $str .= '<form ' . 'action="' . $action . '" method="' . $method . '" >';
        echo $str;
    }
}

