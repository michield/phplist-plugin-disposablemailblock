<?php

class disposablemailblock extends phplistPlugin {
  public $name = "Disposable email address blocker";
  public $coderoot = '';
  public $version = "0.1";
  public $authors = 'Michiel Dethmers';
  public $enabled = 1;
  public $description = 'Disallows signing up to the newsletter with a disposable email';
  public $documentationUrl = 'https://resources.phplist.com/plugin/preventdisposable';
  
  ## more to add: http://www.spambog.com/en/instructions.htm
  
  private $disposable_domains = array(
    ## mailinator
    'mailinator.com',
    'supergreatmail.com',
    'spamthisplease.com',
    'letthemeatspam.com',
    'chammy.info',
    'devnullmail.com',
    'bobmail.info',
    'sendspamhere.com',
    'spamherelots.com',
    'sogetthis.com',
    'mailinator.net',
    'safetymail.info',
    'binkmail.com',
    'tradermail.info',
    'thisisnotmyrealemail.com',
    'veryrealemail.com',
    'mailinator2.com',
    'notmailinator.com',
    'zippymail.info',
    'suremail.info',
    'mailismagic.com',
    'mailtothis.com',
    'reallymymail.com',
    'mailtothis.com',
    'monumentmail.com',
    'spambooger.com',
    

    ## and a mailinator copycat
    'mytrashmail.com',
    'mt2014.com',
    'thankyou2010.com',
    'thankyou2010.com',
    'trash2009.com',
    'mt2009.com',
    'trashymail.com',
    'mytrashmail.com',
    'mailmetrash.com',

    ## and another one
    'spamfree24.org',
    
    ## there are too many :-(
    # guerrillamail.com
    'sharklasers.com',
    'guerrillamailblock.com',
    'guerrillamail.com',
    'guerrillamail.net',
    'guerrillamail.biz',
    'guerrillamail.org',
    'guerrillamail.de',
    'spam4.me',
    
    'fakeinbox.com',
    
    # getairmail.com
    'getairmail.com',
    'vidchart.com',
    'dealja.com',
    'consumerriot.com',
    'tagyourself.com',
    'whatiaas.com',
    'yyou.co.uk',
    'whatsaas.com',
    'whatiaas.com',
    'whatpaas.com',
    'broadbandninja.com',
    
    'dispostable.com',
    
    #yopmail.com
    'yopmail.com',
    'yopmail.fr',
    'yopmail.net',
    'cool.fr.nf',
    'jetable.fr.nf',
    'nospam.ze.tc',
    'nomail.xl.cx',
    'mega.zik.dj',
    'speed.1s.fr',
    'courriel.fr.nf',
    'moncourrier.fr.nf',
    'monemail.fr.nf',
    'monmail.fr.nf',
    'ypmail.webarnak.fr.eu.org',
    
    # 10minutemail.com
    'rmqkr.net',
    '10minutemail.com',
    'drdrb.net',
    
    'br.mintemail.com',
    
    'mailcatch.com',
    '1800newcareer.co.cc',
    'b.pythonboard.de',
    'etsnt.co.uk',
    'gaudiumetspes.happyforever.com',
    'harvard.edu.tr.vu',
    'lowiq.linux-board.com',
    'mailcatch.com',
    'mailcatch.legendoftavlon.com',
    'mailcatch.loveafraid.com.ar',
    'mailsto.co.cc',
    'rockuniverze.co.cc',
    
    ##fakemailgenerator.com
    'cuvox.de',
    'armspy.com',
    'dayrep.com',
    'einrot.com',
    'fleckens.hu',
    'gustr.com',
    'jourrapide.com',
    'rhyta.com',
    'superrito.com',
    'teleworm.us',

    ##from https://github.com/ivolo/disposable-email-domains
    '0x01.gq',
    '0x01.tk',
    '10mail.org',
    '33m.co',
    '33mail.com',
    '3utilities.com',
    'acusupply.com',
    'adultvidlite.com',
    'aji.kr',
    'anonaddy.com',
    'anonaddy.me',
    'anonbox.net',
    'anyalias.com',
    'bandband1.com',
    'bei.kr',
    'bel.kr',
    'beo.kr',
    'bfo.kr',
    'bho.kr',
    'biz.st',
    'bko.kr',
    'blueauramassage.com',
    'bum.net',
    'cad.edu.gr',
    'chickenkiller.com',
    'cid.kr',
    'cko.kr',
    'cloudns.asia',
    'cloudns.cc',
    'cloudns.cx',
    'coms.hk',
    'creou.dev',
    'cu.cc',
    'dbo.kr',
    'ddns.net',
    'defaultdomain.ml',
    'dko.kr',
    'dmtc.edu.pl',
    'dns-cloud.net',
    'dnsabr.com',
    'dnses.ro',
    'doy.kr',
    'drope.ml',
    'dropmail.me',
    'dzalaev-advokat.ru',
    'e4ward.com',
    'edu.auction',
    'efo.kr',
    'eho.kr',
    'ely.kr',
    'email-temp.com',
    'emailfake.com',
    'emailfake.ml',
    'emailfreedom.ml',
    'emlhub.com',
    'emlpro.com',
    'emltmp.com',
    'emy.kr',
    'enu.kr',
    'eny.kr',
    'escritossad.net',
    'ese.kr',
    'esy.es',
    'ewa.kr',
    'exi.kr',
    'fackme.gq',
    'fassagforpresident.ga',
    'firste.ml',
    'flu.cc',
    'foy.kr',
    'gmail.gr.com',
    'gmeil.me',
    'gok.kr',
    'grigio.cf',
    'haddo.eu',
    'higogoya.com',
    'hix.kr',
    'hiz.kr',
    'hmail.us',
    'hopto.org',
    'hostingarif.me',
    'idn.vn',
    'iesco.info',
    'igg.biz',
    'iki.kr',
    'ilovemyniggers.club',
    'imouto.pro',
    'info.tm',
    'irr.kr',
    'it2-mail.tk',
    'jil.kr',
    'jto.kr',
    'junnuok.com',
    'justemail.ml',
    'kadokawa.top',
    'kro.kr',
    'lal.kr',
    'laste.ml',
    'lbe.kr',
    'lei.kr',
    'lko.co.kr',
    'lko.kr',
    'll47.net',
    'lofteone.ru',
    'lom.kr',
    'lostandalone.com',
    'loudcannabisapp.com',
    'loy.kr',
    'luk2.com',
    'luksarcenter.ru',
    'luo.kr',
    'lyrics-lagu.me',
    'mail-temp.com',
    'mail0.ga',
    'marrone.cf',
    'mbe.kr',
    'mebelnovation.ru',
    'mintemail.com',
    'mko.kr',
    'mlo.kr',
    'mooo.com',
    'mp-j.cf',
    'mp-j.ga',
    'mp-j.gq',
    'mp-j.ml',
    'mp-j.tk',
    'mr-meshkat.com',
    'mrossi.cf',
    'mrossi.gq',
    'mrossi.ml',
    'msdc.co',
    'museumplanet.com',
    'my.id',
    'my3mail.cf',
    'my3mail.ga',
    'my3mail.gq',
    'my3mail.ml',
    'my3mail.tk',
    'myeslbookclub.com',
    'mymy.cf',
    'mysafe.ml',
    'nafko.cf',
    'netricity.nl',
    'nko.kr',
    'npv.kr',
    'nuo.co.kr',
    'nuo.kr',
    'nut.cc',
    'oazis.site',
    'obo.kr',
    'okezone.bid',
    'one.pl',
    'oovy.org',
    'orangotango.ml',
    'otherinbox.com',
    'owa.kr',
    'owh.ooo',
    'oyu.kr',
    'pafnuty.com',
    'poderosamulher.com',
    'porco.cf',
    'poy.kr',
    'probatelawarizona.com',
    'pubgm.website',
    'qbi.kr',
    'ragel.me',
    'rao.kr',
    'rko.kr',
    'rosso.ml',
    'row.kr',
    'safe-mail.gq',
    'sagun.info',
    'sborra.tk',
    'seluang.com',
    'shp7.cn',
    'siambretta.com',
    'skodaauto.cf',
    'solidplai.us',
    'spamtrap.ro',
    'ssanphone.me',
    'statuspage.ga',
    'stonedogdigital.com',
    'stop-my-spam.pp.ua',
    'storeyee.com',
    'supere.ml',
    'svblog.com',
    'sytes.net',
    'tandy.co',
    'tempremail.cf',
    'tempremail.tk',
    'tgwrzqr.top',
    'thepieter.com',
    'thinktimessolve.info',
    'thumoi.com',
    'tko.co.kr',
    'tko.kr',
    'tmo.kr',
    'toi.kr',
    'tourbalitravel.com',
    'traveldesk.com',
    'trillianpro.com',
    'uha.kr',
    'uko.kr',
    'umy.kr',
    'uny.kr',
    'uola.org',
    'upy.kr',
    'us.to',
    'usa.cc',
    'uu.gl',
    'uvy.kr',
    'uyu.kr',
    'vay.kr',
    'vba.kr',
    'veo.kr',
    'viola.gq',
    'volvo-xc.tk',
    'web.id',
    'weprof.it',
    'wil.kr',
    'xxi2.com',
    'ye.vc',
    'yertxenor.tk',
    'yomail.info',
    'zalvisual.us',
    'zeroe.ml',


  );
    

