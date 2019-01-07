$CI =& get_instance(); // เรียนคุณสมบัติต่าง ๆ ของ CI และ assign ให้กับตัวแปร $CI
$template = $CI->model_template->getAllTemplate(); // เรียกใช้เมธอด getAllTemplate 
print_r($template); // ดูข้อมูล array จากฐานข้อมูลโดยใช้คำสั่ง print_r