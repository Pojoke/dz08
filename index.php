
<?php

    class PositiveArray
    {
        private array $arr;

        public function __construct(array $arr)
        {

            $this->arr = array_filter($arr, function ($value) {
                return is_numeric($value) && $value > 0;
            });
        }

        public function addNumber($number)
        {
            if (is_numeric($number) && $number > 0) {
                $this->arr[] = $number;
            } else {
                throw new InvalidArgumentException("Число должно быть положительным.");
            }
        }

        public function __toString(): string
        {
            return '[' . implode(', ', $this->arr) . ']';
        }
    }

    $arr = new PositiveArray([1, -2, -3, -4, 0, 5]);
    echo $arr;

    $arr->addNumber(10);
    echo $arr;

?>