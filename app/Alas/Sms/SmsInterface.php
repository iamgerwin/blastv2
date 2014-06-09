<?php namespace Alas\Sms;

interface SmsInterface{

    public function sendIt($to,$msg);
}