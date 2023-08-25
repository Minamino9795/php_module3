<?php
// khởi tạo hàng đợi
$queue = new SplQueue(); 

// thêm phần tử vào phần đuôi của hàng đợi
$queue->enqueue('N');
$queue->enqueue('G');
$queue->enqueue('H');
$queue->enqueue('I');

$queue->enqueue('A');



// duyệt lần lượt qua các phần tủ của hàng đợi


// $queue->rewind(); 
// rewind() được sử dụng để di chyển con trỏ của danh sách liên kết đôi  về phần tử đầu tiên trong danh sách
print_r($queue);

// foreach ($queue as $task) {
//     echo $task, "\n";
// }

while ($queue->valid()){
    echo $queue->current(), "\n";
    $queue->next();
}
// print_r($queue) ;
// echo "<br>";
// echo "<br>";


// echo "phần tử đầu tiên được lấy ra là: " . $queue->dequeue(); // lấy phần tử đầu tiên

// echo "<br>";
// echo "<br>";

// print_r($queue);