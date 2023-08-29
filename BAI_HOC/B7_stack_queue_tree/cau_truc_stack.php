<?php
class Stack
{
    private $stack = array();
    private $limit;
    public function __construct($limit = 10)
    {
        $this->limit = $limit;
    }
    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo "stack is full . cannot push $item .\n";
        }
    }
    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->stack);
        } else {
            echo "stack is empty. Cannot pop.\n";
            return null;
        }
    }
    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->stack[0];
        } else {
            echo "stack is empty. No top element . \n";
            return null;
        }
    }
    public function isEmpty()
    {
        return empty($this->stack);
    }
}
$stack = new  stack(5);

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);

echo " Top element : ". $stack->top(). "\n";
$stack->push(6);
$stack->push(7);

echo $stack->isEmpty() ? "stack is empty" : "stack is not empty". "<br>";

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
echo $stack->isEmpty() ? "stack is empty" : "stack is not empty". "<br>";

echo $stack->top();

