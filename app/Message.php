<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TelegramBot\Api\BotApi; //carregando a classe BotApi do TelegramBot

class Message extends Model
{
    protected $fillable = [
        'name', 'email', 'subject', 'content'
    ];


    public function sendMessageTelegram(){

        $chatId=env('BOT_CHAT_ID');
        $token=env('BOT_TOKEN');

        $mensagem = ' Nome: '.$this->name.'\n Email: ' . $this->email.'\n Assunto'. $this->subject.'\n Mensagem'.$this->content.'';

        $bot = new BotApi($token); //cria nova instância da classe do BotApi
        $bot->sendMessage($chatId, nl2br($mensagem)); //envia a mensagem no telegram


    }
}