  function __construct() {
    parent::phplistplugin();
  }

  function adminmenu() {
    return array(
    );
  }
  
  function upgrade($previous) {
    parent::upgrade($previous);
    return true;
  }
  
  function isYahooDisposable($address) {
    if (strpos($address,'@') !== false) {
      list($user,$domain) = explode('@',$address);
      if (stripos($domain,'yahoo') !== false) {
        return preg_match('/^[\w+]-[\w+]@/',$user);
      }
    }
    return false;
  }
  
  function isDisposable($address) {
    if ($this->isYahooDisposable($address)) {
      return true;
    }
    if (strpos($address,'@') !== false) {
      list($user,$domain) = explode('@',$address);
      return in_array(strtolower($domain),$this->disposable_domains);
    }
    return false;
  }
  
  function displaySubscribepageEdit($data) {
    
    if (!isset($data['disposable_mailblocker_text'])) {
      $data['disposable_mailblocker_text'] = s('Please enter a valid email address to subscribe to our newsletters');
    }
    if (isset($data['disposable_mailblocker_enable'])) {
      $enabled = 'checked="checked"';
    } else {
      $enabled  = '';
    }
    
    $enableHTML = s('Enable disposable email address blocker').': <input type="checkbox" name="disposable_mailblocker_enable" value="1" '.$enabled.' />';
    $errorMSG = s('Enter text to display when blocked'). ': <input type="text" name="disposable_mailblocker_text" value="'.htmlspecialchars($data['disposable_mailblocker_text']).'" />';
    return $enableHTML.'<br/>'.$errorMSG;
  }

