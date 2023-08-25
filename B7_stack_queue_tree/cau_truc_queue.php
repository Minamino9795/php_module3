<?php
class Node
{
    public $value;
    public $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}

class Queue
{
    public $front;
    public $back;

    public function isEmpty()
    {
        return $this->front === null;
    }

    public function enqueue($value)
    {
        $newNode = new Node($value);
        if ($this->isEmpty()) {
            $this->front = $newNode;
            $this->back = $newNode;
        } else {
            $this->back->next = $newNode;
            $this->back = $newNode;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            echo "Queue is empty. Cannot dequeue.\n";
            return null;
        }
        $value = $this->front->value;
        $this->front = $this->front->next;
        if ($this->front === null) {
            $this->back = null;
        }
        return $value;
    }
}

$queue = new Queue();

$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

echo $queue->dequeue();
echo $queue->dequeue();

echo $queue->isEmpty() ? "rỗng" : "không rỗng";

$queue->enqueue(4);
$queue->enqueue(5);

echo $queue->dequeue();
echo $queue->dequeue();
echo $queue->dequeue();

echo $queue->isEmpty() ? "rỗng" : "không rỗng";
