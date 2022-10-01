<?php
system("xdg-open https://youtube.com/channel/UCJPb95eqrUwuy3NqMDUfpCQ");
function curl($nomor = []) {
  $_post = [
    'mobile' => $nomor,
    'country' => 'ID'
  ];
  $post = http_build_query($_post);
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'http://t.bosbospartner.com/trade/sendMobileCode');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
  $response = curl_exec($curl);
  curl_close($curl);

  return json_decode($response, true);
}
print "\033[0;32m
\e[1;35m╔══════════\e[1;34m\e[1;36m══════════\e[1;33m═════════════\e[1;35m═══════╗\e[1;35m
                              \e[1;36mversion.\e[1;33mv1
 ██████╗.  █████╗    ██         ██╗\e[1;36m     
██╔════╝  ██╔══██╗.  ██║        ██║     
██║       ███████║   ██║        ██\e[1;34m║     
██║       ██╔══██║   ██║        ██\e[1;33m║     
╚██████╗  ██║  ██║.  ███████╗   ███████\e[1;34m╗
\e[1;34m╚═════╝  ╚═╝  ╚═╝   ╚══════╝   ╚══════╝
          \e[1;33mBY By :   Abdul abel.        

\e[1;35m╚══════════\e[1;34m\e[1;36m══════════\e[1;33m═════════════\e[1;35m═══════╝\e[1;35m
\n \n ";
echo " \e[1;33m [nomor] \n:";
echo "\e[1;35m [PAKE 8 YA NGAB] :";
$target = trim(fgets(STDIN));
$respon = curl($target);
if ($respon['msg'] === 'format nomor HP salah, silakan coba lagi') {
  print "Target salah!\n";
} else {
  print "\033[0;35m Jumlah Spam 1\033[37m :\033[37m\033[33m[KALO SUDAH LIMIT TUNGUH BEBERAPA MENIT LAGI BARU ULANGI NGAB :V]\n\n";
  print  "bangke kau ";
  





}