<?php namespace Alas\Sms;

use Illuminate\Database\Eloquent;

class SmsRepository implements SmsInterface {

    protected $data;
    protected $mcpro;

    public function __construct()
    {
        $this->mcpro = 'http://122.52.163.202/mcproManager/public/gateway';
        $this->data['Keyword'] = "LnGsx";
    }
    public function sendIt($to = '09323729873', $msg)
    {
            $this->data["To"] = $to;
            $this->data["Msg"] = substr($msg,0,999);
            $gc = curl_init($this->mcpro);

            $this->storeOutbox();

            curl_setopt($gc, CURLOPT_POST, true);
            curl_setopt($gc, CURLOPT_POSTFIELDS, $this->data);
            curl_setopt($gc, CURLOPT_RETURNTRANSFER, true);
        return curl_exec($gc);
    }
    private function storeOutbox()
    {
        $nums = explode(',',$this->data["To"]);

        foreach($nums as $num) {
            \Message::create([
                    "message_type_id" => 2,
                    "from" => $num,
                    "is_active" => true,
                    "message" => e($this->data["Msg"])
                ]);
        }

    }
}