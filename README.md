# php_hahaha_framework

// ----------------------------------------------------
php hahaha framework
// ----------------------------------------------------
高效能框架 - 待主流程做完驗證是否是
// ----------------------------------------------------

// ----------------------------------------------------
最低需求
// ----------------------------------------------------
i5 4430 3G
8G
Windows 10 64bit
// ----------------------------------------------------

// ----------------------------------------------------
製作動機
// ----------------------------------------------------
基於Laravel + Opcache很完整並可以以在40ms內渲染出頁面
其實不太需要為了套版做一個自己的框架

本框架只打算做核心部分Route + 一般Render

因為應用上大概套套版 + API + Console，我沒有必要對所有模組都自己精製(我大部分也不會做)
其他大部分引用Composer主流套件打包整入使用
// ----------------------------------------------------

// ----------------------------------------------------
本框架目標
// ----------------------------------------------------
正常流程
Console 10+ ms 
API 15+ ms
Web 15+ ms

正常流程 + Opcache
Console 5+ ms 
API 10+ ms
Web 10+ ms
// ----------------------------------------------------
