<?php
namespace designpattern\expression;

class MusicNote extends IExpression {
    
    public function excute($key, $val) {
        $note = '';
        switch($key) {
            case "C":
                $note = '1';
                break;
            case "D":
                $note = '2';
                break;
            case "E":
                $note = '3';
                break;
            case "F":
                $note = '4';
                break;
            case "G":
                $note = '5';
                break;
            case "A":
                $note = '6';
                break;
            case "B":
                $note = '7';
                break;
        }
        return $note;
    }
}
