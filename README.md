# Backend Eat Food With You 
## โปรแกรมสำหรับคนรักการทำอาหาร

 * ทุกท่านสามารถมาแลกเปลี่ยนสูตรอาหาร หรือนำสูตรอาหารไปทำตามที่บ้านง่ายๆ เพียงกดหาเมนูที่ต้องการ หรือเลือกจาก catagories 
 * หรือหากนึกไม่ออกว่าวันนี้จะทานอะไรก็มีระบบสุ่มเมนูอาหารมาให้
 * เพิ่มฟังก์ชันพิเศษสำหรับคำนวณวัตถุดิบตามจำนวนผู้รับประทาน เพื่อให้ปริมาณอาหารเพียงพอต่อการรับประทาน
 * หน้าเว็บสวยงามสบายตา อ่านง่าย 
 
-----------------------
### รายชื่อสมาชิก 
1. นายธรรมสรณ์ ยิ้มสวัสดิ์     รหัสนิสิต 6210406602
2. นางสาวแพรว ปักษานนท์    รหัสนิสิต 6210406645
3. นายณัฐพงศ์  พิสุทธิรัตนพันธุ์ รหัสนิสิต 6210406548
4. นายธรรศ    อาจารสิริ      รหัสนิสิต 6210402453
5. นายสุภเวช   อมรรักษากุล   รหัสนิสิต 6210406734
6. นายศุภวัชร   สาครรัตนวงศ์  รหัสนิสิต 6210406696

-----------------------
## Project setup
**Clone this Repo**

```
https://github.com/EatFoodWithYou/eatfoodwithyou-backend.git
```
**Install Program**

```
composer install
```
```
npm install
```
**Create file .env from .env.example**
```
copy .env.example .env
```
**Setup&edit Database in File .env**
```
DB_CONNECTION=mysql
DB_HOST={hostname}
DB_PORT={portname}
DB_DATABASE= {your database name }
DB_USERNAME= {your database username }
DB_PASSWORD= {your database password }
```
**Run and Generate APP**
```
composer dump-autoload
```
```
php artisan key:generate
```
**Migrate And Seed**
```
php artisan:migrate
```
```
php artisan migrate:fresh --seed
```



