نظام إدارة مدونات باستخدام Laravel و Tailwind CSS
قائمة بالوظائف الأساسية للمشروع:
- إضافة، تعديل، حذف البوستات
- نظام صلاحيات للمستخدمين
- تصميم متجاوب وسهل الاستخدام
خطوات تثبيت المشروع وتشغيله محلياً:
1. استنساخ المستودع:
   git clone https://github.com/haya-khaqtib/blog_laravel_project.git
2. الانتقال إلى مجلد المشروع:
   cd project-folder
3. تثبيت الحزم:
   composer install
4. إعداد ملف البيئة:
   cp .env.example .env
5. إنشاء مفتاح التطبيق:
   php artisan key:generate
6. إعداد قاعدة البيانات وتشغيل الترحيلات:
   php artisan migrate
7. تشغيل السيرفر:
   php artisan serve
   8.يجب أن يكون لديك السيرفر في حالة تشغيل إما (xampp || mampp)
   9.قاعدة البيانات موجودة مع ملفات المشروع يمكنك استخدامها.

  




