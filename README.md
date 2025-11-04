# iCORP TZ: API Simulation

## Maqsad
iCORP vakansiyasi uchun test topshiriq: test API bilan ishlash va HTTP so‘rovlarni qayta ishlash.

## Texnologiyalar
- PHP 8.4
- Laravel 12
- Cache (part1 & final_code)
- HTTP Client (Http::post / get)
- Ngrok local testing

## Ishlash algoritmi
1. **Start**  
   - `POST /api/start` → part1 olinadi.
2. **Receiver (callback)**  
   - `POST /api/receiver` → part2 yuboriladi, final_code yaratiladi.
3. **Result**  
   - `GET /api/result` → combined_code va final_message ko‘rinadi.
   
## Test qilish
1. `php artisan serve` → Laravel server ishga tushadi.
2. `/api/start` → POST so‘rov yuborish.
3. `/api/receiver` → POST so‘rov yuborish (part2 ni yuboring).
4. `/api/result` → GET so‘rov yuborish → final message ko‘rinadi.

## Bonus
- Barcha qadamlar **bitta controllerda** ishlaydi.
- Ngrok orqali **lokal simulyatsiya** ishlaydi.

