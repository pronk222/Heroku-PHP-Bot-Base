<?php
/* ادیت های مورد نیاز لاین ۲۷ و ۲۸ مربوط به ادمینی می‌باشد
لاین 1491 آپی آید و لاین 1492 آپی هش اکانت وارد کنید برای دریافت این ها می توانید از سایت تلگرام ذریافت کنید my.telegram.org
creator : @mohamadreza_xn
channel : @mohamadreza_TM
#سورس_درخواستی_اتکر_میدلاین‌ورژن 6
سورس اتکر نسخه 1.0
منتظر آپدیت های جدید . . .
*/
error_reporting(E_ALL);
ini_set('display_errors','1');
ini_set('memory_limit' , '-1');
ini_set('max_execution_time','0');
ini_set('display_startup_errors','1');

if (!file_exists('madeline.php')) 
{
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}

if(!file_exists('data.json'))
    file_put_contents('data.json', '{"enemies":{}}');

include 'madeline.php';

use \danog\MadelineProto\API;
use \danog\Loop\Generic\GenericLoop;
use \danog\MadelineProto\EventHandler;
use \danog\MadelineProto\Shutdown;


class XHandler extends EventHandler
{
    const Admins = [1057813886,5375544500,5497252166]; //ایدی عددی ادمین
    const Report = 'umllllett'; // ایدی

    public function getReportPeers()
    {
        return [self::Report];
    }
    
    public function genLoop()
    {
        if($time == "00:01")
        {
            array_map('unlink', glob( "data/*.txt"));
        }
        
        return 59000;
    }
    
    public function onStart()
    {
        $genLoop = new GenericLoop([$this, 'genLoop'], 'update Status');
        $genLoop->start();
    }
    
    public function onUpdateNewChannelMessage($update)
    {
        yield $this->onUpdateNewMessage($update);
    }
    
