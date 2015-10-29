<?php

function flash($message, $var = 'message')
{
    session()->flash($var, $message);
}