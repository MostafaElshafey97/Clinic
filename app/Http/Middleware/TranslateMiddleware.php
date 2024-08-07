<?php

namespace App\Http\Middleware;

use Closure;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateMiddleware
{
    public function handle($request, Closure $next)
    {
        // إنشاء مترجم جديد
        $translator = new GoogleTranslate();

        // تحديد اللغة المستهدفة (على سبيل المثال: العربية)
        $targetLanguage = 'ar';

        // الترجمة الآلية لجميع النصوص في الصفحة
        $translatedPage = $translator->translate($next($request)->getContent(), $targetLanguage);

        // تحديث المحتوى المرتجم في الصفحة
        $response = $next($request);
        $response->setContent($translatedPage);

        return $response;
    }
}