  function processSubscribePageEdit($id) {
    
    if (!empty($_POST['disposable_mailblocker_enable'])) {
      $enabled = 1;
    } else {
      $enabled = 1;
    }
    
    Sql_Query(sprintf('replace into %s (id,name,data) values(%d,"disposable_mailblocker_enable","%s")',
       $GLOBALS['tables']["subscribepage_data"],$id,sql_escape($enabled)));
    Sql_Query(sprintf('replace into %s (id,name,data) values(%d,"disposable_mailblocker_text","%s")',
       $GLOBALS['tables']["subscribepage_data"],$id,sql_escape($_POST['disposable_mailblocker_text'])));
  }

  
  function displaySubscriptionChoice($pageData, $userID = 0) {
    return;
  }
 
  function validateSubscriptionPage($pageData) {
    if (!empty($pageData['disposable_mailblocker_enable']) && isset($_POST['email'])) {
      if ($this->isDisposable($_POST['email'])) {
        if (!empty($pageData['disposable_mailblocker_text'])) {
          return $pageData['disposable_mailblocker_text'];
        } else {
          return s('Please enter a valid email address to subscribe to our newsletters');
        }
      }
    }
    return '';
  }
  
  function canSend($messagedata,$subscriberdata) {
      if ($this->isDisposable($subscriberdata['email'])) {
          return false;
      }
      return true;
      
  }
 
  function validateEmailAddress($emailAddress) {
     if ($this->isDisposable($emailAddress)) {
         return false;
     }
     return true;
  }


}