    public function onUpdateNewMessage($update)
    {
        if (time() - $update['message']['date'] > 2) 
        {
            return;
        }
        try 
        {
            
            $mohamadrezatm   = $update['message']['message']?? null;
            $messageId = $update['message']['id']?? 0;
            $fromId    = $update['message']['from_id']['user_id']?? 0;
            $replyToId = $update['message']['reply_to']['reply_to_msg_id']?? 0;
            $peer      = yield $this->getID($update);
            @$data     = json_decode(yield Amp\File\get("data.json"), true);

            if((in_array($fromId, self::Admins))) 
            {
                if(preg_match('/^[\/\#\!\.]?(ping|ربات)$/si', $mohamadrezatm)) 
                {
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'bot online🍂 ',
                        'reply_to_msg_id' => $messageId
                    ]);
                }
elseif ($mohamadrezatm == 'راهنما' or $mohamadrezatm == 'Help' or $mohamadrezatm == 'help' or $mohamadrezatm == 'HELP')
                {
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => "
 راهنما اتکر خوش آمدید☠

☠(-فحش انگلیسی-)
• `fn` or `en1` or `فشن` or `فحش `انگلیسی

☠{--فحش دو‌کلمه ایی--}
• `2k` or `2ک` or `دوک` or `دوکلمه`

☠[-_- فحش ننه -_-]
• `1n` or `ننه1` or `نن` or `ن1`

☠(~فحش بلند~)
• `bkn` or `بکنش`

👽| ↓شمارش↑ |
• `1s` or `شمارش` or `شم` or `ش1`

—————————————————
😈 ست آنمی برای هر چت فحش ریپلای 
• `SetEnemy` |→ Reply

👿 دیلت آنمی فحش دعوا
• `DelEnemy` |→ Reply

💀 پاکسازی لیست آنمی
• `Clean Enemylist` 
—————————————————
📊آمار اکانت به همراه مصرف رم 
• `stats` or `امار`

📈 لود سرور و اندازه لاگ 
•`load` or `لود`

 🔄 ریستارت کردن اتکر
• `restart` or `ریستارت`
توصیه زیاد ریستارت نزنید ♥️

Ataker version 1.0",
                        'id' => $messageId
                    ]);
}
                elseif ($mohamadrezatm == 'en1' or $mohamadrezatm == 'فشن' or $mohamadrezatm == 'فحش انگلیسی' or $mohamadrezatm == 'fn')
                {
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kir b nnt bashe',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'rvani shoooode khkhkh',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kir b nnt bashe',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'rvani shoooode khkhkh',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kir be nne khobet ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'qoh khordi shakh shodi ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kos namos vel shode',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'qoh khordi shakh shodi ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kir be nne khobet ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'rvani shoooode khkhkh',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kir b nnt bashe',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kos nnt',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kos vel shode koshi to',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'migm bala bashhh khkhkh',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'nn obi',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'chos mmber khkh',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kiri namos',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'pdr sg binamos mmber',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'bro kos nnt baw',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'khkh',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'hmsh to kos nnt bash khkhkhkhkhkh',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kir 7jadm to kos nnt khkh',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'cheqdr to chosi kos nne beres dige ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'mno to  kirmon to kos nne to',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kharkose',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'kir to nnt
kos to nnt
chos to nnt',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'nn obi',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'nne kos namos',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'nn obi',
                        'id' => $messageId
                    ]);
                }
                elseif ($mohamadrezatm == 'ش1' or $mohamadrezatm == '1s' or $mohamadrezatm == 'شمارش' or $mohamadrezatm == 'شم')
                {
                 yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '1',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '2',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '3',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '4',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '5',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '6',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '7',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '8',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '9',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '10',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '11',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '12',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '13',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '14',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '15',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '16',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '17',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '18',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '19',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '20',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '21',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '22',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '23',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '24',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '25',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '26',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '27',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '28',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '29',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '30',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '31',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '32',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '33',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '34',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '35',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '36',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '37',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '38',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '39',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '40',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '41',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '42',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '43',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '44',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '45',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '46',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '47',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '48',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '49',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '50',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'شمارش خوردی خیخیخ ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'صیک کن نبینمت',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '😂:(صیکتیر تقبرلله',
                        'id' => $messageId
                    ]);
                }
                elseif ($mohamadrezatm == '2ک' or $mohamadrezatm == '2k' or $mohamadrezatm == 'دوکلمه' or $mohamadrezatm == 'دوک')
                {
                 yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خر کونی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ولد خر',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ای کص ممبری',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خار لیصر',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ممبرکیری',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ممبر کونی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ممبر چصده',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کیر خور',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'بیناموص',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص لیس',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خایه مال',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ناموص مشکوت',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'بی پدر',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص پدر',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کون پاره',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص خراب',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'تخم صگ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'تخم حرام',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص شکلاتی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص خراب',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص خونی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کیر پرست',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'صگ ناموص',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'صگ خار',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خار کص خونیت',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خار پلشت',
                        'id' => $messageId
                    ]);
                                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خر کونی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ولد خر',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ای کص ممبری',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خار لیصر',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ممبرکیری',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ممبر کونی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ممبر چصده',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کیر خور',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'بیناموص',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص لیس',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خایه مال',
                        'id' => $messageId
                    ]);
                }
                elseif ($mohamadrezatm == 'ننه1' or $mohamadrezatm == '1n' or $mohamadrezatm == 'نن' or $mohamadrezatm == 'ن1')
                {
                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص ننت',
                        'id' => $messageId
                    ]);
                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص مامیت',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص خواهرت',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص ناموست اووف',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص ننه بزرگت',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص بابابزرگت خیخیخ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کیرم ت ناموصت',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خارکصه',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ناموس مادرجنده',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر کونی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ننه خر',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ننه پریودی  ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => ' ننه هفتی ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ننه مفتی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ننه شورتی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ننه الکصیص',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'بی ننه',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر یتیمی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر روانی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ننه خیاری ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ننه هورمونی',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر کیرپرست',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر خراباتی',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر کصده',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر افلیج',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر شهوتی',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر اوبنه',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر بخطا',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر فاحشه',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر پولی',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر پاره',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر چصو',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر گاییده شده',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر جر خورده ',
                        'id' => $messageId
                    ]);
                     yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'مادر صلواتی 😋',
                        'id' => $messageId
                    ]);
                }
                elseif ($mohamadrezatm == 'بکنش' or $mohamadrezatm == 'bkn')
                {               
                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'باسنت داد بر باد، آرام و طاقتم را ای وای گر ندانی قدرِ آلتم را',
                        'id' => $messageId
                    ]);
                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'چند میگیری؟',
                        'id' => $messageId
                    ]);
                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'لاشی',
                        'id' => $messageId
                    ]);
                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'اول مادرتو از تو چهار راه جمع کن خودشو حراج نزنه😂😂',
                        'id' => $messageId
                    ]);
                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص مشنگ',
                        'id' => $messageId
                    ]);
                                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'اگر ننتو خوب کرده بودم حالا تو اینجوری نمیشدی☹️',
                        'id' => $messageId
                    ]);
                yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'ادای احترام کن تا کص مادر مرده هاتو نکشیدم سره بابای زنده هات',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'صکص ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'کص ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   فکو فازتو میگام بخای تلاش کنی با ما هم کلوم شی جهت بالا بردن سطح و لول بشدت گوهت جنده ی بی هویت فاقد اسم و رسم   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   یه مشت کره خر زبون نفهم ناشناس افتادن وسط چنل خایه قاپی بنده رو میکنن یکی نیست به اینا بگه تورو چه به کیر من آخه ریدم تو امواتت جد جاکش   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   کس ننت مامان سگ بالا باش برا پدرت شاخ نشو بی ناموس بدبخت زاده بار کش مثل خر بار زدم تو کمر ابجی خشگلت از کوه میبرمش بالا ابلح زاده خر ناموص با شلنگ میزنم در کون مادرت که ازش خون بچکه   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   بی ناموس اون طوری بهم‌ نگاه نکن ای بی پدر مادر بسه اعصاب مصامبو خورد نکن بسیک مادر جنده مگه با تو نیستم؟ بیام کیرم فرو کنم تو چشات؟ ای لعنت خدا بر تو و خاندانت باد خوب دیگ بالا باش ببینم چی تو چندتا داری کیرم تو مادرت مامان موش بالا باش خار مادر تورک بی غیرت کیرم تو اون ناموس ترکت گوه میکنم تو دهن مادرت ای بی هویت فاقد ناموس ترک پدر خارشل بسیک مادر سگ   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   جیکت در نیاد لال مونی بگیر کیرم تو ابجی خشگلت خفه بی شرف تو مایه ننگ بشریت هستی اون طوری بهم‌ نگاه نکن کیرم تو ناموست گح تو دهن مادرت با لگد میزنم تو شیکم مادرت بگوزه تو دهن پدرت مامان ارایشی جنده مادر   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   پرده ی خاهرتو با پیچ گوشتی زدم گوه تو ناموصت بی ناموص دلقک بالا باش بزنم با گوه یکیت کنم بی ناموص این دلقک ببین ترو خدا صیک شو تو کس مادرت کیرم تو کص کون تپل مادرت ای مادر کون گنده رعیت زاده گدا ناموص خایمالی نکن که یهو دیدی خایهام کردم تو ناموصت   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   کجا داری فلنگ‌ میبندی بی ناموس الان موقعه فرار نیست نسلتو گایدم بیا تو گود ببینم‌ چی تو چندتا داری هر جا بخای فلنگ ببندی عین عجل معلق میام بالا سرت میزنم خار مادرت میگام عین موش میگیرمت به زور میچپونمت تو کس ننت   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   خار مادرت ریدم بالا باش ناموس سگ‌ ریدم وسط کله ناموست تو گوه خوردی شاخ شدی حالا باش باش که خارت برینمفش   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   آخه صگ ناموص کی ط رو شاخ کرد اومدی تلگرام جولان میدی؟ مادرتو با کیرم سلاخی کنم ینی؟؟؟ صگ ناموص ط برا امید سرطان نیشاخی؟؟؟؟؟؟؟ کص خارت بکنم من ینی؟   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   ریدم تو کص ناموصت بی شرف زاده کس کون ناموست بخورم جلو چشمات نتونی جیک بزنی که با مشت بزنم تو کص مادرتفش   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   خون پریود مادرتو کردم تو شیشه داشم میخام جای شربت البالو بدمش به خورد پدر نوچه بی غیرتت نوچه بی سر پا خرس میندازم به جون ننت تف به کص مادر جندت چرا به تته پته افتادی پشه زاده جیکت در نیاد تخم مورچه الدنگ زاده بی شرففش   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   خفه شو کیرم بره ط ناموصت دیگه هیچوقت در نیاد / تف تو عمون کص مادر بیناموص اوبی زاده بایای کن کیرم ط شلوار خونی خاهرت بره ایشالا ننت کیر بشه ط کص ناموصت بای ننه کیری خز ناموص جصکی   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   با کیر حمله کنم ت کص مادرت اخه جنده ناموص؟؟؟ خار جنده ط با چ حقی میای داسه من میمالی؟؟؟ با کیر ننتو پیر کنم؟ ط عم باید بیای ننتو نجات بدی ولی کیرم ت ناموصت بره ت کیرمم نمیتونی بخوری مادر گوه اوبی زادهی ناموص کونی   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   چص ناموص گوه ممبر بالا باش میخام ننتو جوری بگام ک ننت کصش پاره شه باباتم بیچارع شه نادر کونی خ خارجندهی اوبی ناموص گوه ننه برو گمشو ت کص مادرت بایر   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   میگن ط باغ فردوس دعوا شده سر کص مادرت کونی ناموص ، بیا بالا تا کیرمو فرو کنم ط دندونای کیری مادرت سگ ننه کدنی لاشی بالا باش تخمی   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   کیرم تو ایل و تبارت خارکونی عشق کس نمایی با یه اک تتلو واژن لیسی میکنی با یه اک دیگه وزیری کیروخایه بلعی میکنی و با اک سنا ساندیس فکو فاز گنده بودن میگیری؟ریدم تو دکو پز ناموست تو سه چارتا تکستم از تکسای خودم نوت برداری شده و سگ سیک شده ی خودمی با چ حقی هارتو پورت میکنی   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   سگای فاقد غروری که با قلاده تو چنل میگردن جایی واسه اظهار نظر و لاف زدن ندارن زول همه کس کونیتورو وقتی زدم تو سر و کلتهمون ابتدای کار باید دمتو میزاشتی رو کولت و میرفتی تو چنلای صص کن بندو بساط مینداختی وسط   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   سگای فاقد غروری که با قلاده تو چنل میگردن جایی واسه اظهار نظر و لاف زدن ندارن زول همه کس کونیتورو وقتی زدم تو سر و کلتهمون ابتدای کار باید دمتو میزاشتی رو کولت و میرفتی تو چنلای صص کن بندو بساط مینداختی وسط   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   ببین مادرجنده فروتنی و تواضع بسه دیگه فلنگو ببند و واسه خود گوه سرتاپات اندکی ارزش قاعل شو و طنزگویی رو خاتمه بده   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   میخام ی داستان از ننه ی جندت تعریف کنم برات ک کص مادرت بره رو هوا و دیگه برنگرده مادر جندیه ی ننه کص پریود خونی ناموص چصکی گوه ننه   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   تیززززز بالا باش مادر کون پاره میخام با شلنگ انقد بزنم ط کص مادرت ک نادرت کصش ماره بشه دیگه هیجوقت هیج دکتری نتونه کص ننتو ترمیم کنه ای مادر وونییییی   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   یوهاهاها /// بی ناموسا شما چص شاخی کردن؟هن هخخخخخخخخخخ بالا باشید میخام گدرتو بهتون نشون بدم خهخهخخهخهخهخهخ هی تو بی ناموس بالاتر   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   بالا میگم عه خخخخخخخخخخخخخخخخخخخخخبالاشل ناموص کص ننه خخخخخخخخخخخخخخخخخخخخخبالاتخس ننه بالا بت میگم خخخخخخخخخخخخخخخخخخخخخبالاشل خار مادر هار ب کیر خخخخخخخخخخخخخخخخخخخخخبالاکوشی ییییییی؟؟؟/   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   کص ننهه بت میگم بالا دستئور اطعات کن خخخخخخخخخخخخخخخخخخخخخبالاکیر تو ناموصت بشه راهه فراری نداری خخخخخخخخخخخخخخخخخخخخخبالایالا میگم بتایپ خخخخخخخخخخخخخخخخخخخخخبالدارم اروم اروم مادرت کص میکنم خخخخخخخخخخخخخخخخخخخخخبالااروم اروم کیر تو کص ننت میکنمخخخخخ   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '   بالا میگم عه خخخخخخخخخخخخخخخخخخخخخبالاشل ناموص کص ننه خخخخخخخخخخخخخخخخخخخخخبالاتخس ننه بالا بت میگم خخخخخخخخخخخخخخخخخخخخخبالاشل خار مادر هار ب کیر خخخخخخخخخخخخخخخخخخخخخبالاکوشی ییییییی؟؟؟/   ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '1',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '2',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '3',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '4',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '5',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '6',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '7',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '8',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '9',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '10',
                        'id' => $messageId
                    ]); 
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '11',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '12',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '13',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '14',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '15',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '16',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '17',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '18',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '19',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '20',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'خوب دیگهه صیک کن ',
                        'id' => $messageId
                    ]);
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'با کمال احترام گفتم صیک کن گاییدمت بوص بای🤣',
                        'id' => $messageId
                    ]);
                }
                elseif($mohamadrezatm == 'لود' or $mohamadrezatm == 'load')
                {
                    $load = sys_getloadavg();
                    $ver = phpversion(); 
                    $server=PHP_OS;
                    yield $this->messages->sendMessage([
                        'peer' => $peer,
                        'message' => " 
✟ ᴘɪɴɢ : {$load[0]} ✞
♘ sᴇʀᴠᴇʀ ʏᴏᴜ : {$server} ⌘ 
version server you : {$ver}",
                        'parse_mode'      => 'markdown'
                    ]);
                }
                elseif($mohamadrezatm == 'stats')
                {
                    $sent = yield $this->messages->sendMessage([
                        'peer'=>$peer,
                        'message'=>'Please be patient for a few moments 🍃',
                        'id'=>$messageId
                    ]);
                    $log = round(filesize('MadelineProto.log')/1024/1024,2) . ' مگابایت';
                    $mem_using = round((memory_get_usage()/1024)/1024, 0).' مگابایت';
                    $sgp=0;
                    $ch=0;
                    $user=0;
                    $boot=0;
                    $gp=0;
                    $sent = $sent['id'] ?? $sent['updates'][0]['id'];
                    foreach(yield $this->getdialogs() as $stats)
                    {
                        switch(yield $this->getinfo($stats)['type'])
                        {
                            case 'supergroup';
                                $sgp++;
                                break;
                            case 'channel';
                                $ch++;
                                break;
                            case 'user';
                                $user++;
                                break;
                            case 'bot';
                                $boot++;
                                break;
                            case 'chat';
                                $gp++;
                                break;
                        }
                    }
                    
                   yield $this->messages->editMessage([
                        'peer'=>$peer,
                        'message'=>"
🛢 Your account statistics 
-!-!-!-!-!-!-!-!-!-!-!
🔪- - Privates : $user
|****|
🪓- - Super groups : $sgp
|****|
🗡- - groups : $gp
|****|
⚔️- - channels : $ch
|****|
🤖- - bots : $boot

♜ ᴍᴀsʀᴀғ ʀᴀᴍ : $mem_using ♖
♚ LOG madeline : $log ♝

|*-------------------*|",
                        'id'=>$sent
                    ]);
                }
                elseif($mohamadrezatm == 'آمار' or $mohamadrezatm == 'امار' or $mohamadrezatm == 'امار اتکر' or $mohamadrezatm == 'آمار اتکر')
                {
                    $sent = yield $this->messages->sendMessage([
                        'peer'=>$peer,
                        'message'=>'برای چند لحظه لطفا صبور باشید🌸',
                        'id'=>$messageId
                    ]);
                    $log = round(filesize('MadelineProto.log')/1024/1024,2) . ' مگابایت';
                    $mem_using = round((memory_get_usage()/1024)/1024, 0).' مگابایت';
                    $sgp=0;
                    $ch=0;
                    $user=0;
                    $boot=0;
                    $gp=0;
                    $sent = $sent['id'] ?? $sent['updates'][0]['id'];
                    foreach(yield $this->getdialogs() as $stats)
                    {
                        switch(yield $this->getinfo($stats)['type'])
                        {
                            case 'supergroup';
                                $sgp++;
                                break;
                            case 'channel';
                                $ch++;
                                break;
                            case 'user';
                                $user++;
                                break;
                            case 'bot';
                                $boot++;
                                break;
                            case 'chat';
                                $gp++;
                                break;
                        }
                    }
                    
                   yield $this->messages->editMessage([
                        'peer'=>$peer,
                        'message'=> "
🛢 آمار سلف شما 
-!-!-!-!-!-!-!-!-!-!-!
🔪- - پیوی ها : $user
|****|
🪓- - سوپر گروه ها : $sgp
|****|
🗡- - گروه ها : $gp
|****|
⚔️- - کانال ها : $ch
|****|
🤖- - ربات ها : $boot

♜ مصرف رم : $mem_using ♖
♚ لاگ میدلاین: $log ♝

|*-------------------*|",
                        'id'=>$sent
                    ]);
                }
                elseif ($mohamadrezatm == 'تاریخ میلادی') 
                {
                    date_default_timezone_set('UTC');
                    $rooz = date("l"); // روز
                    $tarikh = date("Y/m/d"); // سال
                    $mah = date("F"); // نام ماه
                    $hour = date('H:i:s - A'); // ساعت
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => "month name🌙: $mah \r\n time⌚️: $hour",
                        'id' => $messageId
                    ]);
                }
                elseif (preg_match('/^[\/\#\!]?(restart|ریستارت)$/si',$mohamadrezatm))
                {
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => '
                        ✅اتکر ورژن 6 نسخه سلف 1.0 با موفقیت ریستارت شد☘️

✔ Ataker version 6 Selfie version 1.0 was successfully restarted🍀',
                        'reply_to_msg_id' => $messageId
                    ]);
                    $this->restart();
                }
				elseif(preg_match("/^[\W]?(SetEnemy)$/i", $mohamadrezatm))
				{
					if(isset($update['message']['reply_to']['reply_to_msg_id']))
					{
                        $targetID = $peer;
                        try 
                        {
                            $targetID = yield $this->channels->getMessages(['channel' => $peer,'id' => [ $update['message']['reply_to']['reply_to_msg_id'] ]])['messages'][0]["from_id"]["user_id"];
                        } 
                        catch (\danog\MadelineProto\RPCErrorException $e) 
                        {
                            if(preg_match('/(The provided channel is invalid)/i',$e->rpc))
                            {
                                $targetID = $peer;
                            }
                        }
						if(!in_array($targetID, $data['enemies']))
						{
                            $data['enemies'][] = $targetID;
							yield Amp\File\put("data.json", json_encode($data));
							yield $this->contacts->block(['id' => $targetID]);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "[$targetID](mention:$targetID) ɪs ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪsᴛ", "parse_mode" => "Markdown"]);
						}
						else
						{
							yield $this->messages->sendMessage(['peer' => $peer, 'message' => "[ᴛʜɪs ᴜsᴇʀ](mention:$targetID) ᴡᴀs ɪɴ ᴇɴᴇᴍʏʟɪsᴛ" , "parse_mode" => "Markdown"]);
						}
					}
					else
					{
						yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ʏᴏᴜ ꜰᴏʀɢᴏᴛ ᴛᴏ ʀᴇᴘʟᴀʏ ᴏɴ ᴜsᴇʀ"]);
					}
				}
				elseif(preg_match("/^[\W]?(DelEnemy)$/i", $mohamadrezatm))
				{
					if(isset($update['message']['reply_to']['reply_to_msg_id']))
					{
                        $targetID = $peer;
                        try 
                        {
                            $targetID = yield $this->channels->getMessages(['channel' => $peer,'id' => [ $update['message']['reply_to']['reply_to_msg_id'] ]])['messages'][0]["from_id"]["user_id"];
                        } 
                        catch (\danog\MadelineProto\RPCErrorException $e) 
                        {
                            if(preg_match('/(The provided channel is invalid)/i',$e->rpc))
                            {
                                $targetID = $peer;
                            }
                        }
						if(in_array($targetID, $data['enemies']))
						{
							unset($data['enemies'][array_search($targetID, $data['enemies'])]);
							yield Amp\File\put("data.json", json_encode($data));
							yield $this->contacts->unblock(['id' =>$targetID]);
							yield $this->messages->sendMessage(['peer' => $peer, 'message' => "[$targetID](mention:$targetID) ɴᴏᴡ ɪs'ɴᴛ ɪɴ ᴇɴᴇᴍʏ ʟɪsᴛ", "parse_mode" => "Markdown"]);
						}
						else
						{
							yield $this->messages->sendMessage(['peer' => $peer, 'message' => "[ᴛʜɪs ᴜsᴇʀ](mention:$targetID) ᴡᴀs'ɴᴛ ɪɴ ᴇɴᴇᴍʏʟɪsᴛ" , "parse_mode" => "Markdown"]);
						}
					}
					else
					{
						yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ʏᴏᴜ ꜰᴏʀɢᴏᴛ ᴛᴏ ʀᴇᴘʟᴀʏ ᴏɴ ᴜsᴇʀ"]);
					}
				}
				elseif(preg_match("/^[\W]?(Clean Enemylist)$/i", $mohamadrezatm))
				{
					$data['enemies'] = [];
					yield Amp\File\put("data.json", json_encode($data));
					yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴇɴᴇᴍʏʟɪsᴛ ɪs ɴᴏᴡ ᴇᴍᴘᴛʏ!", "parse_mode" => "Markdown"]);
				}
				elseif(preg_match("/^[\W]?(Enemylist)$/i", $mohamadrezatm))
				{
					if(count($data['enemies']) > 0)
					{
						$List = "ᴇɴᴇᴍʏʟɪsᴛ : \n";
						$counter = 1;
						foreach($data['enemies'] as $ene)
						{
							$FN = yield $this->getInfo($ene)['User']['first_name'];
							$List .= "• $counter ➖ $FN - <code> $ene </code> \n";
							$counter++;
						}
						yield $this->messages->sendMessage(['peer' => $peer, 'message' => $List, "parse_mode" => "html"]);
					} 
					else
					{
						yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴇɴᴇᴍʏʟɪsᴛ ɪs ᴇᴍᴘᴛʏ!"]);
					}
				}
            }
            else
            {
				if(in_array($fromId, $data['enemies']))
				{
					$fohsh = ["بچت فقط ببین چجوری مادرتو میگام تخم صگ ناموصتو بکیرم میبندم","ط کص مادرت گلدون کنم توله","کیرم ت دهن گشاد خاهرت شه بیناموص حرمی کیر بابات ت کص خاهرت","کص کون مادرتو میگام خارکصته واسی من میشاخی کیرم ت لب لوچه مادرت تخم صگ","بچت مادرت ارضا شه تخم جن بچت فقط دست ب تایپ شدم رو کص ناموصت","دارم مادرتو میگام میخندی","بزنم مادرتو سوراخ سوراخ کنم","گدی کنم مادرتو","بزنم کص کون مادرت یکی کنم","گیف ت کصک مادرت کنم","کص خاهر مادرت بیناموص","کص مادرت ناشناس اتحادی","نوچه مادرجندع بچت کص مادرت رو کیرمه","مادرتو رو کیرم بچرخونم سرش گیج بره کصش باز شه ","کیرم ت دهن سیاه مادرت میکنم","ڪیر خوشکلم ت ڪص زشت مادرت","کصمادرت دهنم اوفف زبونم ت کصک مادرت😂😳","خارکصته سجدع کن تا نزدم مادر خاهرت نگاییدم","کیر خر ت ناموصت مادرقعبه","کیر کلفته پسرک دیونه ت کص مادرت شه","بیناموص ی چت دیگه بدی شلوار مادرتو میکشم😂","کص مادرتو به 7 روش سامورایی میگاعم","کیر خور زادع واسی من میشاخی","کیرمو بکنم ت کص ناموصت","کیرم ت ناموصت تخم صگ","کص مادرت بدخاه کیرم تو مادرت","رو کصمادرت شمارع پسرک دیونه رو خال کوبی کنم یادگاری","یعنی خاک ت کصک مادرت شه","ناشناس مادر چموش مادرتو میگام بچت","کص ناموصت اگه چت ندی","اتحادی مادر گستاخ ابلح زادع","پوکر ت کصک مادرت گوارڪس ک توی","با تیزی بزنم کصک مادرتو تیکه تیکه کنم","کیر بابات ت کص خاهرت بیناموص","مادر کسخل وضو داری میزنی چتم","کیر همه بلوچ ها ت کصمادرت","تو فکر کن الان کیر همه ت کصمادرت باشه","تو فقط چت بدع من ناموصتو میگام","شرمندع دستور از بالا اومدع باید مادرتو بگام","زبون صگ ت کص مادرت","ب من میگن سلف الان کص مادرتو قفل من کردن فهمیدی؟کیر ت ناموصت مادر جندع","ڪیر ت ڪصدون خاهر مادرت","مادرت بکیرم تخم صگ","ناموصتو میگاعم بی اموصت میکنم","گوه ت کص کون مادرت بگو باشه","بیناموص ارزش این فحش های نابو داری","کیر گاو ت کص گشاد خاهرت","نخوندم مادرت پریود شد یا نه","کص گشاد مادرت بکیرم","کص خوشکل خاهرت دهنم","سیاه کص زادع بچت ک حشری شدم رو ناموصت","مست کص مادرت شدم میدونی"
]; /* *** */
					$f = $fohsh[rand(0, count($fohsh)-1)];
					yield $this->messages->sendMessage(['peer' => $peer, 'message' => $f, 'reply_to_msg_id' => $messageId]);
				}

                $peer3      = yield $this->get_Info($update);
                $type1      = $peer3['type'];
                $peer3      = $peer3['bot_api_id'];
                $chatI      = $peer3;

                        }
        
        }
        catch (\Throwable $e)
        {
            $this->report("Surfaced: $e");
            unset($e);
        }
    }
}

$settings = [
    'serialization' => [
        'cleanup_before_serialization' => true,
    ],
    'logger' => [
        'max_size' => 25*1024*1024,
    ],
    'peer' => [
        'full_fetch' => false,
        'cache_all_peers_on_startup' => false,
    ],
    'app_info' => [
        'api_id' => 18132908,
        'api_hash' => "cc27ddd051bc02189c3d149d598c3300"]
];
/* ادیت های مورد نیاز لاین ۲۷ و ۲۸ مربوط به ادمینی می‌باشد
لاین 1491 آپی آید و لاین 1492 آپی هش اکانت وارد کنید برای دریافت این ها می توانید از سایت تلگرام ذریافت کنید my.telegram.org
creator : @mohamadreza_xn
channel : @mohamadreza_TM
#سورس_درخواستی_اتکر_میدلاین‌ورژن 6
سورس اتکر نسخه 1.0
منتظر آپدیت های جدید . . .
*/
$bot = new API('mohamadrezaTM.session', $settings);
$bot->startAndLoop(XHandler::class);
?>