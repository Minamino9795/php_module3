<?php


//SATCK

// class Stack {
//     private $items = array();

//     // Thêm phần tử vào đỉnh stack
//     public function push($item) {
//         array_push($this->items, $item);
//     }

//     // Lấy phần tử ở đỉnh stack và xóa nó khỏi stack
//     public function pop() {
//         if ($this->isEmpty()) {
//             return null;
//         }
//         return array_pop($this->items);
//     }

//     // Truy cập phần tử ở đỉnh stack mà không xóa nó
//     public function peek() {
//         if ($this->isEmpty()) {
//             return null;
//         }
//         return end($this->items);
//     }

//     // Kiểm tra xem stack có rỗng hay không
//     public function isEmpty() {
//         return empty($this->items);
//     }

//     // Lấy số lượng phần tử trong stack
//     public function size() {
//         return count($this->items);
//     }
// }

// // Sử dụng lớp Stack
// $stack = new Stack();
// $stack->push(1);
// $stack->push(2);
// $stack->push(3);

// echo $stack->pop() . "\n"."\n";  
// echo $stack->pop() ."\n"."\n"; 

// echo $stack->peek() ."\n"."\n"; 

// echo $stack->isEmpty() ? "Stack is empty" : "Stack không rỗng" ."\n"."\n"; 

// echo $stack->size(); 






// QUEUE


class Queue {
    private $items = array();

    // Thêm phần tử vào cuối hàng đợi
    public function enqueue($item) {
        array_push($this->items, $item);
    }

    // Loại bỏ và trả về phần tử ở đầu hàng đợi
    public function dequeue() {
        if ($this->isEmpty()) {
            return null;
        }
        return array_shift($this->items);
    }

    // Truy cập phần tử ở đầu hàng đợi mà không xóa nó
    public function front() {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->items[0];
    }

    // Truy cập phần tử ở cuối hàng đợi mà không xóa nó
    public function rear() {
        if ($this->isEmpty()) {
            return null;
        }
        return end($this->items);
    }

    // Kiểm tra xem hàng đợi có rỗng hay không
    public function isEmpty() {
        return empty($this->items);
    }

    // Trả về số lượng phần tử trong hàng đợi
    public function size() {
        return count($this->items);
    }
}
 
$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

echo $queue->dequeue() . "\n\n";  
echo $queue->dequeue() . "\n\n"; 

echo $queue->front() . "\n\n"; 
echo $queue->rear() . "\n\n"; 

echo $queue->isEmpty() ? "Queue is empty" : "Queue không rỗng" . "\n\n"; 

echo $queue->size();






