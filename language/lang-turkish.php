<?php
/**
 * mxBoard, pragmaMx Module
 * Copyright by pragmaMx Developer Team - http://www.pragmamx.org
 *
 * $Author: PragmaMx $
 * $Revision: 6 $
 * $Date: 2015-07-08 09:07:06 +0200 (mer. 08 juil. 2015) $
 *
 * based on eBoard v1.1, rewrite and modified by
 * vkpMx-Developer-Team (http://www.maax-design.de)
 * Original source-code made by the XMB-team
 * (XMB-Forum, http://www.xmbforum.com), modified for nukestyle-systems
 * by Trollix (XForum, http://www.trollix.com).
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Thx to Catmandu, http://www.keloglan.de
 * turkish language file, corrections and additions by Sıtkı Özkurt from www.akcaabat-acisu.com
 */

defined('mxMainFileLoaded') or die('access denied');
if (defined('MXB_LANGFILE_INCLUDED')) return true;
define('MXB_LANGFILE_INCLUDED', true);

define("_LASTREPLY1", "Gün");
define("_TEXTAT", "Saat");
define("_TEXTSUBJECT", "Konu:");
// define("_TEXTAUTHOR", "Konuyu açan:");
// define("_TEXTREPLIES", "Cevaplar:");
// define("_TEXTVIEWS", "Okunma sayısı:");
define("_TEXTLASTPOST", "Son verilen Cevap:");
define("_TEXTPOSTON", "Yazılış Tarihi:");
define("_TEXTUSERNAME", "Üye ismi:");
define("_TEXTPASSWORD", "Kodun:");
define("_TEXTEMAIL", "E-Mail'in:");
define("_TEXTSITE", "Siten:");
define("_TEXTVIEWPRO", "Profiline gir");
define("_TEXTICON", "İşaret:");
define("_TEXTMESSAGE", "Mesaj:");
define("_POSTMSG", "Teşekkürler, yazdığın cevap kayıt edilmiştir. Şimdi tekrar konu başlığına yönlendirileceksin.");
define("_REPLYMSG", "Teşekkürler, yazdığın cevap kayıt edilmiştir. Şimdi tekrar konu listesine yönlendirileceksin.");
define("_TEXTNEVER", "Hiç");
define("_TEXTREGISTER", "Üye Kayıdı");
define("_TEXTMEMBERLIST", "Üye listesi");
define("_TEXTREGISTERED", "kayıt olmuş:");
define("_TEXTPWINCORRECT", "Yanlış Kod");
define("_TEXTPOSTNEW", "Yeni Konu aç");
define("_TEXTPOSTREPLY", "Cevap yaz");
// define("_TEXTPOSTS", "Cevaplar:");
define("_PWNOMATCH", "Verdiğiniz Kodlar birbirine uymuyor.");
define("_NOMEMBER", "Bir Üye seçmen gerek");
define("_OPENTOPIC", "Açılmış Konu");
define("_HOTTOPIC", "%d 'den fazla cevap var bu konu da");
define("_LOCKTOPIC", "Kilitlenmiş bir konu");
define("_TEXTEDITPRO", "Profilini Değiştir");
define("_TEXTPROFILE", "Profil");
define("_EDITEDPRO", "Profilin yenilendi. Şimdi Forum'un baş sayfasına yönlendirileceksin.");
define("_TEXTAIM", "Sevdiğim Şeyler:");
define("_LOGGEDIN", "Sisteme girdin");
define("_NOTLOGGEDIN", "Sisteme girmen gerek");
define("_TEXTLOCATION", "Kaldığım Yer:");
define("_TEXTBIO", "ek bilgiler:");
define("_TEXTCP", "Kontrol Paneli");
define("_NOTADMIN", "Üzgünüz, buraya girmek için site kurucusu olman gerek.");
define("_TEXTSETTINGS", "Ayarlar");
define("_TEXTLANGUAGE", "Dil:");
define("_TEXTBBNAME", "Forum ismi:");
define("_TEXTPPP", "Sayfa:");
define("_TEXTHOTTOPIC", "HotTopic için cevap sayısı:");
define("_TEXTSUBMITCHANGES", "Değiştirildi");
define("_TEXTSETTINGSUPDATE", "Ayarlar kaydedildi!");
define("_TEXTFORUMS", "Forum Bölümleri");
// define("_TEXTINDEX", "Forum Başlığı");
define("_TEXTNEWFORUM", "Yeni Forum:");
define("_TEXTFORUMUPDATE", "Forum bölümleri yenilendi!");
// define("_TEXTSEARCH", "Ara");
define("_TEXTSRCHUNAME", "Üye ismi:");
define("_NORESULTS", "Aradığın bulunamadı");
define("_TEXTSIG", "İmza:");
define("_TEXTDISSMILEYS", "İşaretleri kapatmak istermisiniz?");
define("_TEXTUSESIG", "İmza kullanılsın mı?");
define("_TEXTSHOWEMAIL", "E-mail'ini başkası görebilir mi?");
define("_TEXTOPTIONS", "Ayarlar:");
define("_TEXTTHEME", "Tema:");
define("_TEXTMODS", "Moderatörler");
define("_MULTMODNOTE", "Bir den fazla moderatör kullanmak için, isimlerin arasında mesafe bırakınız (meselà: Ali, Fatma, veya başka bir isim)");
define("_TEXTMODUPDATE", "Moderatörler yenilendi!");
define("_EVALINDEXSTATS", 'define("_INDEXSTATS","<b>$threads</b> topics / <b>$posts</b> posts / <b>$members</b> members");');
define("_STATS41", "Yeni Üyemiz:");
define("_TEXTTPP", "Sayfa:");
define("_TEXTBOARDLOGO", "Forum Logonun URL'u: (yoksa eğer, burayı boş bırakın)");
define("_TEXTEDITPOST", "Bu cevabı düzelt");
define("_EDITPOSTMSG", "Yazı Değiştirildi. Şimdi tekrar konu başlığına yönlendirileceksin");
define("_TEXTDELETE", "! Bu Cevabı Sil !");
define("_NOEDIT", "Dikkat, bu yazıyı Değiştiremez veya silemezsin.");
define("_TEXTSTATUSXF", "Forum - Durumu:");
define("_TEXTSTATUS", "Durum:");
define("_TEXTDELETETHREAD", "Bu konuyu sil");
define("_TEXTNOACTION", "Üzgünüz, bunu yapmak için gerekli hakka sahip değilsin");
define("_DELETETHREADMSG", "Konu silindi. Şimdi tekrar konu başlığına yönlendirileceksin");
// define("_TEXTMEMBERS", "Üye");
define("_TEXTFORUM", "Forum:");
define("_TEXTMODERATOR", "Moderatör:");
// define("_TEXTTOPICS", "Konular:");
define("_TEXTVALUE", "Değer:");
define("_TEXTSETTING", "Ayarlar:");
define("_TEXTDELETEQUES", "Silinsin mi?");
define("_TEXTORDER", "Sıraya göre düzelt:");
define("_TEXTFORUMNAME", "Forum ismi:");
define("_TEXTPRIVQUES", "Özel mi?");
define("_PRIVFORUMMSG", "Üzgünüz, Forum'a girmek için gerekli hakka sahip değilsin.");
define("_TEXTTHEMES", "göster");
define("_TEXTTHEMENAME", "Görüntü ismi:");
define("_TEXTDEFAULT", "Genel mi olsun");
define("_TEXTTHEMEUPDATE", "Görüntü yenilendi!");
define("_TEXTDETAILS", "Ayrıntı'lar");
define("_TEXTHEMENAME", "Görüntü ismi:");
define("_TEXTBGCOLOR", "Arka Renk:");
define("_TEXTALTBG1", "Renk #1:");
define("_TEXTALTBG2", "Renk #2:");
define("_TEXTLINKXF", "Link Rengi:");
define("_TEXTBORDER", "Kenar Rengi:");
define("_TEXTBORDERWIDTH", "Kenar genişliği:");
define("_TEXTHEADER", "Ana bölüm rengi:");
define("_TEXTHEADERTEXT", "Ana bölüm yazı rengi:");
define("_TEXTTOP", "Tablo uç rengi:");
define("_TEXTCATCOLOR", "Kategori rengi:");
define("_TEXTTABLETEXT", "Tablo yazı rengi:");
// define("_TEXTNEWTOPIC", "Yeni Konu");
define("_TEXTDESC", "Ayrıntı:");
define("_TEXTTEXT", "yazı rengi:");
define("_TEXTNEWTHEME", "Yeni tema");
define("_TEXTMODBY", "Moderatör tarafından:");
define("_LASTACTIVE", "En son aktif olan:");
define("_BADNAME", "Yanlış üye ismi");
define("_TEXTICQ", "Göz rengi:");
define("_TEXTFAQ", "Sık sorulanlar");
define("_TEXTSMILIES", "İşaretler");
define("_TEXTBBCODE", "BB Kodu");
define("_BBCODEINFO", "BB-Kodu'nu, basit HTML kodlarını yazınızı süslemek için kullanabilirsiniz.<br /><br />
[b]Text hier[/b] &nbsp; <b>yazıyı buraya</b> (kalın yazı)<br /><br />
[i]Text hier[/i] &nbsp; <i>yazıyı buraya</i> (italik yazı)<br /><br />
[u]Text hier[/u] &nbsp; <u>yazıyı buraya</u> (alti çizilmiş yazı)<br /><br />
[url]http://www.php.net[/url] &nbsp; <a href=\"http://www.php.net\">http://www.php.net</a> (Link)<br /><br />
[url=http://www.php.net]Homepage von PHP[/url] &nbsp; <a href=\"http://www.php.net\">Homepage von PHP</a> (Link)<br /><br />
[email]nh@xmbforum.com[/email] &nbsp; <a href=\"mailto:nh@xmbforum.com\">nh@xmbforum.com</a> (E-Mail Link)<br /><br />
[email=nh@xmbforum.com]E-mail Me![/email] &nbsp; <a href=\"mailto:nh@xmbforum.com\">E-mail Me!</a> (E-Mail Link)<br /><br />
[quote]Text hier[/quote] &nbsp; <blockquote><small>quote:</small><hr />Text hier<hr /></blockquote> (Zitierter Text)<br /><br />
[img]http://www.php.net/images/logos/php-med-trans-light.gif[/img] &nbsp; <img src=\"http://www.php.net/images/logos/php-med-trans-light.gif\" /> (Bild)<br /><br />
[img=50x50]http://www.php.net/images/logos/php-med-trans-light.gif[/img] &nbsp; <img src=\"http://www.php.net/images/logos/php-med-trans-light.gif\" height=\"50\" width=\"50\" /> (In der Grösse ver&auml;ndertes Bild)
<br /><br />[color=red]Bu renk kırmızı[/color] &nbsp; <font color=\"red\">Bu Renk kırmızı</font> (renkli yazı)<br /><br />
[size=3]Bu yazının büyüklüğü 3[/size] &nbsp; <font class=\"title\">Bu yazının büyüklüğü 3</font> (büyütülmüs yazı)<br /><br />
[font=Tahoma]Bu yazı biçimi Tahoma[/font] &nbsp; <font face=\"Tahoma\">Bu yazı biçimi Tahoma</font> (başka yazı)<br /><br />
[align=Center]Bu da ortalanmış[/align] &nbsp; <p align=\"center\">Bu da ortalanmış</p> (Düzen verilmiş yazı)<br /><br />");
define("_CLOSEDMSG", "Malesef, bu konu kilitlenmiş. Bu yüzden konuya cevap yazamazsın.");
define("_TEXTCLOSETHREAD", "Konuyu kapat");
define("_CLOSETHREADMSG", "Bu konuyu kapattın/açtın. Şimdi tekrar konu başlığına yönlendirileceksin");
define("_TEXTOPENTHREAD", "Konu aç");
define("_TEXTFROM", "Bu kişi tarafından:");
define("_TEXTSENT", "Gönderildi:");
define("_TEXTSENTON", "Gönderiliş tarihi");
define("_TEXTMOVETHREAD", "Konuyu başka bölüme ekle");
define("_TEXTMOVETO", "Göndermek istediğin bölümü seç:");
define("_MOVETHREADMSG", "Teşekküler. Konu başka bölüme eklenmiştir. Şimdi tekrar konu başlığına yönlendirileceksin.");
define("_NOPOSTS", "Bu tema altında başlık yok");
define("_TEXTYOU", "Sen");
define("_TEXTTO", "Alıcı:");
define("_TEXTBY", "Yazar");
define("_TEXTADMIN", "Yönetici");
define("_TEXTMOD", "Moderatör");
define("_TEXTMEM", "Üye");
// define("_TEXTAVATAR", "Resim:");
define("_TEXTNONE", "Hiç bir");
define("_NEWPOSTS", "yeni konu/cevap son girişinden itibaren");
define("_NONEWPOSTS", "son girişinden itibaren yeni konu/cevap yollanmadı");
define("_CLOSEDNOTE", "Üzgünüz, bu forum şu an kapalı.");
define("_OPENNEW", "Yeni başlık ve cevap içeren yeni ana konu ");
define("_TEXTBSTATUS", "Forum durumu:");
define("_TEXTON", "Açık");
define("_TEXTOFF", "Kapalı");
define("_SRCHBYFORUM", "Forum'da:");
define("_TEXTALL", "Hepsi");
// define("_WHOSONLINE", "Kim çevrimiçi");
// define("_WHOSONLINE1", "Bu kadar");
// define("_WHOSONLINE2", "Misafir ve");
// define("_WHOSONLINE3", "Üye çevrimiçi.");
define("_ONSTATUS", "Çevrimiçi durumu:");
define("_TEXTONLINE", "Çevrimiçi");
define("_TEXTOFFLINE", "Çevrimdışı");
define("_MEMPOSTS", "Konular");
define("_MEMREG", "kayıt tarihi");
define("_MEMNAME", "Üye ismi");
define("_ORDERBY", "Göre sırala:");
define("_WHOSONLINE_ON", "İndeks'te kim çevrimiç:");
define("_TEXTPREVIEW", "Konu göster");
define("_TEXTNOSUBJECT", "Başlık vermedin.");
define("_TEXTGO", "Atla");
define("_TEXTFJUMP", "Forum geçişi:");
define("_TEXTTOPTHREAD", "Konuyu en üste sırala");
define("_TEXTUNTOPTHREAD", "Konuyu en üstten indir");
define("_TOPTHREADMSG", "Konuyu en üste sıraladın/en üsten indirdin. Şimdi bölüm anasayfanına yönlendirileceksin");
define("_TEXTYESIP", "Üyenin IP adresi");
define("_TEXTNOIP", "IP adresini göremezsin.");
define("_TEXTGETIP", "IP adresini göster");
define("_TEXTYAHOO", "Sevmediklerim:");
define("_TEXTSMILIEUPDATE", "Gülücükleri güncelle");
define("_TEXTSMILIECODE", "Kod");
define("_TEXTSMILIEURL", "URL");
define("_TEXTNEWSMILIE", "Yeni Gülücük");
define("_BBCODEOFF", "BB Kodunu kapat?");
define("_SEARCHUSERMSG", "Bu üyenin tüm mesajlarını göster");
define("_VIEWALLMEM", "Tüm üyeleri göster");
define("_DELETEBUTTON", "Sil");
define("_TEXTSENDTO", "Alıcı:");
define("_REG_ON", "Üye kaydına izin ver");
define("_TEXTBBOFFREASON", "Eğer forum düştüyse, neden ver");
define("_TEXTBBOFFNOTE", "Forum'a bu nedenden dolayı ulaşılamıyor:");
define("_TEXTNOSUB", "Başlık yok");
define("_TEXTSORTBY", "Göre Sırala:");
define("_TEXTPOSTNUM", "Konu sayısı");
define("_TEXTALPHA", "Alfabe'ye göre");
define("_TEXTREGDATE", "kayıt tarihi");
define("_TEXTHTMLIS", "HTML");
define("_TEXTSMILIESARE", "Gülücükler");
define("_TEXTBBCODEIS", "BB Kodu");
define("_TEXTBBCODEFIND", "Bul");
define("_TEXTBBCODEREPLACE", "İle Değiştir");
define("_TEXTCENSORFIND", "Bul");
define("_TEXTCENSORREPLACE", "İle Değiştir");
define("_TEXTCENSORUPDATE", "Yasak kelimeleri güncelle!");
define("_TEXTALLOW", "İzin ver:");
define("_TEXTHTML", "HTML");
define("_TEXTCENSORS", "Yasaklar");
define("_TEXTCUSSTATUS", "Kendi durumun:");
define("_TEXTUSERRANKS", "Üye konumu");
define("_TEXTNEWRANK", "Yeni konum:");
define("_TEXTRANKINGSUPDATE", "Üye konumlarını güncelle!");
define("_TEXTMEMBERSUPDATE", "Üye güncellendi!");
define("_TEXTSEARCHFOR", "Ara:");
define("_TEXTBANNED", "Yasaklandı");
define("_REGGEDONLY", "Forum'u gösterbilmen için sisteme kayıtlı olman gerek.");
define("_TEXTREGGEDONLY", "Bu Forum'u sadece kayıtlı üyelere göster?");
define("_TEXTOR", "yada");
define("_TOPPEDPREFIX", "En üste çıkar");
define("_TEXTSTARS", "Yıldızlar:");
define("_SMILIESLIST", "Gülücük listesi");
define("_TEXTCLICKTOINSERT", "yazıya eklemek için gülücüğün üstüne tıkla.");
define("_TEXTEDITON", "tarihinde düzeltildi");
define("_TEXTFLOOD", "Yeni posta yollamak için bekleme saniyesi (Flood-Kontrolü)");
define("_FLOODPROTECT", "Son yazını %d saniye önce yazdın, yeni bir yazıyı bu kadar kısa sürede yollayamazsın. Yanlışlıkla iki kere yolladıysan, sadece birincisi yollandı, ikincisi durduruldu.");
define("_TOCONT", "devam etmek için.");
define("_SHOWTOPICS", "konuları göster");
define("_DAY1", "dünün");
define("_DAY5", "gecen 5 günün");
define("_DAY15", "gecen 15 günün");
define("_DAY30", "gecen 30 günün");
define("_DAY60", "gecen 60 günün");
define("_DAY100", "gecen 100 gününTage");
define("_LASTYEAR", "gecen yılın");
define("_BEGINNING", "başlat");
define("_SORTBY", "ve göre sirala");
define("_ASC", "küçükten büyüçe");
define("_DESC", "büyükten küçüğe");
define("_UNREG", "Ziyaretçi");
define("_TEXTSUPERMOD", "Süper Moderatör");
define("_TEXTMPP", "Sayfada gösternen üye sayısı");
define("_BUMPTHREADMSG", "Konunun son postası güncellendi. Şimdi yine konu başlıklarına yönlendirileceksiniz  ");
define("_TEXTBUMPTHREAD", "yazılış tarihini güncelle");
define("_TEXTREPLY", "Cevap");
// define("_TEXTCATSONLY", "Anasayfada sadece kategorileri göster?");
define("_TEXTHIDEPRIV", "Özel Forum'ları katılma hakkı olmayan üyelerden gizle?");
define("_TEXTSRCHUSR", "Üye ara:");
define("_TEXTSHOWSORT", "Sıralama menüsünü Forum'da göster?");
define("_TEXTTOPIC", "Konu");
define("_TEXTPRINTVER", "yazıcı-Görünümü");
define("_NEXTTHREAD", "Diğer");
define("_LASTTHREAD", "Ön");
// define("_TEXTALLOWAVATARS", "Avatarlar:");
define("_REGQUES", "");
define("_TEXTSUBMIT", "Gönder");
define("_TEXTGUEST", "Tanınmayan");
define("_TEXTGUESTPOSTING", "Anonım posta?");
define("_EMAILVERIFY", "E-Mail doğrulaması (şans şifresi gönder?");
define("_TEXTNEWSLETTER", "Site Haberleri");
define("_TEXTNEWSLETTERSUBMIT", "Site Haberleri adresine gönderildi");
define("_TEXTGETNEWS", "Editörden site haberleri'ni al?");
define("_TEXTOFTOTPOSTS", "tüm postalardan");
define("_TEXTMESPERDAY", "Günlük konu sayısı");
define("_TEXTPROFOR", "Profil'i");
define("_BANNEDMESSAGE", "Bu forum'dan atıldın. Artik ne konuları gösteryebilir, ne yeni cevap yazabilir nede yeni konu başlatabilirsin. ");
define("_TEXTNOFORUM", "Seçilen Forum bulunamıyor.");
define("_TEXTNOTHREAD", "Seçilen konu bulunamıyor.");
define("_TEXTBBRULES", "Forum kuralları:");
define("_TEXTBBRULESTXT", "Forum kuralları, eğer açıklarsa:");
define("_TEXTAGREE", "Tamam");
define("_TEXTTOPICREVIEW", "Konu tekrar görünümü");
define("_EVALTREVLT", 'define("_TREVLTMSG","Uzun bir konu, görmek için <a href=\"$threadlink\">buraya</a> tikla.");');
define("_TEXTPRIV", "Özel");
define("_TEXTTIME", "Zaman:");
define("_TEXTGUEST1", "Misafir");
define("_TEXTPREVIOUS", "Geri");
define("_TEXTUPGRADE", "Güncelleme");
define("_UPGRADE", "Upgrade.txt içindeki MySQL'li güncelleme için aşağya ekle.");
define("_UPGRADESUCCESS", "Güncelleme tamamlandı!");
define("_TEXTUSERLIST", "Üye-giriş listesi (Virgülle ayır):");
define("_TEXTWIDTH", "Tablo genişliği:");
// define("_TEXTNEWTOPICIMG", "\"Yeni Konu\" Resim-URL: (link için boş bırak)");
// define("_TEXTREPLYIMG", "\"Cevapla\" Resim-URL: (link için boş bırak)");
define("_TEXTSEARCHSTATUS", "Arama durumu:");
define("_SEARCHOFF", "Arama işlemleri şu an kapalı.");
define("_TEXTFAQSTATUS", "Sık sorulanlar'ın durumu:");
define("_FAQOFF", "Sık sorulanlar şu an kapalı.");
define("_TEXTMEMLISTSTATUS", "Üye listesi durumu:");
define("_MEMLISTOFF", "Üye liste işlemleri şua n kapalı.");
define("_TEXTPICONSTATUS", "Postaİşaret durumu:");
define("_TEXTEDIT", "düzenle");
define("_TEXTEMAIL1", "E-Posta");
define("_TEXTSITE1", "Sayfa");
define("_TEXTIP", "IP");
define("_TEXTBACKTO", "Geriye");
define("_TEXTSPACE", "Tablo arası:");
define("_TEXTSTAFFONLY", "Sadece tim:");
define("_TEXTNEWGROUP", "Yeni kategori");
define("_TEXTNEWFORUM1", "Yeni forum");
define("_TEXTMOREOPTS", "Daha fazla seçenek...");
define("_TEXTFORUMOPTS", "Forum seçenekleri:");
define("_TEXTAVASTATUS", "Avatar durumu:");
define("_TEXTREPORTPOST", "Posta haberi bildir");
define("_REPORTSUBJECT", "Bildirilmiş Postalar...");
define("_REPORTMESSAGE", "Bu Posta bir üye tarafından bildirildi, lütfen onu araştır:");
define("_REPORTMSG", "Teşekkürler. Posta Editör tarafından haber olarak iletildi. Yine konu ba%#351;lıklarına yönlendirileceksin");
define("_NOREG", "kayıt mecbur deçil (kullanıcılar her isim altında yazı posta iletebilir):");
define("_GZIPCOMPRESSION", "Gzip-Sayfakompresyonunu kullan<br /><small>PHP4 tavsiye edilir</small>");
define("_TEXTADDED", "eklendi:");
define("_TEXTNEWIP", "Yeni IP:");
define("_CURRENTIP", "Güncel IP-adresiniz");
define("_IPWARNING", "<br /><b>Dikkat!</b> IP-Adresiniz yasaklılar listesinde. sürekli olarak girişiniz engellenecek, eğer çıkarsaniz.");
define("_MULTIPNOTE", "Not: Birden fazla IP-Adresini aynı anda yasaklamak için, 4'ünü birden * İşaretiyle Değiştir  (ex: 220.194.45.*)");
define("_TEXTIPUPDATE", "IP-Yasakları güncellendi!");
define("_INVALIDIP", "geçersiz IP-formatı");
define("_EXISTINGIP", "Bu IP zaten yasaklı");
define("_TEXTBANIP", "IP adresini yasakla");
define("_TEXTUNBANIP", "IP adres yasağını kaldır");
define("_TEXTBANNEDIP", "<br />Bu IP şu an yasaklı.");
define("_EVALIPMASK", 'define("_BANNEDIPMASK","<br />Bu IP adresi bir maske ile yasaklandı ($ipmask).<br />Eğer <i>IP adres yasağını kaldır\'a gidersen</i>, tüm bu maske altında yasaklı IP\'lerin yasağını kaldırırsın.");');
define("_TEXTIPBAN", "IP adresini yasakla");
define("_TEXTBOARDURL", "Tam Forum-URL:");
define("_TEXTTOPLEVEL", "Top Level Forum/Forumlar");
define("_COPPAAGREE", "13 yaşindayım ve kabul ediyorum");
define("_COPPASTATUS", "COPPA Anlaşma durumu:");
define("_TEXTCOPPA", "COPPA kabul");
define("_TEXTCOPPAWORDING", "Bu forum'da COPPA (Child's Online Privacy Protection Act) anlaşması açk. Bu forum'u kullanabilmen için 13 yaşında olman gerek(kayıt ol, postala, vs.). Alt düğmeye tıkladığın anda 13 yaşında veya daha 13 yaş üstünde olduğunu açıklıyorsun.");
define("_TEXTTIMEFORMAT", "Zaman formatı:");
define("_TEXT24HOUR", "24 Saat");
define("_TEXT12HOUR", "12 Saat");
define("_EVALOFFSET", 'define("_TEXTOFFSET","Zaman-Offset (GMT şuan $currdate)");');
define("_TEXTLFROM", "Gönderen:");
define("_AWEEK", "bir haftadan");
define("_MONTH1", "bir aydan");
define("_MONTH3", "3 aydan");
define("_MONTH6", "6 aydan");
define("_TEXTMSN", "İlgi duyduğun şeyler");
define("_TEXTPRUNE", "Temizle");
define("_PRUNEWHERE", "Konu sil, eğer konu şu tarihten eski ise:");
define("_PRUNEIN", "Forum'da temizleme ve silme :");
define("_ADMINEMAIL", "Editör E-Mail'i:");
define("_WHOPOSTOP1", "Kim yeni posta yazabilir?");
define("_WHOPOSTOP2", "Kim cevap yazabilir?");
define("_WHOCANPOST", "Kim posta gönderebilir?");
define("_WHOCANPOST11", "Tüm kullanıcılar posta yollayabilir,");
define("_WHOCANPOST12", "Yöneticiler yeni konu yollayabilir,");
define("_WHOCANPOST13", "Yöneticiler ve Moderatörler yeni konu açabilir,");
define("_WHOCANPOST14", "Yeni konu gönderelemez ,");
define("_WHOCANPOST21", "Tüm kullanıcılar cevap yazabilir,");
define("_WHOCANPOST22", "Editörler cevap yazabilir,");
define("_WHOCANPOST23", "Editörler ve Moderatörler cevap yazabilir,");
define("_WHOCANPOST24", "Cevap yasak,");
define("_WHOCANPOST31", "ve anonim postalar mümkün.");
define("_WHOCANPOST32", "ve <b>anonim Postalar yasak</b>.");
define("_POSTPERMERR", "Buraya postalama hakkın yok.");
define("_TEXTPOSTPERMISSION1", "Normal");
define("_TEXTPOSTPERMISSION2", "Editörler");
define("_TEXTPOSTPERMISSION3", "Editörler/Moderatörler");
define("_TEXTPOSTPERMISSION4", "Postalama yok");
// define("_TEXTSTATS", "İstatistik");
define("_TEXTNOONE", "kimse");
define("_EVALSTATS1", 'define("_STATS1","$bbname üzeri:");');
define("_EVALSTATS2", 'define("_STATS2","$posts posta");');
define("_EVALSTATS3", 'define("_STATS3","$threads konu");');
define("_EVALSTATS4", 'define("_STATS4","$forums forumlar ($forumsa active)");');
define("_EVALSTATS5", 'define("_STATS5","$members üyeler");');
define("_EVALSTATS51", 'define("_STATS51","$totalus okunuş sayısı");');
define("_EVALSTATS6", 'define("_STATS6","<b>Top $nbitemsinstats - en çok gösternen konu:</b><br /> $viewmost");');
define("_EVALSTATS7", 'define("_STATS7","<b>Top $nbitemsinstats - en çok cevaplanan konu:</b><br /> $replymost");');
define("_EVALSTATS8", 'define("_STATS8","En çok sevilen forum $popforum ile $pop->posts Posta ve $pop->threads konu");');
define("_EVALSTATS9", 'define("_STATS9","$mempost Üye başına konu sayısı");');
define("_EVALSTATS10", 'define("_STATS10","$forumpost Forum\'a göre posta sayısı");');
define("_EVALSTATS11", 'define("_STATS11","$threadreply Konu başına cevap");');
define("_EVALSTATS12", 'define("_STATS12","$postsday Günlük posta sayısı");');
define("_EVALSTATS13", 'define("_STATS13","$membersday Günlük yeni üye");');
define("_EVALSTATS14", 'define("_STATS14","<b>$nbitemsinstats son konu:</b><br /> $latest");');
define("_EVALSTATS15", 'define("_STATS15","$mapercent posta gönderen üyelerin toplam üyelere oranı.");');
define("_REPLIESL", "Cevaplar");
define("_VIEWSL", "göstermeler");
define("_TEXTAVERAGES", "Ortalamalar:");
define("_DATEFORMAT", "tarih formatı <span class=\"tiny\">(mm/dd/yyyy, dd/mm/yy, vs.)</span>:");
define("_STATSPAGE", "İstatistik Durum:");
define("_RANKINFO", "Yolladığın posta sayısına göre bir sıralamaya giriyorsun. Her sıranın kendine özel durumu ve yıldız sayısı var. Altta bu forum'a ait kullanıcı sıralama ayarları görünüyor:");
define("_PICONS", "Posta İşaretleri:");
define("_TEXTNEWPICON", "Yeni Posta İşareti:");
define("_TEXTWITHSTATUS", "durumu ile:");
define("_ANYSTATUS", "her durum");
define("_SIGBBCODE", "Sigs'de BB kodu:");
define("_SIGHTML", "Sigs'de HTML kodu:");
define("_TEXTFONT", "yazı tipi:");
define("_TEXTALTFONT", "Alternatif yazı tipi:");
define("_TEXTBIGSIZE", "Büyük yazı:");
define("_TEXTSMALLSIZE", "Küçük yazı:");
define("_TEXTREASON", "neden:");
define("_IGNORELIST", "İstenmiyenler listesi");
define("_IGNOREMSG", "İstenmiyenler listesi:<br /><small>isimleri virgülle birbirinden ayır (örnek: \"webfr34k, bondman, Ace,\"). Son ismin arkasınada virgül koymayı unutma.</small>");
define("_IGNOREUPDATE", "İstenmiyenler listesini güncelle!");
define("_TEXTDAYSLOG", "girişe kalan günler:");
define("_TEXTNEWSUBF", "Yeni altforum");
define("_EMAILNOTIFYSUBJECT", "Postaya cevap:");
define("_EMAILNOTIFYINTRO", "Bu konuya cevap yazıldı: ");
define("_EMAILNOTIFYINTRO2", "Bu adres altında cevabı okuyabilirsin ");
define("_EMAILNOTIFYEND", "Teşekkürler");
define("_EMAILNOTIFYTOREPLIES", "Yeni cevabı E-Mail aracılığıyla bildir?");
define("_TEXTCONTENTS", "İçerik:");
define("_INDEXSTATSCP", "İçerikte istatistikler: (## topics/ ## posts/ ## members)");
define("_UPGRADENOTE", "Not: Eğer Tablo öneğini Değiştirdiysen, xmb yi Tablo öneği olarak Değiştir");
define("_TEXTSENDVIA", "İle yolla:");
define("_TEXTIPADDRESS", "IP-Adresi:");
define("_REPORTPOSTDISABLED", "Haber verme sistemi şu an kapalı.");
define("_REPORTPOSTSTATUS", "Haber verme durumu:");
define("_SHOWTOTALTIME", "İşlem süresi:<br /><small>Eğer kapalı ise, sayfanın işlem süresi gösterilmeyecek</small>");
define("_TIMEMSG", "içinde işlendi");
define("_TEXTSECONDS", "saniye");
define("_TEXTIMGCODEIS", "[img] Kod");
define("_TEXTIMGCODE", "IMG Kodu");
define("_LASTPOSTIN", "içinde Son posta:");
// define("_LPOSTSTATS", "Son posta");
define("_TOPMSGQUES", "Bu konuyu en üste sırala?");
define("_TEXTSEARCHIN", "içinde ara:");
define("_TOPICSL", "Konular");
define("_TEXTBOTH", "İkisi için");
define("_REQUIREDXF", "İhtiyacı var:");
define("_OPTIONALXF", "İstersen:");
define("_THREADNAME", "Konu: ");
define("_COMEFROM", "Bu konunun yazarı : ");
define("_URLOFTHISSITE", "Bu sayfanın URL'u: ");
define("_TEXTNEWCODE", "Yeni kelime: ");
define("_TEXTMESSOTD", "Bugün yazılanlar");
define("_TEXTMESSOTDSTATUS", "Bugün yazılanlar'ı göster");
define("_AFFJUMPER", "Navigation-Jumper'i sayfa sonunda göster");
define("_TEXTGLOBALTIMESTATUS", "Forum için aynı zaman ayarı");
define("_EMALALLTOADMIN", "Admin'e Forum'daki Değişiklikleri E-Mail aracılığıyla bildir");
// define("_AVATARPATH", "Avatar'lara giden Web-Adresi (örnek: images/forums/avatar)");
define("_SIGIMGXXXAUTH", "Daha büyük resimli İmza belirle");
define('_SIGIMGHEIGHT', 'Yüksekliği (Piksel olarak örnek: 150)');
define('_SIGIMGWIDTH', 'Genişliği (Piksel olarak örnek: 300)');
define('_MORE_SMILIES', 'Daha fazla Gülücük...');
define('_TEXTAREACOLS', 'satır (örnek:80)');
define('_TEXTAREAROWS', 'dize (örnek.:8)');
define('_TRI_ASC', 'küçükten büyüğe doğru sırala');
define('_TRI_DESC', 'büyükten küçüğe doğru sırala');
define('_TEXTRIGHTS', 'Haklar:');
define('_TEXTCLOSE', 'Kapat');
define("_EMAILTHREADNOTIFYSUBJECT", "Forum'a yeni mesaj yollandı");
define("_EMAILTHREADNOTIFYINTRO", "Yeni mesaj yollandı: ");
define("_EMAILMODIFIEDNOTIFYSUBJECT", "Forum'da bir mesaj düzeltildi :");
define("_EMAILMODIFIEDNOTIFYINTRO", "Bir mesaj düzeltildi: ");
define("_EMAILSUPPRNOTIFYSUBJECT", "Forum'da bir mesaj silindi: ");
define("_EMAILSUPPRNOTIFYINTRO", "Bir mesaj silindi: ");
define('_POSTMESSAGEBOXSIZE', 'Posta-Mesaj-Kutusu\'nun büyüklüğü');
define('_SIG', 'İmza');
define('_TEXTFORUMTIME', 'Zaman-Management\'i');
define('_EMAILREGULATION', 'Mail-Management\'i');
define('_MAILONPOST', 'Her cevaptan sonra Mail gönder');
define('_MAILONEDIT', 'Her düzenlenen mesajdan sonra Mail yolla');
define('_MAILONDELE', 'Her silinen mesajdan sonra Mail yolla');
define('_NBITEMSINSTATS', 'Sıraların istatistikteki sayısı');
define('_TEXTDUREEMESSOTD', '"Bugün yazılanlar"daki gün sayısı(gün olarak)');
define('_ADMINSTARSCONFIG', 'İşler Yönetimi');
define('_SAMEASUSERS', 'Kullanıcıyla aynı');
define('_MAXUSERSP3', 'En yüksek kullanıcı sayısı +3');
define("_EVALSTATS16", 'define("_STATS16","<b>Top $nbitemsinstats en aktiv üyelerin:</b><br /> $topusers");');
define("_TEXTPOSTREPLYNOTE", "Cevap");
define("_MXB_DAYS", " Gün");
define("_SELECTEDTIME", "Yandaki tarihten eski tüm konuları sil \"Last Post\": ");
define("_SELECTEDFORUM", "Bu Forum'u seçtiniz:<br />(Bilgi: alt forum'lar dikkate alınmadı eğer tüm forum (\"Alle\") seçilmediyse.)");
define("_SELECTEDFORUMALL", "Tüm forum !!!");
define("_SELECTEDFORUMERROR", "Hata! Temizlenecek Forum seçmedin!");
define("_MENUCOUNTFORUM", "Sayıcı güncelle");
define("_TEXTCOUNTFORUM", "Sayıciı güncelle");
define("_TEXTCOUNTFORUMEXPLAIN", "Bu seçenek ile tüm üyelerin, konuların, alt forum'ların ve Forum'ların ve tümünün \"Last-Post\") sayıcıları kontrol edilecek ve hata varsa düzeltilecek. Bu en çok phpMyAdmin tarafından MD'lerine vs. yapılan Değişiklikler için önemli<br />devam edilsin mi?");
define("_TEXTCOUNTFORUMRESOULT1", "tane <b>");
define("_TEXTCOUNTFORUMRESOULT2", "hata</b> bulundu ve düzeltildi.");
define("_LASTONEHOUR", "son saatte");
define("_LAST12HOURS", "son 12 saatte");
define("_LAST24HOURS", "son 24 saatte");
define("_TEXTNEWLINK", "<b>Forum'u link ile yönelt</b>");
// define("_TEAMAVATARPATH", "Avatarlar için Web-adresi, sadece Tim üyeleri için:");
define("_TEXTNEWLINKFROM", "Bu Forum'dan (kaynak): ");
define("_TEXTNEWLINKTO", " bu foruma (hedef) yeni link belirle: ");
define("_TEXTNEWLINKNOTE", "<b>Bilgi</b>: Als <b>Kaynak Forum'lar</b> sadece <b>alt Forum içermeyen Forumlar</b> olabilir. Alt forumlularda olabilir ama rahatlık sorunları oluşabilir. Hedef Forum olarak alt Forumlularda sorunsuz seçilebilir.");
define("_TEXTNEWTHREADLINK", "Konuya başka yere bağla");
define("_TEXTFROMFORUM", "Bu Forum'dan: ");
define("_TEXTNEWLINKFROMTHREAD", "Kaynak Konu: ");
define("_TEXTNEWLINKTOFORUM", "Hedef Forum: ");
define("_TEXTOLDLINKTOFORUM1", "Bu konu zaten<b><br />");
define("_TEXTOLDLINKTOFORUM2", " Forum'larına </b> bağlanmış:");
define("_TEXTDELETELINKTOFORUM", "Bağlantıyı sil? ");
define("_LINKTHREADMSG", "Değişiklikler kaydedildi. Yine konu başlıklarına yönlendirileceksiniz.");
define("_TEXTLINKFORUMSTATUS", "Forum bağlantılarını aç: ");
define("_TEXTLINKTHREADSTATUS", "Thread bağlantılarına izin ver (sadece tim):  ");
define("_TEXTLINKTHREADSTATUSDISABLED", "Thread bağlantıları kapalı.");
define("_AFFJUMPERDYNAMIC", "dinamik Navigations-Jumper kullanıcısı (güvenli ama yavaş)");
define("_TEXTPRIORITY", "Önem: ");
define("_TEXTPRIORITYHIGH", "yüksek");
define("_TEXTPRIORITYNORMAL", "orta");
define("_TEXTPRIORITYLOW", "düşük");
define("_TEXTPRIORITYBOLD", "kalın");
define("_TEXTPRIORITYITALIC", "italik");
define("_TEXTPOSTTOTHREAD", "Bu cevaptan yeni bir konu yapmak için buraya tıkla.");
define('_MAILONTHREAD', 'Her yeni yazılan konudan sonra E-Mail gönder');
define("_EMAILALLTOMODERATOR", "Moderatörler için haber durumu");
define('_MODERATORMAILONTHREAD', 'Moderatörleri yeni yazılan konularda haberdar et');
define('_MODERATORMAILONPOST', 'Moderatörleri yeni yazılan cevaplarda haberdar et');
define('_MODERATORMAILONEDIT', 'Moderatörleri düzenlemelerde haberdar et');
define('_MODERATORMAILONDELETE', 'Moderatörlere silinen yazılarda haberdar et');
define('_TEXTALLOWU2U', 'Üyelerin özel mesaj sistemini kullanmasına izin ver');
define('_TEXTCOLORSUBJECT', 'Normal kullanıcılara konularda önem seceneğini sun');
// define('_TEXTMESSSLV', 'yeni postalar');
define('_TEXTMESSSLVBIG', 'son girişten itibaren yazılan yazılar');
define('_TEXTKEEPLASTVISIT', 'Mesajların kaç saat "yeni postalar" bölümünde kalsın?');
define('_TEXTADVANCEDUINFO', 'ayrıntılı bilgilerin diğer üyelere gösterilsin mi (yer, ICQ vs.)?');
define('_TEXTU2U', 'Diğer üyeler size özel mesaj gönderebilsin mi?');
define('_TEXTNOTIFYME', 'Forumlar\'daki Değişiklikler hakkında haberdar edilmek istiyor musun?');
define('_TEXTNOTIFYEMAIL', 'Email aracılığıyla haberdar et');
// define('_TEXTNOTIFYPM', 'özel mesaj aracılığıyla haberdar et');
define('_TEXTNOTIFYTHREAD', 'yeni konularda?');
define('_TEXTNOTIFYPOST', 'yeni cevaplarda?');
define('_TEXTNOTIFYEDIT', 'yazı düzenlemelerinde?');
define('_TEXTNOTIFYDELETE', 'yazı silinmelerinde?');
define('_TEXTPMUSER', 'Admin-Account\'a mesaj özel mesaj almak isteyen üye ismi. ZORUNLU!');
// define("_TEXTNOGUESTPOSTING", "Misafir postaları kapalı. Lütfen <a href=\"%s\"><u>kayıt ol</u></a> yada sisteme <a href=\"%s\"><u>giriş yapın</u></a>.");
define("_TEXTFORUMNOGUESTPOSTING", "Misafir postası bu Forum'da kapalı. Lütfen <a href=\"%s\"><u>kayıt ol</u></a> yada sisteme <a href=\"%s\"><u>giriş yap</u></a>.");
define("_TEXTTOTALMEMBERTIME", "toplam Çevrimiçi süresi: ");
define("_TEXTHOURS", "saat");
define("_TEXTMINUTS", "dakika");
define("_TEXTREALNAME", "gerçek isim:");
define("_TEXTOCC", "meslek:");
define("_TEXTINTEREST", "ilgi alanları:");
define("_TEXTTRACKING", "izleme");
define("_TEXTREFRESH", "yenile");
define("_TEXTBBRULESWINDOW", "Forum kuralları");
define("_TEXTCLOSEWINDOW", "pencereyi kapat");
define("_TEXTSMILIESROWSNUMBER", "yazı yazarken ve düzeltirken kaç satır Smily gösternsin?");
define("_TEXTCOLOR1", "yüksek önemli mesajlar için yazı rengi:");
define("_TEXTCOLOR2", "düşük önemli mesajlar için yazı rengi:");
define("_EVALSTATS82", 'define("_STATS82","En çok gösternen forum  $poptimeforum $poptimedisplay kullanıcı saati ile");');
define("_TEXTNOTIFYTYPE", "Yönetici-Profil'in hangi haber alma sistemini kullansın?");
define("_TEXTADMINISTRATORMAIL", "Yönetici");
define("_TEXTMODERATORMAIL", "Moderatör");
define("_TEXTADVANCEDONLINE", "Hangi kullanıcının hangi forum'da olduğu gösterilsin mi?");
define("_TEXTMEMLISTANONYMOUSSTATUS", "anonim kullanıcılara üye profillerini göster?");
define("_TEXTLASTTHREADS", "Son cevap yazılan konular");
define("_TEXTLAST50THREADS", "Son 50 cevaplanmış konu");
define("_TEXTLAST50POSTS", "Son 50 cevap");
define("_TEXTTHREADSWITHOUTREPLY", "Cevapsız konu");
define("_TEXTSEARCHRESULTS", "Bulunan");
// Version 1.0.4
define("_CHMODFAILEDSETTINGS", "Hata. \"settings.php\" için yazı hakkı yok.<br /><b>kayıt mümkün değil!</b>");
define("_MOVETHREADMSGERR", "Hata. Hedef olarak geçerli bir forum seçilmeli. Şimdi konu başlıklarına yönlendirileceksiniz.");
// define("_MEMBERAVATARPATH", "Üye Avatar'ları için Web-adresi:<br />(Avatarlar dosyaları üye isimleriyle aynı olmalı!)");
define("_TEXTSMILIESLINENUMBER", "yazı yazarken ve düzeltirken kaç satır smily gösterilsin?");
define("_TEXTLASTPOSTSUBJECT", "Forum-Lastpost'da sözü edilen konunun Başlığı gösterilsin mi?");
define("_TEXTLASTPOSTSUBJECTCHARS", "Başlıkta kac harf gösterilsin?");
define("_TEXTDEFAULTVALUES", "Bunlar için normal değer");
define("_TEXTDEFAULTVALUESF", "yeni forumlar");
define("_TEXTDEFAULTVALUESFHTML", "Forum'da HTML-Koduna izin ver");
define("_TEXTDEFAULTVALUESFSMILIES", "Forum'da Gülücüklere izin ver");
define("_TEXTDEFAULTVALUESFBBCODE", "Forum'da BB-Koduna izin ver");
define("_TEXTDEFAULTVALUESFANOPOSTS", "Forum'da anonim postalara izin ver");
define("_TEXTDEFAULTVALUESFIMGCODE", "Forum'da Image-Koduna izin ver");
define("_TEXTDEFAULTVALUESFSTAFF", "Forum sadece tim üyeleri için");
define("_TEXTDEFAULTVALUESFMAIN2SUB", "Alt Forum'ler için genel forum değerlerini kullan");
define("_TEXTDEFAULTVALUESFMODS", "Normal Moderatör listesi<br />(virgülle, boşluk bırakarak ayırılmış)");
define("_TEXTDEFAULTVALUESM", "yeni üyelere");
define("_TEXTDEFAULTVALUESMMSLV", " \"yeni postalar\" kaç saat gösterilsin?");
define("_TEXTDEFAULTVALUESMMAIL", "Üyenin Email-adresini göster");
// define("_TEXTDEFAULTVALUESMINFO", "Üyenin ayrıntılı bilgilerini göster");
define("_TEXTDEFAULTVALUESMNL", "Üyeyi forum haberleri alıcı listesine kaydet");
define("_TEXTDEFAULTVALUESMPM", "U2U-düğmesini üyeye aç");
// Version 1.0.5
define("_TEXTRESET", "Eski durumuna getir");
define("_TEXTRESETFORUM", "Forum'u eski durumuna getir");
define("_TEXTRESETFORUMEXPLAIN", "Bu işlem Forum'u \"Ayarlar'daki\" normal değerlere geri getiriyor.");
define("_TEXTRESETFORUMCHOOSE", "Lütfen eski durumuna getirilecek bölümleri seçin:");
define("_TEXTRESETFORUMFTIME", "tüm forum'lari eski durumuna getir");
define("_TEXTRESETFORUMMTIME", "tüm üye sürelerini eski durumuna getir");
define("_TEXTRESETFORUMFORUM", "Tüm Forum değerlerini eski ayarlarına getir");
define("_TEXTRESETFORUMMEMBER", "Tüm üye ayarlarını eski durumuna getir");
define("_TEXTRESETFORUMALL", "Tüm Forum'u sil (forumla alâkalı tüm bilgilerde silinecek");
define("_TEXTRESETFORUMALLOK", "<b>Lütfen Forum silme işlemini bir daha onayla</b>");
define("_TEXTRESETFORUMEND", "İstenen işlem yapıldı.");
// Version 1.0.6
// define("_EBF_AVATARWIDTH", "Genişlik için sınır, eğer isteniyorsa<br />&nbsp;&nbsp;(Piksel olarak, boş bırakma = sınır yok)");
// define("_EBF_AVATARHEIGTH", "Yükseklik için sınır, eğer isteniyorsa<br />&nbsp;&nbsp;(Piksel olarak, boş bırakma = sınır yok)");
// define("_EBF_AVATARSIZEMEMBER", "Üye-Avatarları için sınır?");
// define("_EBF_AVATARSIZETEAM", "Tim-Avatarları için sınır?");
// define("_EBF_AVATARSIZEDEFAULT", "Normal-Avatar'lar için sınır?");
// Version 1.1.0 Dev
define("_EBF_STAFFONLY", "Sadece Tim-Üyeleri");
define("_EBF_MEMBERONLY", "Sadece kayıtlı Kullanıcılar");
define("_EBF_ALL", "Tümü (anonimlerde)");
define("_EBF_GESCHLECHT", "Cinsiyet");
define("_EBF_ALTER", "Yaş");
define("_EBF_SHORTREPLY", "Ynt.:");
// Version 1.1.a
define("_EB_VISITSITE", "Web siteyi ziyaret et");
define("_EB_PMTOAUTHOR", "Özel Mesaj gönder");
define("_EB_EDITPOST", "Mesajı düzenle");
define("_EB_QUOTEREPLY", "Alıntı ile Cevap");
define("_EB_EMAILUSER", "E-mail gönder");
// ab mxBoard 1.0
define('_ERRORNOMESSAGE', 'Mesajınızı yazmadınız.');
define('_MXBADVANCEDSEARCH', 'Gelişmiş Arama');
define('_MXBIMAGESET', 'Resim seti');
define('_MXBERRORWHILESUBMIT', 'Mesaj yollanırken şu hatalar oluştu:');
define('_MXBPAGEUP', 'Yukarı git');
define('_MXBPAGEDOWN', 'Aşağı git');
define('_MXBLASTPOST', 'Son Mesaj');
define('_MXBSHUREDELETEPOST', 'Bu konuyu silmek istediğinden emin misin?');
define('_MXBSHUREDELETETHREAD', 'Bu temayı bütün cevaplarıyla birlikte silmek istediğinden emin misin?');
define("_TEXTMESSAGE2", "Mesaj:");
define('_MORERESULTS', 'Toplam %d sonuç bulundu. Lütfen arama Sonuçlarını Kısıtlayın.');
define('_MXBUSERNOTEXIST', 'Kimliğini görmek istediğiniz üye bulunamadı.');
// ab mxBoard 1.1
define("_MXB_OF", "kimden");
// ab mxBoard 1.2
define("_CAPTCHAON", "Captcha anonim kullanıcılar için aktifleştir");
define("_CAPTCHAUSERON", "Kayıtlı üyeler için aktifleştir");
// define("_MXBBOARDPROFILE", "Forum Profili");

define("_MXB_MALE", "Bay");
define("_MXB_FEMALE", "Bayan");

?>