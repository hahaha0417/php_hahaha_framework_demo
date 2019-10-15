# php_hahaha_framework

// ---------------------------------------------------- \
php hahaha framework \
O .O \
b \
// ---------------------------------------------------- \
高效能框架 - \
// ---------------------------------------------------- \
Opcache下 \
hello world \
使用apache ab.exe跑過50000 request \
./ab -n 50000 -kc 10 "url(localhost)" \
在root url match，QPS 4300 \
在long url match，QPS 3300 \
// ---------------------------------------------------- \
原生php - \
// ---------------------------------------------------- \
Opcache下 \
hello world \
使用apache ab.exe跑過50000 request \
./ab -n 50000 -kc 10 "url(localhost)" \
在root url match，QPS 5800 \
在long url match，QPS 4300 \
// ---------------------------------------------------- \
閒聊 - \
// ---------------------------------------------------- \
其實不是我的錯...我已經接近原生php的速度了 \
看起來是apache不知道對長路徑做了什麼處理，導致比較慢 \
// ---------------------------------------------------- \
運行環境 \
// ---------------------------------------------------- \
i5 4430 3G \
8G \
Windows 10 64bit \
一般硬碟(Raid 0) \
// ---------------------------------------------------- \
 \
// ---------------------------------------------------- \
製作動機 \
// ---------------------------------------------------- \
基於Laravel + Opcache很完整並可以TTFB 40ms \
其實不太需要為了套版做一個自己的框架 \
 \
本框架只打算做到核心部分Route + Render \
 \
因為應用上大概套版 + API + Console，沒有高效能需求， \
因此我沒有必要對所有模組都自己精製(我大部分也不會做) \
所以其他大部分引用Composer主流套件打包整入使用 \
// ---------------------------------------------------- \
 \
// ---------------------------------------------------- \
本框架(lcalhost TTFB，chrome(Ctrl + R)) - 一般正常使用，例如簡單套版 \
// ---------------------------------------------------- \
正常流程(No Opcache)\
 - 沒有composer套件 - \
Console 10 ~ 15 + ms \
API 15 ~ 20 + ms \
Web 15 ~ 20 + ms \
 - 有composer套件 - \
Console 10 ~ 50 + ms \
API 15 ~ 50 + ms \
Web 15 ~ 50 + ms \
 \
正常流程(Opcache) \
Console 3 ~ 5 + ms  \
API 5 ~ 10 + ms \
Web 5 ~ 10 + ms \
// ---------------------------------------------------- \
Opcache測試頁面 \
http://hahaha0417.zapto.org:8084/ \
// ---------------------------------------------------- \
 \
// ---------------------------------------------------- \
議題 \
// ---------------------------------------------------- \
效能議題 :  \
本框架設計概念是沒用到的東西都不載入 \
要用時才載入 \
因此hello world實際上會非常快(因為我只載入主流程的東西，並且我精簡主流程的程式碼) \
 \
但是要是當某controller使用到很多東西，因為我也是使用composer套件，所以要是引用的套件太大或太慢 \
我的效能也會被影響 \
 \
維護問題 :  \
因為Web產品對效能沒有太大需求，可能會因為客戶沒錢而壓低價錢， \
因此我沒意義對所有模組自己精製(我大部分也不會做) \
 \
作業系統問題 : \
我是Windows粉絲，要用在Linux or Mac有問題請自己處理(應該只有中文檔名問題)， \
我沒打算用我的框架跑在Mac or Linux上，我不是專門做框架給人家用的 \
// ---------------------------------------------------- 

